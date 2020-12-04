<?php

// this class handles html elements

// code
class HTML {
  private $language;

  function __construct() {

    echo <<<__HTML

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta 
          name="viewport" 
          content="width=device-width, initial-scale=1.0">
        
        <title>$title</title>
      </head>
      <body>

__HTML;
    
  }

  function __destruct() {
    echo "</body></html>";
  }
}

// EOF
