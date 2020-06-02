<?php

function title($such_important)
{
    html_open('h1');
    echo $such_important;
    html_close('h1');
}

function section($such_important)
{
    html_open('h2');
    echo $such_important;
    html_close('h2');
}

function subsection($such_important)
{
    html_open('h3');
    echo $such_important;
    html_close('h3');
}

function subsubsection($such_important)
{
    html_open('h4');
    echo $such_important;
    html_close('h4');
}

function state($statement)
{
    html_open('p');
    echo $statement;
    html_close('p');
}

// formatting
function emphatic($input)
{
    $make = 'em';

    html_open($make);
        echo $input;
    html_close($make);
}

function strong($input)
{
    $make = 'strong';

    html_open($make);
        echo $input;
    html_close($make);
}

function small($input)
{
    $make = 'small';

    html_open($make);
        echo $input;
    html_close($make);
}

function highlighted($input)
{
    $make = 'mark';

    html_open($make);
        echo $input;
    html_close($make);
}

function strikethrough($input)
{
    $make = 'del';

    html_open($make);
        echo $input;
    html_close($make);
}

function underlined($input)
{
    $make = 'ins';

    html_open($make);
        echo $input;
    html_close($make);
}

function subscripted($input)
{
    $make = 'sub';

    html_open($make);
        echo $input;
    html_close($make);
}

function superscripted($input)
{
    $make = 'sup';

    html_open($make);
        echo $input;
    html_close($make);
}

function quote($input)
{
    $make = 'q';

    html_open($make);
        echo $input;
    html_close($make);
}

function blockquote($input,$title)
{
    $make = 'blockquote';
    $info = 'cite';

    echo "<$make $info=\"$title\">";
        echo $input;
    html_close($make);
}

function abbriviate($input,$title)
{
    $make = 'abbr';
    $info = 'title';

    echo "<$make $info=\"$title\">";
        echo $input;
    html_close($make);
}

function cite($work,$from,$year)
{
    echo "<cite>$work</cite> by $from, $year.";
}


// insert
function image($source)
{
    echo "<img src=\"$source\">";
}