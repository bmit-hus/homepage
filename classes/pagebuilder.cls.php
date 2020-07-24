<?php

class PageBuilder
{
  // constructor provides head section of page
  function __construct()
  {
    // import variables:
    global $root;

    $lang = 'en-us';
    $title = '';
    $descr = '';
    $keywords = '';

    if ( !isset( $_POST['theme']))
    {
      $theme = 'dark';
    }
    else
    {
      $theme = $_POST['theme'];
    }
    $file_name = basename( $_SERVER['PHP_SELF'] );
    
    $ajax_lib = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
    $js_file = '';

    echo <<<DECLARE
      <!doctype html>
      <html lang="$lang">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="stigie huber">
        <title>$title</title>
        <meta name="description" content="$descr">
        <meta name="keywords" content="$keywords">
        <link href="$root/css/$theme/$file_name.css" type="text/css" rel="stylesheet">
        <script defer src="$ajax_lib"></script>
        <script defer src="$root/js/$js_file.js"></script>
      </head>
      <body>
DECLARE;
  }

  // descructor provides closing tags of page
  function __destruct()
  {
    echo '</body></html>';
  }

  // more code
}

// EOF
