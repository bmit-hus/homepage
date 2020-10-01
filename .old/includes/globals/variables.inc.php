<?php

$arch = new Arch();
  $author = $arch->get__author();
  $root   = $arch->get__root();
  $self   = $arch->get__self();
  $file   = $arch->get__file();

// $add = new Element();
$parsedown = new Parsedown();


$leer = ' ';
$eingabe = '</br>';


// time
$seconds = date('s');
$minutes = date('i');
$hours = date('h');
$HOURS = date('H');
$time__us = date('h:i a');
$TIME__us = date('h:i:s a');
$time__ch = date('H:i');
$TIME__ch = date('H:i:s');
$time__iso = date('c');

// dates
$date__dd = date('d');
$date__m = date('n');
$date__mm = date('m');
$date__yy = date('y');
$date__yyyy = date('Y');

$day = date('l');
$month = date('F');
$year = date('Y');

// signs
$copyright = '&copy;'; // ©
$registered = '&reg;'; // ®
$trademark = '&trade;'; // ™

$empty = '&empty;'; // ∅
$sum = '$sum;'; // ∑
$iselement = '&isin;'; // ∈
$notelement = '&notin;'; // ∉
$contains = '&ni;'; // ∋

$logand = '&and;'; // ∧
$logor = '&or;'; // ∨

$infinity = '&infin'; // ∞

// arrows
$upwards = '&uarr;';
$downwards = '&darr;';
$rightwards = '&rarr;';
$leftwards = '&larr;';

// EOF
