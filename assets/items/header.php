<?php

include_once "$root/includes/functions/header.php";

open( 'header');

  banner();

    banner_item( 'them-switch');

      theme_switch();

    close( 'li');

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
