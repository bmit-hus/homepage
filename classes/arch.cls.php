<?php

class Arch
{
  // public variables

  // protected variables

  // private variables


/******************************************************************************/

  function __construct()
  {
    echo <<<DECLARE
      <!doctype html>
      <html lang="en-us">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="stigie huber">
        <title> TITLE </title>
        <meta name="description" content="description">
        <meta name="keywords" content="keywords">
        <link href="css/main.css" type="text/css" rel="stylesheet">
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script defer src="js/allinone.js"></script>
      </head>
      <body>
DECLARE;
  }

/******************************************************************************/

  public function open( $tag )
  {
    $foos = [ $tag ];
    foreach ( $foos as $foo )
    {
      echo "< $foo >";
    }
  }
  public function shut( $tag )
  {
    $foos = [ $tag ];
    foreach ( $foos as $foo )
    {
      echo "</ $foo >";
    }
  }

/******************************************************************************/

  function __destruct()
  {
    $this->shut('body','html');
  }

}
// more code

// EOF
