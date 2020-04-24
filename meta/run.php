<?php // global functions

// include Database
include_once "sql/dbh.php";

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


// next...

