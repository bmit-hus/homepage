<?php

function state($statement)
{
    html_open('p');
    echo $statement . '<br>';
    html_close('p');
}

function title($ohsoimportant)
{
    html_open('h3');
    echo $ohsoimportant;
    html_close('h3');
}

function format($styling_choice, $words)
{
    html_open($styling_choice);
    echo $words;
    html_close($styling_choice);
}

function strong($input)
{
    $make = 'strong';

    html_open($make);
        echo $input;
    html_close($make);
}
