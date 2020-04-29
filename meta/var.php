<?php

$parsedown = new Parsedown();

// set variable $page to load correct information:
    if(!isset($_GET['page'])) 
    {
        $page = 'home';
    }
    else
    {
        $page = $_GET['page'];
    }

$CR = "©";
$date_short = date("M, Y");