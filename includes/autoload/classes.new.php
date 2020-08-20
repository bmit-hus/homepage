<?php

spl_autoload_register( 'autoload_class');

function autoload_class( $class)
{
	//  get URI
	$uri = $_SERVER[ 'REQUEST_URI'];

	// define path to file
	$uri_contains__oages = strpos( $uri, 'pages');
	if ( $uri_contains__oages !== false)
	{
		$path = '';
	}
}

// EOF
