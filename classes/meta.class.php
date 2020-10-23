<?php

// This class contains a constructor and a destructor.
  // constructor loads head with meta information 
  // and pastes important global variables.
  // destructor pastes closing body and html tags.
// This class also contains global variables.

class Meta
{
  private $lang;
  private $root;
  private $self;
  private $file;

  // SETTERS
  private function set__lang()
  {
    if ( !isset( $this->lang))
    {
      $this->lang = 'en';
    }
  }
  private function set__root()
  {
    $uri = $_SERVER[ 'REQUEST_URI'];

    $uri_contains__pages = strpos( $uri, 'pages') !== false;
    if ( $uri_contains__pages)
    {
      $this->root = '..';
    }
    else
    {
      $this->root = '.';
    }
  }
  private function set__self()
  {
    $this->self = rtrim( basename ( $_SERVER[ 'PHP_SELF']), '.php');
  }
  private function set__file()
  {
    $this->file = basename ( $_SERVER[ 'PHP_SELF']);
  }

  // GETTERS
  public function get__lang()
  {
    return $this->lang;
  }
  public function get__root()
  {
    return $this->root;
  }
  public function get__self()
  {
    return $this->self;
  }
  public function get__file()
  {
    return $this->file;
  }
  public function get__author()
  {
    return 'stigie huber';
  }
  
  // PASTERS
  private function paste__opening_tags()
  {
    $lang = $this->get__lang();

    echo <<<____START
      <!doctype html>
      <html lang="$lang">
____START;
  }
  private function paste__metainfo()
  {
    $author = $this->get__author();

    $title = 'hus.bm-it.ch';
    $description = '';
    $keywords = '';
    // $title        = $_POST[ 'title'];
    // $description  = $_POST[ 'description'];
    // $keywords     = $_POST[ 'keywords'];

    $ajax = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
    $fontawesome = '<script src="https://kit.fontawesome.com/c192e4453c.js" crossorigin="anonymous"></script>';

    echo <<<____META

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="$author">
    <title> $title</title>
    <meta name="description" content="$description">
    <meta name="keywords" content="$keywords">
    <link href="$this->root/css/$this->self.css" type="text/css" rel="stylesheet">
    
    $ajax
    <script defer src="$this->root/js/scripts.js"></script>
  </head>

____META;
  }

  private function init__content()
  {
    echo "<body class=\"page-grid\">";
  }
  private function paste__closing_tags()
  {
    echo "</body></html>";
  }


  // CONSTRUCTOR
  function __construct()
  {
    global $AUTHOR;
    global $ROOT;
    global $SELF;
    global $FILE;

    $this->set__lang();
    $this->set__root();
    $this->set__self();
    $this->set__file();

    $this->paste__opening_tags();
    $this->paste__metainfo();
    $this->init__content();

    $AUTHOR = $this->get__author();
    $ROOT = $this->get__root();
    $SELF = $this->get__self();
    $FILE = $this->get__file();
  }

  // DESTRUCTOR
  function __destruct()
  {
    $this->paste__closing_tags();
  }
}

// EOF
