<?php

if (!isset($current_domain))
{
    $current_domain = $english;
}
else
{
    $current_domain = $_POST['domain'];
}

if (!isset($current_sub))
{
    $current_sub = $homepage;
}
else
{
    $current_sub = $_POST['subdomain'];
}

if (!isset($current_page))
{
    $current_page = $home;
}
else
{
    $current_page = $_POST['page'];
}