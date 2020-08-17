<?php

spl_autoload_register( 'autoload_class');

function autoload_class( $class)
{
  // get uri
  $uri = $_SERVER[ 'REQUEST_URI'];

  // define path to file
  $uri_contains__pages = strpos( $uri, 'pages') !== false;
  if ( $uri_contains__pages)
  {
    $path = '../assets/classes/';
  }
  else
  {
    $path = 'assets/classes/';
  }

  // define file extension
  $ext = '.class.php';


  // define file name
  $file = $path . $class . $ext;

  // check if file exists on server
  // retrun false if not
  if ( !file_exists( $file))
  {
    return false;
  }

  // get file
  require_once $file;
}

// EOF
