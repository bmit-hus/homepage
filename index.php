<?php

include 'globals/functions.arc.php';
include 'globals/variables.arc.php';
include 'includes/class-autoload.inc.php';
include 'includes/lib-handler.inc.php';

html_declare();
html_abc();

include "pages/$active_space.$active_site.pg.php";

html_xyz();