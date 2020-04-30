<?php

// include_once 'sql/dbh.php';
include 'imported/parsedown.php';

include 'meta/var.php';

// set site meta variables:
$title          = "hus.bm-it.ch | $page";
$description    = "$author Personal Website";
$keywords       = "$author $title $description";

include 'meta/run.php';
include 'meta/lib.php';

include 'arc.php';