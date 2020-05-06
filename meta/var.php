<?php

$CR = "©";
$date_short = date("M, Y");

// parsedown variables:
$parsedown = new Parsedown();

$home       = new Page('home','en','landing page');
$skills     = new Page('skills','en','skill page');
$story      = new Page('story','en','story page');
$blog       = new Page('blog','en','blog page');
$empty      = new Page('empty','en','blank page');
$test       = new Page('test','en','test page');

if (!isset($_GET['p']))
{
    $load = $home;
}else{
    $load = ${$_GET['p']};
}