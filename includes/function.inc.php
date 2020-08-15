<?php

// ===== GLOBAL

function open( $element)
{
  echo "<$element>";
}

function close( $element)
{
  echo "</$element>";
}


// ===== BURGER

function create__hamburger()
{
  echo <<<ASD
    <div class="hamburger--button">
      <div class="hamburger--icon"></div>
    </div>
ASD;
}

function create__banner()
{
  echo <<<ASD
    <ul class="banner">
ASD;
}

function create__home_button()
{
  global $root;
  global $hide_this;

  echo <<<ASD
    <li class="banner-element home-button $hide_this">
      <a href="$root/index.php" class="banner-link goto-home"> home</a>
    </li>
ASD;
}

function create__page_name( )
{
  global $local;

  echo <<<ASD
    <li class="banner-element page-name"> $local</li>
ASD;
}

function create__page_strip()
{
  echo <<<ASD
    <ul class="banner-element page-strip">
ASD;
}

function create__page_strip__element( $target)
{
  global $root;

  if ( $target == 'home')
  {
    $pages = '/';
    $target_file = 'index';
  }
  else
  {
    $pages = '/pages/';
    $target_file = $target;
  }

  echo <<<ASD
    <li class="page-strip--element "> <a 
      href="$root$pages$target_file.php " 
      class="banner-link goto-$target"> 
      $target</a>
    </li>
ASD;
}


// ===== MAIN

function parse( $this_file)
{
  global $parsedown;
  echo $parsedown->text(file_get_contents( $this_file));
}


// EOF
