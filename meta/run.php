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
    function another($thing, $classes)
    {
        shut($thing);
        open($thing, $classes);
    }

    function html($do)
    {
        if ($do = "god")
        {
            echo "<!doctype html> <html lang=\"en\"> <head>";
            // echo "<!doctype html> <html lang=\"$language\">"; // check: index>8
        }
        else if ($do = "nec")
        {
            shut('head');
            open('body');
        }
        else if ($do = "fin")
        {
            echo "</body></html>";
        }
        else {}
    }


// ParseDown functions
    function md_panel($page)
    {
        $parsedown = new Parsedown();
        echo $parsedown->text(file_get_contents("panel/$page.md"));
    }
    function md_page($page)
    {
        $parsedown = new Parsedown();
        echo $parsedown->text(file_get_contents("page/$page.md"));
    }


// Link functions
    function make_pagelink($input)
    {
        $open_item = "<a class=\"navobj\" href=\"";
        $shut_item = "\">".ucfirst($input)."</a>";
        echo "$open_item?page=$input $shut_item"; 
    }

    function make_sitelink($input)
    {
        $open_item = "<li class=\"navobj\"><a href=\"";
        $shut_item = "\">".ucfirst($input)."</a></li>";
        echo "$open_item/$input $shut_item"; 
    }

    function make_linkseparator()
    {
        echo " | ";
    }