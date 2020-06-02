<?php

function html_open($html_tag)
{
    $foos = [$html_tag];
    foreach ($foos as $foo)
    {
        echo "<$foo>";
    }
}
function html_open_wClasses($html_tag, $html_classes)
{
    echo "<$html_tag class=\"$html_classes\">";
}

function html_close($html_tag)
{
    $foos = [$html_tag];
    foreach ($foos as $foo)
    {
        echo "</$foo>";
    }
}

function html_peekaboo($html_close, $html_open)
{
    html_close($html_close);
    html_open($html_open);
}


function html_declare()
{
    echo '<!doctype html> <html lang="' . $_POST['display_lang'] . '">';
}

function html_metainfo()
{
    $author = $_POST['my_fullname'];
    $title = $_POST['site_title'];
    $descr = $_POST['site_description'];
    $keywords = $_POST['site_keywords'];
    $css = $_POST['space_css'];
    $ajax = $_POST['lib_ajax'];
    $js = $_POST['space_js'];

    echo "
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <meta name=\"author\" content=\"$author\">
        <title>$title</title>
        <meta name=\"description\" content=\"$descr\">
        <meta name=\"keywords\" content=\"$keywords\">
        <link href=\"$css\" type=\"text/css\" rel=\"stylesheet\">
        <script defer src=\"$ajax\"></script>
        <script defer src=\"$js\"></script>
    ";
}

function html_abc()
{
    html_declare();
    html_open('head');
    html_metainfo();
    html_close('head');
}

function html_xyz()
{
    html_close('body', 'html');
}