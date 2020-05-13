<?php

if (!isset($activeDomain))
{
    $activeDomain = $english;
}
else
{
    $activeDomain = $_POST['domain'];
}

if (!isset($activeSubdomain))
{
    $activeSubdomain = $homepage;
}
else
{
    $activeSubdomain = $_POST['subdomain'];
}
if (!isset($activePage))
{
    $activePage = $home;
}
else
{
    $activePage = $_POST['page'];
}