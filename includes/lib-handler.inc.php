<?php

include 'libraries/lang.lib.php';
include 'libraries/space.lib.php';
include 'libraries/site.lib.php';


if (!isset($_POST['current_lang']))
{
    $current_lang = $english;
    $current_lang->make_current_lang();
}
else
{
    $current_lang = $$_POST['current_lang'];
    $current_lang->make_current_lang();
}

if (!isset($_POST['current_space']))
{
    $current_space = $gateway;
    $current_space->make_current_space();
}
else
{
    $current_space = $$_POST['space_name'];
    $current_space->make_current_space();
}

if (!isset($_POST['current_site']))
{
    $current_site = $landing;
    $current_site->make_current_site();
}
else
{
    $current_site = $$_POST['site_name'];
    $current_site->make_current_site();
}