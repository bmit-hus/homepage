<?php

$open_main = '<main class="container">';
$shut_main = '</main>';

$open_aside = '<aside class="sidebar element">';
$load_aside = $parsedown->text(file_get_contents("panel/$page.md"));
$shut_aside = '</aside>';

$open_content = '<section class="content element">';
$load_content = $parsedown->text(file_get_contents("page/$page.md"));
$shut_content = '</section>';

echo $open_main;

if ( $page != "blog" )
{
    include "items/navbar.php";
}

// sidebar
echo $open_aside;
echo $load_aside;
echo $shut_aside;

// page content
echo $open_content;
echo $load_content;
echo $shut_content;

echo $shut_main;