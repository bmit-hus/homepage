<?php

class Website
{
  private $path_to_root;
  private $page_theme;
  private $file_name;
  public function get_path_to_root()
  {
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $url_contains_PAGES = strpos( $url, 'pages');
    if ( $url_contains_PAGES !== false )
    {
      $this->path_to_root = '..';
    }
    else
    {
      $this->path_to_root = '.';
    }
  }
  private function get_page_theme()
  {
    $page_theme_is_unset = !isset( $_POST['page_theme']);
    if ( $page_theme_is_unset)
    {
      $this->page_theme = 'dark';
    }
    else
    {
      $this->page_theme = $_POST['page_theme'];
    }
  }
  private function get_file_name()
  {
    $this->file_name = rtrim( basename ( $_SERVER[ 'PHP_SELF']), '.php');
  }


  private $lang;
  private $title;
  private $descr;
  private $keywords;
  private $scripts;
  private function set_lang_var( $set_lang)
  {
    $this->lang = $set_lang;
  }
  private function set_title_var( $set_title)
  {
    $this->title = $set_title;
  }
  private function set_descr_var( $set_descr)
  {
    $this->descr = $set_descr;
  }
  private function set_keywords_var( $set_keywords)
  {
    $this->keywords = $set_keywords;
  }
  private function set_scripts_var( $set_scripts)
  {
    $this->js_file = $set_scripts;
  }

  
  private function open_html()
  {
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
        <link href="$this->path_to_root/css/$this->file_name.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script defer src="$this->path_to_root/js/scripts.js"></script>
      </head>
      <body>
DECLARE;
        // <script src="https://kit.fontawesome.com/c192e4453c.js" crossorigin="anonymous"></script>
        // <script defer src="$this->path_to_root/js/$this->scripts.js"></script>
  }
  private function close_html()
  {
    echo '</body></html>';
  }


  function __construct()
  {
    $this->get_path_to_root();
    $this->get_page_theme();
    $this->get_file_name();

    $this->set_lang_var( 'en-us');
    $this->set_title_var( '');
    $this->set_descr_var( '');
    $this->set_keywords_var( '');
    $this->set_scripts_var( '');

    $this->open_html();
 }

  function __destruct()
  {
    $this->close_html();
  }

  // more code
}

// EOF