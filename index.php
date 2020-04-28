<?php

$open_body = '<body>';
$shut_body = '</body> </html>';

include 'meta/inc.php';
include 'meta/use.php';
include 'meta/run.php';

// set site meta variables:
$language       = 'en';
$author         = 'Stigie Huber';

$title          = 'blve.ch';
$description    = 'blve Stigie Huber Personal Website';
$keywords       = 'blve Stigie Huber Personal Website';

$pathCSS        = 'css/arc.css';
$pathJS         = 'js/quotes.js';
$pathAJAX       = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';

include 'meta/arc.php';

echo $open_body;

include "items/header.php";
include "items/main.php";
include "items/footer.php";

echo $shut_body;