<?php

if ( $self == 'index')
{
  $local = 'home';
  $hide_this = 'shant-exist';
}
else
{
  $local = $self;
  $hide_this = '';
}

create__banner();
  create__home_button();
  create__page_name();
  create__page_strip();
    create__hamburger();
    create__page_strip__element( 'home');
    create__page_strip__element( 'about');
    create__page_strip__element( 'projects');
    create__page_strip__element( 'blog');
    create__page_strip__element( 'contact');
    create__page_strip__element( 'login');
  close( 'ul');
close( 'ul');

// EOF
