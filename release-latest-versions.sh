#!/usr/bin/env bash

set -e

# Possible flags:
# --should-rerelease: Rebuild and release old versions.
# --dry-run: Don't push anything to git.
# --from-version=1.0.0: Only release versions after this version.

# Parse flags
while [[ $# -gt 0 ]]; do
	key="$1"

	case $key in
		--should-rerelease)
			SHOULD_RERELEASE=true
			shift
			;;
		--dry-run)
			DRY_RUN=true
			shift
			;;
		--from-version=*)
			FROM_VERSION="${key#*=}"
			shift
			;;
		*)
			# unknown option
			shift
			;;
	esac
done

do_release() {
	local VERSION="$1"
	local REPACK_VERSION="$2"
	local SED_EXP
	
	VERSION="${VERSION#v}"

	echo "Checking if version ${VERSION} exists..."

	# If the version doesn't exist, return
	if ! composer show --working-dir=source --available wpackagist-plugin/wp-graphql "${VERSION}" >/dev/null 2>&1; then
		echo "Version ${VERSION} does not exist"
		return
	fi

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

		# Delete the old tag on GitHub.
		if [ -z "${DRY_RUN}" ]; then
			git push --delete origin "v${VERSION}"
			echo "Tag deleted from server."
		fi
	fi
	
	# Push to GitHub
	if [ -z "${DRY_RUN}" ]; then
		git push
		git push --tags
		git pull
		git pull --tags
		echo "Tags synced"
	else
		echo "Dry run, not pushing to GitHub"
		git push --dry-run --tags
	fi
}

GQL_JSON="$(wget -q -O- "https://packagist.org/packages/wp-graphql/wp-graphql.json")"

# Get every possible version from GQL_JSON. Valid versions are prefixed with `v`, followed by anything.
printf -v JQ_FILTER '.package.versions[].version | select(. | startswith("v"))'
# Sort the versions.
POSSIBLE_VERSIONS="$(jq -r "$JQ_FILTER" <<<"$GQL_JSON" | sort -V)"

# List all possible versions
echo "Possible versions:"
echo "${POSSIBLE_VERSIONS}"

# Read latest version from composer.json if no FROM_VERSION is set.
if [ -z "${FROM_VERSION}" ]; then
	FROM_VERSION="$(jq -r '.require."wpackagist-plugin/wp-graphql"' < source/composer.json | sed -e 's/[^0-9.]*//g')"
fi

# Loop through all possible versions and see if they exist as tags
for POSSIBLE_VERSION in ${POSSIBLE_VERSIONS}; do
	if dpkg --compare-versions "${POSSIBLE_VERSION#v}" lt "${FROM_VERSION:-1.0.0}"; then
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
			if ! git rev-parse "refs/tags/${POSSIBLE_VERSION}+repack.${i}" >/dev/null 2>&1; then
				echo "Rereleasing as ${POSSIBLE_VERSION}+repack.${i}"
				do_release "${POSSIBLE_VERSION}" "${i}"
				break
			fi
		done

		continue
	fi

	# If the tag doesn't exist, release it
	do_release "${POSSIBLE_VERSION}"
done
