<?php

$CR = "©";
$date_short = date("M, Y");

// parsedown variables:
$parsedown = new Parsedown();

// homepage
$home       = new Page('home','en','homepage landing page');
$story      = new Page('story','en','homepage story page');

// business
$overview   = new Page('overview','en','business portfolio overview page');
$skills     = new Page('skills','en','business portfolio skill page');

// blog
$blog       = new Page('blog','en','blog overview landing page');

// test
$test       = new Page('test','en','test page');
$empty      = new Page('empty','en','test blank page');


if (!isset($_GET['p']))
{
    $load = $home;
}else{
    $load = ${$_GET['p']};
}