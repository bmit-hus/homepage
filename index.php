<?php

include 'globals/functions.arc.php';
include 'globals/variables.arc.php';
include 'includes/class-autoload.inc.php';
include 'includes/lib-handler.inc.php';

html_abc();

// $active_space = 'homepage';
// $_POST['active_space'] = 'homepage';

include "pages/$active_space.spc.php";

html_xyz();