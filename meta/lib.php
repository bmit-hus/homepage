<?php

class Page {

    private $firstname;
    private $lastname;
    private $author;
    private $Author;
    private $css;
    private $js;
    private $ajax;

    private $lang;
    private $page;
    private $title;
    private $description;
    private $keywords;

    function __construct($one, $two, $dre) {
        $this->firstname = "stigie";
        $this->lastname = 'huber';
        $author = "$this->firstname $this->lastname";
        $Author = ucfirst("$this->firstname")." ".ucfirst("$this->lastname");
        $this->css = "css/arc.css";
        $this->js = "js/scripts.js";
        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
        
        $this->lang = $one;
        $this->page = $two;
        $this->description = "$author $dre";

        $title = "hus.bm-it.ch | $this->page";
        $keywords = "$this->title $this->description";
    }

    function get_var($var) {
        return $this->$var;
    }

}

$home = new Page('en','home','home landing page');
$skills = new Page('en','skills','portfolio curriculum vitae cv skills it web developer');
$story = new Page('en','story','personal background backstory history');
$blog = new Page('en','blog','personal blog philosophy science religion thoughts');
$empty = new Page('en','empty','blank page');
$test = new Page('en','test','test file');

// $something_new = new Something;