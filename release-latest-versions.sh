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
	local TAG="$1"
	local IS_REPACK="${2:-false}"

	# The version from the tag.
	local VERSION="${TAG%%+repack.*}"
	VERSION="${VERSION#v}"

	# If IS_REPACK is true, get the repack version from the tag.
	if [ "${IS_REPACK}" = true ]; then
		REPACK_VERSION="${TAG#*+repack.}"
		if [ "${REPACK_VERSION}" = "${TAG}" ]; then
			REPACK_VERSION=0
		fi
	fi

	echo "Checking if version ${VERSION} exists on Composer..."

	# If the version doesn't exist, return
	if ! composer show --working-dir=source --available wpackagist-plugin/wp-graphql "${VERSION}" >/dev/null 2>&1; then
		echo "Version ${VERSION} does not exist. Skipping..."
		return
	fi

	echo "Building v${VERSION}"

	# Replace the version of wpackagist-plugin/wp-graphql in composer.json with $VERSION
	contents="$(jq --arg version "${VERSION}" '.require."wpackagist-plugin/wp-graphql" = $version' <source/composer.json)" &&
		echo "${contents}" >source/composer.json

	cat source/composer.json

	composer update --working-dir=source

	# Generate stubs
	echo "Generating stubs for ${VERSION}..."
	composer run-script generate

	# Tag version
	if [ "${IS_REPACK}" = false ]; then
		echo "Tagging ${TAG}"
		git commit --all -m "Generate stubs for WPGraphQL ${TAG}"
		git tag "${TAG}"
	else
		REPACK_VERSION=$((REPACK_VERSION + 1))
		echo "Tagging v${VERSION}+repack.${REPACK_VERSION}"
		git commit --all -m "Generating stubs for WPGraphQL v${VERSION}+repack.${REPACK_VERSION}"
		git tag "v${VERSION}+repack.${REPACK_VERSION}"

		# Delete the old git tag locally.
		echo "Deleting old tag locally..."
		git tag -d "${TAG}"

		# Delete the old tag on GitHub.
		if [ -z "${DRY_RUN}" ]; then
			echo "Deleting old tag from Origin."
			git push --delete origin "${TAG}"
		fi
	fi

	# Push to GitHub
	if [ -z "${DRY_RUN}" ]; then
		git push
		git push --tags
		git pull
		git pull --tags
		echo "Tags synced."
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

# Read latest version from composer.json if no FROM_VERSION is set.
if [ -z "${FROM_VERSION}" ]; then
	FROM_VERSION="$(jq -r '.require."wpackagist-plugin/wp-graphql"' <source/composer.json | sed -e 's/[^0-9.]*//g')"
fi

# Loop through all possible versions and see if they exist as tags
for POSSIBLE_VERSION in ${POSSIBLE_VERSIONS}; do
	if dpkg --compare-versions "${POSSIBLE_VERSION#v}" lt "${FROM_VERSION:-1.0.0}"; then
		echo "Skipping ${POSSIBLE_VERSION}"
		continue
	fi

	echo "Checking ${POSSIBLE_VERSION}"

	# Get the latest tag that starts with POSSIBLE_VERSION
	MATCHED_TAG="$(git tag --list "${POSSIBLE_VERSION}*" --sort=-v:refname | head -n 1)"

	# If we matched a tag, check if we should rerelease it
	if [ -n "${MATCHED_TAG}" ]; then

		if [ -z "${SHOULD_RERELEASE}" ]; then
			echo "Tag exists as ${MATCHED_TAG}. Skipping..."
			continue
		fi

		echo "Tag exists as ${MATCHED_TAG}. Rereleasing..."
		do_release "${MATCHED_TAG}" true
		continue
	fi

	# If the tag doesn't exist, release it
	do_release "${POSSIBLE_VERSION}" false
done
