<?php

/**
 * this file creates the barebones html code
**/

// code
class Page {

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

    // fetchers
    public function fetch_page( $thepage ) {
        include "pages/$thepage.php";
    }
    public function fetch_testpage() {
        global $parsedown;
        echo $parsedown->text(file_get_contents("md/md.md"));
    }

    // definers
    protected function def_self() {
        $this->self = rtrim( basename( $_SERVER['PHP_SELF'] ), '.php' );
    }
    protected function def_file() {
        $this->file = basename( $_SERVER['PHP_SELF'] );
    }
    protected function def_author() {
        $this->author = "Stigie Huber";
    }
    protected function def_keywords() {
        $this->keywords = $this->author . $this->title . $this->description;
    }
    protected function def_css() {
        $this->css = "css/$this->self.css";
    }
    protected function def_js() {
        $this->js = "js/scripts.js";
    }

    // getters
    public function get_filename() {
        return $this->self;
    }
    public function get_file() {
        return $this->file;
    }
    public function get_author() {
        return $this->file;
    }
    public function get_language() {
        return $this->file;
    }
    public function get_title() {
        return $this->file;
    }
    public function get_description() {
        return $this->file;
    }
    public function get_keywords() {
        return $this->file;
    }
    public function get_stylesheet() {
        return $this->css;
    }
    public function get_javascript() {
        return $this->js;
    }
    public function get_ajax_lib() {
        return $this->ajax;
    }

    // setters
    protected function set_language( $thelanguage ) {
        $this->language = $thelanguage;
    }
    protected function set_title( $thetitle ) {
        $this->title = $thetitle;
    }
    protected function set_description( $thedescription ) {
        $this->description = $thedescription;
    }
    protected function set_keywords( $thekeywords ) {
        $this->keywords = $thekeywords;
    }
    protected function append_keywords( $thekeywords ) {
        $this->keywords = $this->keywords ." ". $thekeywords;
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
                <!--  -->
                <title> $this->title </title>
                <!--  -->
                <meta name="description" content="$this->description">
                <meta name="keywords" content="$this->keywords">
                <!--  -->
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@300;400;600;700&display=swap" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <!--  -->
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
        $this->def_self();
        $this->def_file();
        $this->def_author();
        $this->def_keywords();
        $this->def_css();
        $this->def_js();
        // 
        $this->set_language( "en" );
        $this->set_title( "Test" );
        $this->set_description( "" );
        //
        $this->begin();
        $this->end();
    }

    // destructor:
    function __destruct() {
        echo "</body></html>";
    }

}

// EOF
