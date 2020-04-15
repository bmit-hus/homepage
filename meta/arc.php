<!doctype html>
<html lang="en">

<head>

<meta charset= "UFT-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="X-UA-Compatible" content="ie=edge" >

<!-- look up "Font Awesome" for icons: -->

<?php

// set site meta variables:
$author      = "Stigie Huber";

$title       = "blve.ch"; // $_POST['title'];
$description = "blve Stigie Huber Personal Website"; // $_POST['description'];
$keywords    = "blve Stigie Huber Personal Website"; // $_POST['keywords'];

$pathCSS     = "css/arc.css";
$pathJS      = "js/quotes.js";
$pathAJAX    = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js";


// load site info:
echo "

    <meta name=\"author\" content=\"$author\">

    <title> $title </title>

    <meta name=\"description\" content=\"$description\">
    <meta name=\"keywords\" content=\"$keywords\">

    <link href=\"$pathCSS\" type=\"text/css\" rel=\"stylesheet\">
    <script defer src=\"$pathAJAX\"> </script>
    <script defer src=\"$pathJS\"> </script>

";

?>

</head>