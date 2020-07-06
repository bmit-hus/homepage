<?php

// for testing purposes
  echo $_SERVER['REQUEST_URI'];

// load meta info
  $arch = new Arch();
// load PageElement builder
  $add = new PageElement();
// get Parsedown
  $parsedown = new Parsedown();

// page informations
  $portal = new Page('portal','en','portal landing page');

// testpage
  $test = new Page('test','en','testpage');

// more code

// EOF
