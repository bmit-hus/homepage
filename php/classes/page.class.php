<?php

class Page extends HTML {

    protected $language;
    protected $charset = "UTF-8";
    protected $viewport = "width=device-width, initial-scale=1.0";
    protected $author = "Stigie Huber";
    protected $title;
    protected $description;
    protected $keywords;
    protected $favicon;
    protected $stylesheet;
    protected $script;
    protected $ajaxlib = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js";

    // setters
        // setters set / reset properties
    // 
    protected function setLanguage( $setto ) {
        $this-> language = $setto;
    }
    // unneeded 
    protected function setCharset( $setto ) {
        $this-> charset = $setto;
    }
    // unneeded 
    protected function setViewport( $setto ) {
        $this-> viewport = $setto;
    }
    // unneeded 
    protected function setAuthor( $setto ) {
        $this-> author = $setto;
    }
    protected function setFavicon( $setto ) {
        $this-> favicon = $setto;
    }
    protected function setTitle( $setto ) {
        $this-> title = $setto;
    }
    protected function setDescription( $setto ) {
        $this-> description = $setto;
    }
    protected function setKeywords( $setto ) {
        $this-> keywords = $setto;
    }
    protected function setStylesheet( $setto ) {
        $this-> stylesheet = $setto;
    }
    protected function setScript( $setto ) {
        $this-> script = $setto;
    }
    protected function setAjaxlib( $setto ) {
        $this-> ajaxlib = $setto;
    }

    // getters
        // getters get class properties
    // 
    public function getLanguage() {
        return $this-> language;
    }
    // unneeded 
    public function getCharset() {
        return $this-> charset;
    }
    // unneeded 
    public function getViewport() {
        return $this-> viewport;
    }
    // unneeded 
    public function getAuthor() {
        return $this-> author;
    }
    public function getFavicon() {
        return $this-> favicon;
    }
    public function getTitle() {
        return $this-> title;
    }
    public function getDescription() {
        return $this-> description;
    }
    public function getKeywords() {
        return $this-> keywords;
    }
    public function getStylesheet() {
        return $this-> stylesheet;
    }
    public function getScript() {
        return $this-> script;
    }
    public function getAjaxlib() {
        return $this-> ajaxlib;
    }

    // constructor
    function __construct( 
        // 8 parameters
        $pageLanguage,
        $pageFavicon,
        $pageTitle,
        $pageDescription,
        $pageKeywords,
        $pageStylesheet,
        $pageScript,
        $pageAjaxlib
    ) { 
        $lang = setLanguage( $pageLanguage );
        $charset = getCharset();
        $viewport = getViewport();
        $author = getAuthor();
        $favicon = setFavicon( $pageFavicon );
        $title = setTitle( $pageTitle );
        $description = setDescription( $pageDescription );
        $keywords = setKeywords( $pageKeywords );
        $stylesheet = setStylesheet( $pageStylesheet );
        $script = setScript( $pageScript );
        $ajaxlib = setAjaxlib( $pageAjaxlib );

        echo <<<"THIS"
            <!DOCTYPE html>
            <html lang="$lang">
            <head>
                <meta charset="$charset">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="$viewport">
                <meta name="author" content="$author">

                <link rel="icon" type="image/png" href="$favicon.png">
                <title>$title</title>
                <meta name="description" content="$description">
                <meta name="keywords" content="$keywords">

                <link type="text/css" rel="stylesheet" href="$css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script defer src="$script"></script>
            </head>
            <body>
                
            </body>
            </html>
THIS;
    }

    // destructor
    function __destruct() {}

}

// EOF
