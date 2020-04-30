<?php

// HTML functions
    function open($thing)
    {
        echo "<$thing>";
    }
    function openw($thing, $classes)
    {
        echo "<$thing class=\"$classes\">";
    }
    function openw_ids($thing, $ids)
    {
        echo "<$thing id=\"$ids\">";
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
    function shutopenw($close, $open, $classes)
    {
        shut($close);
        openw($open, $classes);
    }


    function makelink($name, $classes, $page)
    {
        $_page = '?page=';
        if ($page='')
        {
            echo "<a class=\"$classes\" href=\"$_page$name\">" . ucfirst($name)."</a>";
        }
        else
        {
            echo "<a class=\"$classes\" href=\"sub/$page$_page$name\">" . ucfirst($name)."</a>";
        }
    }
    function add($something)
    {
        echo "$something";
    }


    function html()
    {
        echo '<!doctype html><html lang="' . $GLOBALS['lang'] . '">';
    }

    function meta()
    {
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

        echo '<meta name="author" content="' . $GLOBALS['author'] . '">';
        echo '<title>' . $GLOBALS['title'] . '</title>';
        echo '<meta name="description" content="' . $GLOBALS['description'] . '">';
        echo '<meta name="keywords" content="' . $GLOBALS['keywords'] . '">';
        echo '<link href="' . $GLOBALS['css'] . '" type="text/css" rel="stylesheet">';
        echo '<script defer src="' . $GLOBALS['ajax'] . '"></script>';
        echo '<script defer src="' . $GLOBALS['js'] . '"></script>';
    }


// ParseDown functions
    function md_panel($page)
    {
        $parsedown = new Parsedown();
        echo $parsedown->text(file_get_contents("side/$page.md"));
    }
    function md_page($page)
    {
        $parsedown = new Parsedown();
        echo $parsedown->text(file_get_contents("main/$page.md"));
    }