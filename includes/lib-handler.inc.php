<?php

include 'includes/class-autoload.inc.php';
include 'includes/library.inc.php';

if (!isset($_POST['current_lang']))
{
    $current_lang = $english;
}
else
{
    $current_lang = $$_POST['current_lang'];
}

if (!isset($_POST['current_space']))
{
    $current_space = $gateway;
}
else
{
    $current_space = $$_POST['current_space'];
}

if (!isset($_POST['current_site']))
{
    $current_site = $landing;
}
else
{
    $current_site = $$_POST['current_site'];
}

    // $current_space = $homepage; $current_site = $home;

$current_lang->make_current_lang();
$current_space->make_current_space();
$current_site->make_current_site();

$active_lang = $_POST['current_lang'];
$active_space = $_POST['current_space'];
$active_site = $_POST['current_site'];