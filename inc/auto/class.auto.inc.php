<?php

spl_autoload_register('class_autoloader');

function class_autoloader($classname)
{
    $path   = 'inc/classes/';
    $ext    = '.cls.php';
    $load   = $path.$classname.$ext;

    if (!file_exists($load))
    {
        return false;
    }

    include_once $load;
}