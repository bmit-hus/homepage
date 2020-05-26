<?php

function state_where()
{
    $active_lang = $_POST['current_lang']; 
    $active_space = $_POST['current_space'];
    $active_site = $_POST['current_site'];

    switch ($active_lang)
    {
        case 'english':
            echo 'You are currently looking at ';
            echo strong("hus.bm-it.ch/$active_space/$active_site");
            echo ' in ';
            echo strong("$active_lang");
            echo '.';
        break;

        case 'deutsch':
            echo "Sie besuchen gerade die Seite <strong>hus.bm-it.ch/$active_space/$active_site</strong> auf <strong>$active_lang</strong>.";
        break;

        default:

        break;

    }
}