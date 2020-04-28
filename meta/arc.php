<?php

$open_head          = "<!doctype html> <html lang='$language'> <head>";
$load_primertags    = " <meta charset= \"UFT-8\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"> ";
$shut_head          = '</head>';

echo $open_head . $load_primertags;

// look up "Font Awesome" for icons:

// load site info:
echo "  <meta name=\"author\" content=\"$author\">
        <title> $title </title>

        <meta name=\"description\" content=\"$description\">
        <meta name=\"keywords\" content=\"$keywords\">

        <link href=\"$pathCSS\" type=\"text/css\" rel=\"stylesheet\">
        <script defer src=\"$pathAJAX\"> </script>
        <script defer src=\"$pathJS\"> </script> ";

echo $shut_head;