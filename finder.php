<?php

require 'vendor/autoload.php';

return \StubsGenerator\Finder::create()
	->in('source//wp-graphql')
	->sortByName()
;
