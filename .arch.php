<?php

include_once "classes/meta.class.php"; 
$meta = new Meta;

include_once "$ROOT/classes/parsedown.class.php";
include_once "$ROOT/assets/functions.php";
include_once "$ROOT/assets/variables.php";

include_once "$ROOT/elements/header.php";
include_once "$ROOT/elements/footer.php";

$parsedown = new Parsedown;

// EOF
