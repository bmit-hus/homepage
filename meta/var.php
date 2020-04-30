<?php

$CR = "©";
$date_short = date("M, Y");

// parsedown variables:
$parsedown = new Parsedown();

// page variables:
$lang = 'en'; // check: run>51
$firstname = 'stigie'; 
$lastname = 'huber';
$author = "$firstname $lastname";
$Author = ucfirst("$firstname")." ".ucfirst("$lastname");

$css = "css/arc.css";
$js = "js/scripts.js";
$ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';

// set variable $page to load correct information:
if(!isset($_GET['page'])) 
{
    $page = 'home';
}
else
{
    $page = $_GET['page'];
}

$title          = "hus.bm-it.ch | $page";
$description    = "$author Personal Website Web Portfolio";
$keywords       = "$title | $description";