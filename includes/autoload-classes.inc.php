<?php

spl_autoload_register( 'class_autoload');

function class_autoload( $class_to_load)
{
  $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $url_contains_PAGES = strpos( $url, 'pages') !== false;
  if ( $url_contains_PAGES)
  {
    $path = '../classes/';
  }
  else
  {
    $path = 'classes/';
  }

  $ext = '.class.php';

  $this_file = $path . $class_to_load . $ext;

  if ( !file_exists( $this_file ) )
  {
    return false;
  }

  require_once $this_file;
}

// EOF
