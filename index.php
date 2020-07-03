<?php

include_once 'includes/global.inc.php';

// page code

$add->openw('header', 'left', '');

  $add->title( 'landing page' );

$add->shut('header');

$add->navbar();

$add->openw('main', 'grid-container', '');

  $add->lorem_ipsum();

$add->shut('main');

$add->openw('footer', 'right', '');

  $add->declare_c();

$add->shut('footer');

// EOF
