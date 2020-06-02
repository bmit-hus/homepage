<?php

function state_path()
{
    global $br;
    global $dot;

    $active_lang = $_POST['current_lang']; 
    $active_space = $_POST['current_space'];
    $active_site = $_POST['current_site'];

    html_open('p');
    switch ($active_lang)
    {
        case 'english':
            echo "Current location: ";
            echo strong("hus.bm-it.ch/$active_space/$active_site").$dot;

        break;

        case 'deutsch':
            echo "Sie besuchen gerade die Seite <strong>hus.bm-it.ch/$active_space/$active_site</strong> auf <strong>$active_lang</strong>.";
        break;
        

    }
    html_close('p');
}

function declare_copyright()
{
    global $copy;
    $copyright = "$copy Copyright";
    $me = $_POST['my_Fullname'];
    
    echo "<p class=\"right\">$copyright $me.</p>";
}