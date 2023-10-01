<?php

return \StubsGenerator\Finder::create()
	->in('source/wp-graphql')
	->notPath('vendor/composer')
	->sortByName()
;
