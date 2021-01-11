<?php

/**
 * this file creates the barebones html code
**/

// code
class Arch {

    private $self;
    private $file;
    private $author;
    private $language;

    private $title;
    private $description;
    private $keywords;

    private $css;
    private $js;
    private $ajax;


    // getters


    // setters
    private function theSelf() {
        $this->self = rtrim( basename( $_SERVER['PHP_SELF'] ), '.php' );
    }
    private function theFile() {
        $this->file = basename( $_SERVER['PHP_SELF'] );
    }
    private function theAuthor() {
        $this->author = "Stigie Huber";
    }
    private function theLanguage() {
        $this->language = "en";
    }


    // head:
    private function begin() {
        echo <<<HTML
            <!doctype html>
            <html lang="$this->language">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="author" content="Stigie Huber">
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
HTML;
    }
    private function end() {
        echo <<<HTML
            </head>
            <body>
HTML;
    }


    // constructor:
    function __construct() {

        $this->theSelf();
        $this->theFile();
        $this->theLanguage();

        $this->begin();

        echo <<<HTML

            <title> $this->title</title>
            <meta name="description" content="$this->description">
            <meta name="keywords" content="$this->keywords">
            <link href="css/$this->self/main.css" type="text/css" rel="stylesheet">
            <script defer src="$this->js/scripts.js"></script>

HTML;

        $this->end();
    }

    // destructor:
    function __destruct() {
        echo "</body></html>";
    }

}

// EOF
