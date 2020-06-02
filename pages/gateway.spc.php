<?php

html_open_wClasses('body', 'centered');

html_open_wClasses('header', 'yllw blue vlet gryn');

    // nav_button;
        // theme_switch

    title('gateway page');

html_close('header');


html_open_wClasses('main', 'grid-container');

    html_open_wClasses('button', 'gateway ornj');
        section('homepage');
    html_close('button');

    html_open_wClasses('button', 'gateway blue');
        section('business');
    html_close('button');

    html_open_wClasses('button', 'gateway vlet');
        section('blog');
    html_close('button');

    html_open_wClasses('button', 'gateway gryn');
        section('contact');
    html_close('button');

html_close('main');


html_open_wClasses('footer', 'left');

    // state_path();

    declare_copyright();

html_close('footer');

html_close('body');


// html_open_wClasses('main','gateway gw-main centered');

// title('Greetings, Stranger.');
// state('State the nature of your inquiry.');

// html_open_wClasses('div','gateway gw-container');

//     html_open_wClasses('button','gateway gw-option inactive');
//         state('You want to learn more about me personally.');
//         section('I was nearby and thought I\'d drop in.');
//     html_close('button');

//     html_open_wClasses('button','gateway gw-option inactive');
//         state('You wish to learn about my professional skillset, or build business relations.');
//         section('Business.');
//     html_close('button');

//     html_open_wClasses('button','gateway gw-option inactive');
//         state('You\'re interested in reading my articles.');
//         section('Where is the library?');
//     html_close('button');

//     html_open_wClasses('button','gateway gw-option inactive');
//         state('You wish to contact me.');
//         section('Tell him: "We need to talk...');
//     html_close('button');

// html_close('div');

// html_close('main');

// include 'items/footer.itm.php';