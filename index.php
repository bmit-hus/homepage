<?php

include_once 'includes/global.inc.php';

$add->openw('header', 'left', '');

  $add->subtitle( 'welcome to my' );
  $add->title( 'homepage' );
  $add->navbar();

$add->shut('header');

$add->openw('main', 'grid-container', '');

  $add->content('index');
  // $add->lorem_ipsum();

$add->shut('main');

$add->openw('footer', 'right', '');

  $add->declare_c();

$add->shut('footer');

// EOF
