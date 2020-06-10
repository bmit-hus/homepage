<?php

class HTML
{

    public function open($tag)
    {
        echo "<$tag>";
    }
    public function openw($tag,$class,$id)
    {
        echo "<$tag class=\"$class\" id=\"$id\">";
    }
    public function shut($tag)
    {
        $foos = [$tag];
        foreach ($foos as $foo)
        {
            echo "</$foo>";
        }
    }
    public function next($shut,$open,$wclass,$wid)
    {
        echo <<<FOO
        </$shut> <$open class="$wclass" id="$wid">
FOO;
    }

    // ////////////////////////////////////////////////////////////////////////////////////////////////

    public function title($foo)
    {
        $tag = 'h1';
        echo "<$tag>" . ucwords($foo) . "</$tag>";
    }
    public function pagetitle($foo)
    {
        $tag = 'h2';
        echo "<$tag>" . ucwords($foo) . "</$tag>";
    }
    public function section($foo)
    {
        $tag = 'h3';
        echo "<$tag>" . ucwords($foo) . "</$tag>";
    }
    public function subsection($foo)
    {
        $tag = 'h4';
        echo "<$tag>" . ucwords($foo) . "</$tag>";
    }

    public $start = '<p>';
    public $next = '</p>';
    public $quote = '<q>';
    public $endquote = '</q>';
    public $blockquote = '<blockquote>';
    public $endblockquote = '</blockquote>';
    public function cite($foo)
    {
        $tag = 'cite';
        echo "<$tag>" . ucwords($foo) . "</$tag>";
    }
    public function by($foo)
    {
        echo "</br> by " . ucwords($foo);
    }

    public function emphasize($foo)
    {
        $tag = 'em';
        echo "<$tag>$foo</$tag>";
    }
    public function strong($foo)
    {
        $tag = 'strong';
        echo "<$tag>$foo</$tag>";
    }
    public function small($foo)
    {
        $tag = 'small';
        echo "<$tag>$foo</$tag>";
    }
    public function mark($foo)
    {
        $tag = 'mark';
        echo "<$tag>$foo</$tag>";
    }
    public function delete($foo)
    {
        $tag = 'del';
        echo "<$tag>$foo</$tag>";
    }
    public function insert($foo)
    {
        $tag = 'ins';
        echo "<$tag>$foo</$tag>";
    }
    public function subscribe($foo)
    {
        $tag = 'sub';
        echo "<$tag>$foo</$tag>";
    }
    public function supscribe($foo)
    {
        $tag = 'sup';
        echo "<$tag>$foo</$tag>";
    }
    // public function abbreviate($foo)
    // 
    //     $tag = 'abbr';
    //     echo "<$tag> ucwords($foo) </$tag>";
    // }
    public function image($foo)
    {
        $tag = 'img';
        echo "<$tag src=\"$foo\">";
    }

    // ////////////////////////////////////////////////////////////////////////////////////////////////
    // ////////////////////////////////////////////////////////////////////////////////////////////////
    // ////////////////////////////////////////////////////////////////////////////////////////////////

    public function abc()
    {
        $lang = $_POST['display_lang'];
        $author = $_POST['my_fullname'];
        $title = $_POST['site_title'];
        $descr = $_POST['site_description'];
        $keywords = $_POST['site_keywords'];
        $css = $_POST['space_css'];

    echo <<<DECLARE

    <!doctype html>

    <html lang="$lang">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="$author">
    <title>$title</title>
    <meta name="description" content="$descr">
    <meta name="keywords" content="$keywords">
    <link href="$css" type="text/css" rel="stylesheet">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/allinone.js"></script>

    </head>

DECLARE;
    }

    public function xyz()
    {
        $this->shut('body','html');
    }

}