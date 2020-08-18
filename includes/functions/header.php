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

function return_home__button()
{
  global $root;
  global $self;

  $not_home_already = strpos($self, 'index') == true;

  if ( $not_home_already)
  {
    echo <<<____RETURN
      <a href="$root/index.php"> <button class="return--button "> home</button> </a>
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
