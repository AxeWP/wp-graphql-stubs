#!/usr/bin/env bash

set -e

# Get --should-rerelease flag
if [ "$1" == "--should-rerelease" ]; then
 SHOULD_RERELEASE=true
fi

do_release() {
	local VERSION="$1"
	local REPACK_VERSION="$2"
	local SED_EXP
	
	VERSION="${VERSION#v}"

	echo "Releasing v${VERSION}..."

	# replace the version of wpackagist-plugin/wp-graphql in composer.json with $VERSION
	contents="$(jq --arg version $VERSION '.require."wpackagist-plugin/wp-graphql" = $version' < source/composer.json)" && \
	echo -E "${contents}" > source/composer.json

	echo "$(cat source/composer.json)"
	composer update --working-dir=source

	# Generate stubs
	echo "Generating stubs for ${VERSION}..."
	composer run-script generate

	# Tag version
	if [ -z "${REPACK_VERSION}" ]; then
		echo "Tagging v${VERSION}"
		git commit --all -m "Generate stubs for WPGraphQL v${VERSION}"
		git tag "v${VERSION}"
	else
		echo "Tagging v${VERSION}+repack.${REPACK_VERSION}"
		git commit --all -m "Generating stubs for WPGraphQL v${VERSION}+repack.${REPACK_VERSION}"
		git tag "v${VERSION}+repack.${REPACK_VERSION}"

		# Delete the old git tag.
	  echo "Deleting old tag v${VERSION}"
		git tag -d "v${VERSION}"
		git push --delete origin "v${VERSION}"
	fi

	git push
	git push --tags
	git pull
	git pull --tags
	echo "Tags synced"
}

GQL_JSON="$(wget -q -O- "https://packagist.org/packages/wp-graphql/wp-graphql.json")"

# Get every possible version from GQL_JSON. Valid versions are prefixed with `v`, followed by anything.
printf -v JQ_FILTER '.package.versions[].version | select(. | startswith("v"))'
# Sort the versions.
POSSIBLE_VERSIONS="$(jq -r "$JQ_FILTER" <<<"$GQL_JSON" | sort -t. -k1,1n -k2,2n -k3,3n -k4,4n)"

# Loop through all possible versions and see if they exist as tags
for POSSIBLE_VERSION in ${POSSIBLE_VERSIONS}; do
	# Skip versions before 1.0.0
	if [ "${POSSIBLE_VERSION#v}" \< "1.0.0" ]; then
		echo "Skipping ${POSSIBLE_VERSION}"
		continue
	fi

	echo "Checking ${POSSIBLE_VERSION}"

	# If the tag exists, skip it or rerelease it.
	if git rev-parse "refs/tags/${POSSIBLE_VERSION}" >/dev/null 2>&1; then
		echo "Tag exists!"

		# 
		if [ -z "${SHOULD_RERELEASE}" ]; then
			echo "Skipping"
			continue
		fi

		# If SHOULD_RERELEASE is true, append -r1, -r2, etc.
		for i in {1..100}; do
			# If the tag doesn't exist, release it
			echo "Rereleasing as ${POSSIBLE_VERSION}+repack.${i}"
			if ! git rev-parse "refs/tags/${POSSIBLE_VERSION}+repack.${i}" >/dev/null 2>&1; then
				do_release "${POSSIBLE_VERSION}" "${i}"
				break
			fi
		done

		continue
	fi

	# If the tag doesn't exist, release it
	do_release "${POSSIBLE_VERSION}"
done
