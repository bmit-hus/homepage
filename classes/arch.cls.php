<?php

/**
 * this file creates the barebones html code
**/

// code
class Arch {

    protected $self;
    protected $file;
    protected $author;
    protected $language;

    protected $title;
    protected $description;
    protected $keywords;

    protected $css;
    protected $js;
    protected $ajax;


    // getters
    public function get_page( $thepage ) {
        include "pages/$thepage.php";
    }
    public function get_testpage() {
        global $parsedown;
        echo $parsedown->text(file_get_contents("md/md.md"));
    }


    // setters
    protected function this_self() {
        $this->self = rtrim( basename( $_SERVER['PHP_SELF'] ), '.php' );
    }
    protected function this_file() {
        $this->file = basename( $_SERVER['PHP_SELF'] );
    }

    protected function this_language( $thelanguage ) {
        $this->language = $thelanguage;
    }
    protected function this_author() {
        $this->author = "Stigie Huber";
    }
    protected function this_title( $thetitle ) {
        $this->title = $thetitle;
    }
    protected function this_description( $thedescription ) {
        $this->description = $thedescription;
    }
    protected function this_keywords() {
        $this->keywords = $this->author . $this->title . $this->description;
    }

    protected function this_css() {
        $this->css = "css/main.css";
    }
    protected function this_js() {
        $this->js = "js/scripts.js";
    }


    // head:
    protected function begin() {
        echo <<<HTML
            <!doctype html>
            <html lang="$this->language">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="author" content="$this->author">

                <title> $this->title </title>

                <meta name="description" content="$this->description">
                <meta name="keywords" content="$this->keywords">

                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@300;400;600;700&display=swap" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <link href="$this->css" type="text/css" rel="stylesheet">
                <script defer src="$this->js"></script>

HTML;
    }
    protected function end() {
        echo <<<HTML
            </head>
            <body>
HTML;
    }


    // constructor:
    function __construct() {

        $this->this_self();
        $this->this_file();
        $this->this_keywords();
        $this->this_css();
        $this->this_js();

        $this->this_language( "en" );
        $this->this_author( "Stigie Huber" );
        $this->this_title( "Test" );
        $this->this_description( "" );

        $this->begin();

        $this->end();

    }

    // destructor:
    function __destruct() {
        echo "</body></html>";
    }

}

// EOF
