<?php

spl_autoload_register('class_autoloader');

function class_autoloader($class)
{
    $url    = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false)
    {
        $path = '../classes/';
    }
    else
    {
        $path = 'classes/';
    }
    $ext    = '.class.php';
    require_once $path . $class . $ext;

}