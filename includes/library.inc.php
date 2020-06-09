<?php

// global
$parsedown = new Parsedown();
$html = new HTML();
$add = new ADD();
$navigate = new Navigate();

// languages
$english = new Lang('english');
$deutsch = new Lang('deutsch');
// $french
// $japanese

// spaces
    // sites
$gateway = new Space('gateway');
    $landing = new Site('landing');

$homepage = new Space('homepage');
    $home = new Site('home');
    $story = new Site('story');
    $test = new Site('test');

$business = new Space('business');

$blog = new Space('blog');

$contact = new Space('contact');