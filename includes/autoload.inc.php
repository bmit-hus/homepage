<?php

spl_autoload_register('class_autoload');

function class_autoload( $class )
{
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if ( strpos( $url, 'pages' ) !== false )
  {
    $path = '../classes/';
  }
  else
  {
    $path = 'classes/';
  }

  $ext = '.cls.php';

  $file_query = $path . $class . $ext;

  if ( !file_exists( $file_query ) )
  {
    return false;
  }

  require_once $file_query;
}

// EOF
