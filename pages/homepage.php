<?php

// set path to root dir
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ( strpos( $url, 'pages' ) !== false )
{
  $root= '../.';
}
else
{
  $root = '..';
}

//// preload includes
include_once "$root/includes/autoload.inc.php";
include_once "$root/includes/library.inc.php";

// page code

$add->openw('header', 'left', '');

  $add->title( 'test' );

$add->shut('header');

$add->navbar();

$add->openw('main', 'grid-container', '');

  $add->lorem_ipsum();

$add->shut('main');

$add->openw('footer', 'right', '');

  $add->declare_c();

$add->shut('footer');

// EOF
