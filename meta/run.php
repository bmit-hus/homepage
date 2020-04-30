<?php

// HTML functions
function open($thing)
{
    echo "<$thing>";
}
function openw($thing, $class)
{
    echo "<$thing class=\"$class\">";
}
function openw_id($thing, $id)
{
    echo "<$thing id=\"$id\">";
}


function shut($thing)
{
    echo "</$thing>";
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

function add($something)
{
    echo " $something ";
}

function makelink($name, $class)
{
    $linkname = ucfirst($name);
    echo "<a class=\"$class\" href=\"?page=$name\">$linkname</a>";
}


function html()
{
    global $lang;
    echo "<!doctype html><html lang=\"$lang\">";
}

function meta()
{
    global $author, $title, $description, $keywords, $css, $ajax, $js;

    echo "<meta charset=\"UTF-8\">";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "<meta name=\"author\" content=\"$author\">";
    echo "<title>$title</title>";
    echo "<meta name=\"description\" content=\"$description\">";
    echo "<meta name=\"keywords\" content=\"$keywords\">";
    echo "<link href=\"$css\" type=\"text/css\" rel=\"stylesheet\">";
    echo "<script defer src=\"$ajax\"></script>";
    echo "<script defer src=\"$js\"></script>";
}


// ParseDown functions
function parse_side()
{
    global $page;
    $parsedown = new Parsedown();

    openw('aside', 'element sidebar');
    echo $parsedown->text(file_get_contents("pages/$page/side.md"));
    shut('aside');
}
function parse_main()
{
    global $page;
    $parsedown = new Parsedown();
    
    openw('main', 'element main');
    echo $parsedown->text(file_get_contents("pages/$page/main.md"));
    shut('main');
}