<?php

class Page
{
  // public variables

  // protected variables

  // private variables
  private $first;
  private $last;
  private $author;

  private $lang;
  private $title;
  private $descr;
  private $keywords;

/******************************************************************************/

  // CONSTRUCTOR
  function __construct($title, $lang, $descr)
  {
    $this->first = "stigie";
    $this->last = "huber";
    $this->author = "$this->first $this->last";

    $this->title = $title;
    $this->lang = $lang;
    $this->descr = $descr;
    $this->keywords = "$this->author $this->title $this->descr";

    /**************************************************************************/

    // constructor also provides head section of page
    $file_path = $_SERVER['PHP_SELF'];
    $file_name = basename($file_path);

    echo <<<DECLARE
      <!doctype html>
      <html lang="$this->lang">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="stigie huber">
        <title>$this->title</title>
        <meta name="description" content="$this->descr">
        <meta name="keywords" content="$this->keywords">
        <link href="css/$file_name.css" type="text/css" rel="stylesheet">
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script defer src="js/allinone.js"></script>
      </head>
      <body>
DECLARE;
  }

/******************************************************************************/

  // METHODS
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

  // DESTRUCTOR: provides closing tags of page
  function __destruct()
  {
    $this->shut('body','html');
  }

}

// EOF
