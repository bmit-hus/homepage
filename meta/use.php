<?php // usables

$CR = "©";
$date_short = date("M, Y");
// next usable




// ==================================================
// FOLLOWING USABLES won't are unlikely to be changed
// 
// 
// set variable $page to load correct information:
if(!isset($_GET['page'])) 
{
    $page = "home";
}
else
{
    $page = $_GET[ 'page' ];
}

// enable parsedown:
include "imported/parsedown.php";
$parsedown = new Parsedown();