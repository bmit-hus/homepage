<?php

include 'globals/functions.arc.php';
include 'globals/variables.arc.php';
include 'includes/class-autoload.inc.php';
include 'includes/lib-handler.inc.php';

html_abc();

include "pages/$active_space.$active_site.syt.php";

html_xyz();