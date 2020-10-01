<?php

include_once "main/meta.class.php";

$meta = new Meta;

$AUTHOR = $meta->get__author();
$ROOT = $meta->get__root();
$SELF = $meta->get__self();
$FILE = $meta->get__file();

// EOF
