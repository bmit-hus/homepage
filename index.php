<?php

include 'includes/variables.inc.php';
include 'includes/class-autoload.inc.php';
include 'includes/lib-handler.inc.php';

$html->abc();

include "pages/$active_space.spc.php";

$html->xyz();