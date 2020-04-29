<?php // functions

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



// new function