<?php

$root = '..';
include_once "$root/includes/global.inc.php";
include_once "$root/includes/global-elements.inc.php";
// include_once "$root/assets/elements/test-template.html";

$self = rtrim( basename( $_SERVER['PHP_SELF'], '.php'));

open('main');
  parse( "$root/assets/content/$self/main.md");
close('main');

open('aside');
  parse( "$root/assets/content/$self/aside.md");
close('aside');

// EOF
