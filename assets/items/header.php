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

// function theme_switch()
// {
//   echo <<<__THEME
//     <div class="has-switch">light switch</div>
// __THEME;
// }

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


open( 'header');

  banner();

    banner_item( 'return-home');
      return__home();
    close( 'li');

    banner_list( 'page-menu');

      bigmac( 'page-menu--icon');

      page_menu__container();
      
        page_menu__item( 'about');
        page_menu__item( 'projects');
        page_menu__item( 'blog');
        page_menu__item( 'contact');
        // page_menu__item( 'login');

      close('ul');

    close('ul');

  close( 'ul');

close( 'header');

// 

// EOF
