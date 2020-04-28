<?php // functions

function make_pagelink($input)
{
    $open_item = "<li class=\"navobj\"><a href=\"";
    $shut_item = "\">".ucfirst($input)."</a></li>";
    echo "$open_item?page=$input $shut_item"; 
}

function make_sitelink($input)
{
    $open_item = "<li class=\"navobj\"><a href=\"";
    $shut_item = "\">".ucfirst($input)."</a></li>";
    echo "$open_item/$input $shut_item"; 
}

// new function