<?php

include_once 'includes/global.inc.php';

$title = 'my homepage';
$subtitle = 'welcome to';
include_once "$root/includes/header.inc.php";

$add->openw('main', 'grid-container', '');



$add->shut('main');

include_once "$root/includes/navigation.inc.php";
include_once "$root/includes/footer.inc.php";

// EOF
