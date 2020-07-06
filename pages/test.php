<?php

include_once "../includes/global.inc.php";

$title = 'just a testpage';
$subtitle = 'this is';
include_once "$root/includes/header.inc.php";

$add->openw('main', 'grid-container', '');

  $add->lorem_ipsum();

$add->shut('main');

include_once "$root/includes/navigation.inc.php";
include_once "$root/includes/footer.inc.php";

// EOF
