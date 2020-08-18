<?php

function banner()
{
  echo '<ul class="banner ">';
}


function banner_item( $additional_classes)
{
  echo <<<__ITEM
    <li class="banner--item $additional_classes">
__ITEM;
}

function banner_list( $additional_classes)
{
  echo <<<__ITEM
    <ul class="banner--item $additional_classes">
__ITEM;
}

// RETURN HOME BUTTON

function return__home()
{
  global $root;
  global $self;

  if ( $self != 'index' )
  {
    echo <<<____RETURN
      <a href="$root/index.php"> home</a>
____RETURN;
  }
}

// PAGE MENU

function page_menu__container()
{
  echo <<<__MENU
    <ul class="page-menu--container ">
__MENU;
}

function page_menu__item( $target)
{
  global $root;

  echo <<<__ITEM
    <li class="page-menu--item goto-$target"> 
      <a href="$root/pages/$target.php"> $target</a></li>
__ITEM;
}

// 

// EOF
