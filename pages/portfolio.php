<?php

include_once '../includes/global.inc.php';

$title = 'my web portfolio';
$subtitle = 'allow me to introduce myself';
include_once "$root/includes/header.inc.php";
include_once "$root/includes/navigation.inc.php";

$add->openw('main', 'grid-container', '');


$add->shut('main');

include_once "$root/includes/footer.inc.php";

// EOF
