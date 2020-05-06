<?php

// HTML functions
function open($stuff)
{
    echo "<$stuff>";
}
function openw($stuff, $class)
{
    echo "<$stuff class=\"$class\">";
}
function openw_id($stuff, $id)
{
    echo "<$stuff id=\"$id\">";
}


function shut($stuff)
{
    $foos = [$stuff];
    foreach ($foos as $foo)
    {
        echo "</$foo>";
    }
}
function shutopen($close, $open)
{
    shut($close);
    open($open);
}
function shutopenw($close, $open, $class)
{
    shut($close);
    openw($open, $class);
}

function add($stuff)
{
    $foos = [$stuff];
    foreach ($foos as $foo)
    {
        echo " $foo ";
    }
}

function makeNavLink($name)
{
    $linkName = ucfirst($name);
    echo "<a class=\"navobj\" href=\"?page=$name\">$linkName</a>";
    add('|');
}



class Page {

    private $page;
    private $lang;
    private $first;
    private $last;
    private $full;
    private $Full;
    private $css;
    private $js;
    private $ajax;
    private $title;
    private $description;
    private $keywords;

    function __construct($pageName, $pageLang, $pageDescription)
    {
        $this->page         = $pageName;
        $this->lang         = $pageLang;
        $this->first        = 'stigie';
        $this->last         = 'huber';
        $this->full         = $this->first.' '.$this->last;
        $this->Full         = ucfirst("$this->first").' '.ucfirst("$this->last"); 
        $this->css          = 'css/arc.css';
        $this->js           = 'js/scripts.js';
        $this->ajax         = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
        $this->title        = "hus.bm-it.ch/$this->page";
        $this->description  = "$this->full $pageDescription";
        $this->keywords     = "$this->title $this->description";
    }

    function get($query)
    {
        return $this->$query;
    }
    function getall()
    {
        return $this->page;
        return $this->lang;
        return $this->first;
        return $this->last;
        return $this->full;
        return $this->Full;
        return $this->css;
        return $this->js;
        return $this->ajax;
        return $this->title;
        return $this->description;
        return $this->keywords;
    }

    // set
    function set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    function html()
    {
        echo "<!doctype html><html lang=\"$this->lang\">";
    }

    function metadata()
    {
        echo "<meta charset=\"utf-8\">";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
        echo "<meta name=\"author\" content=\"$this->full\">";
        echo "<title>$this->title</title>";
        echo "<meta name=\"description\" content=\"$this->description\">";
        echo "<meta name=\"keywords\" content=\"$this->keywords\">";
        echo "<link href=\"$this->css\" type=\"text/css\" rel=\"stylesheet\">";
        echo "<script defer src=\"$this->ajax\"></script>";
        echo "<script defer src=\"$this->js\"></script>";
    }

    function content()
    {
        $parsedown = new Parsedown();

        openw('aside', 'element sidebar');
        echo $parsedown->text(file_get_contents("pages/$this->page/side.md"));
        shut('aside');

        openw('main', 'element main');
        echo $parsedown->text(file_get_contents("pages/$this->page/main.md"));
        shut('main');
    }
}