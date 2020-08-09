<?php

include_once "$root/includes/autoload-classes.inc.php";

$make = new Website();
$add = new Element();
$parsedown = new Parsedown();

$self = rtrim( basename( $_SERVER['PHP_SELF'], '.php'));

include_once "$root/includes/function.inc.php";

// EOF
