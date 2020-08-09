<?php

include_once "$root/includes/autoload-classes.inc.php";

$make = new Website();
$add = new Element();
$parsedown = new Parsedown();

function fill( $iteration)
{
  for ($iteration = 0; $iteration <= 10; $iteration++)
  {
    echo "The quick brown fox jumps over the lazy dog. ";
  }
}

// EOF
