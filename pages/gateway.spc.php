<?php

html_open_wClasses('body', 'centered');

html_open_wClasses('header', 'gw-header');

    // nav_button;
        // theme_switch

    title('landing space');

html_close('header');


html_open_wClasses('main', 'grid-container');

    html_open_wClasses('button', 'gateway ornj inactive');
        section('homepage');
    html_close('button');

    html_open_wClasses('button', 'gateway blue inactive');
        section('business');
    html_close('button');

    html_open_wClasses('button', 'gateway vlet inactive');
        section('blog');
    html_close('button');

    html_open_wClasses('button', 'gateway gryn inactive');
        section('contact');
    html_close('button');

html_close('main');


html_open_wClasses('footer', 'left');

    // state_path();

    declare_copyright();

html_close('footer');