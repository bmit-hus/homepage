<?php

// preload code
include_once 'includes/autoload.inc.php';
include_once 'includes/library.inc.php';

// page code

$add->openw('header', 'left', '');

  $add->title( 'landing page' );

$add->shut('header');

$add->openw('main', 'grid-container', '');

  $add->lorem_ipsum();
  // $add->newform();
      // $add->gateway_button('homepage');
      // $add->gateway_button('business');
      // $add->inactive_button('blog');
      // $add->gateway_button('contact');
      // $add->testbtn('homepage');
  // $add->endform();

$add->shut('main');

$add->openw('footer', 'right', '');

  $add->declare_c();

$add->shut('footer');

// EOF
