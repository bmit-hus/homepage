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

function page_menu__container()
{
  echo <<<__MENU
    <ul class="page-menu--container ">
__MENU;
}

function page_menu__item( $target)
{
  echo <<<__ITEM
    <li class="page-menu--item goto-$target"> $target</li>
__ITEM;
}

// 

// EOF
