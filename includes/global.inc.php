<?php

// set path to root dir
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ( strpos( $url, 'pages' ) !== false )
{
  $root = '..';
}
else
{
  $root = '.';
}

// preload includes
include_once "$root/includes/autoload.inc.php";
include_once "$root/includes/library.inc.php";

// EOF