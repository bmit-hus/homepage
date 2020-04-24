<?php // usables

// enable parsedown:
include "imported/parsedown.php";
$parsedown = new Parsedown();


// set variable $page to load correct information:
if ( !isset ($_GET[ 'page' ]) )
{
    $page = "home";
}
else
{
    $page = $_GET[ 'page' ];
}


// next usable