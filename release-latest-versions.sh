#!/usr/bin/env bash

set -e

Do_release() {
	local VERSION="$1"
	local SED_EXP

	echo "Releasing ${VERSION} ..."

	if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
		echo "Tag exists!"
		echo
		return 0
	fi

	# Get new version

	## replace the version of wpackagist-plugin/wp-graphql in composer.json with $VERSION

	contents="$(jq --arg version $VERSION '.require."wpackagist-plugin/wp-graphql" = $version' < source/composer.json)" && \
	echo -E "${contents}" > source/composer.json


	echo "$(cat source/composer.json)"
	composer update --working-dir=source

	# Generate stubs
	echo "Generating stubs ..."
	./generate.sh

	# Tag version
	git commit --all -m "Generate stubs for WPGraphQL ${VERSION}"
	git tag "v${VERSION}"
	git push
	git push --tags
	git pull
	git pull --tags
}

GQL_JSON="$(wget -q -O- "https://packagist.org/packages/wp-graphql/wp-graphql.json")"

for MINOR in 1.5 1.6 1.7 1.8 1.9 1.10 1.11 1.12 1.13 1.14; do
	# Find latest version
	printf -v JQ_FILTER '.package.versions[].version | select(test("^v%s\\\\.%s\\\\.\\\\d+$"))' "${MINOR%.*}" "${MINOR#*.}"
	PATCHES="$(jq -r "$JQ_FILTER" <<<"$GQL_JSON" | sort -t "." -k 3 -g)"
	echo ${PATCHES}

	if [ -z "${PATCHES}" ]; then
		echo "No version for ${MINOR}!"
		echo
		continue
	fi

	while read -r PATCH; do
		Do_release "${PATCH//v/}"
	done <<<"${PATCHES}"
done
