<?php

if (!isset($active))
{
    $active = $home;
}
else
{
    $active = $_POST['page'];
}