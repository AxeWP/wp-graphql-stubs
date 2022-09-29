#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for WPGraphQL.\n * @see https://wpgraphql.org\n * @see https://github.com/axewp/wp-graphql-stubs\n */'

FILE="wp-graphql-stubs.php"

set -e

test -f "$FILE"
test -d "source/wp-graphql"

# Download dependencies
if [ ! -d vendor ]; then
    composer update
fi

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

## Use literal-string type for wpdb::prepare() query statement parameter.
#sed -i -e 's#^.*@param string \+\$query \+Query statement.*$#&\n         * @phpstan-param literal-string $query#' "$FILE"

printf '\nnamespace {\n%s\n}\n' "define('WPGRAPHQL_VERSION', '0.0.0');" >>"$FILE"

