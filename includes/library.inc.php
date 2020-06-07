<?php

// global
$parsedown = new Parsedown();
$html = new HTML();
$add = new ADD();

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

$business = new Space('business');

$blog = new Space('blog');

$contact = new Space('contact');