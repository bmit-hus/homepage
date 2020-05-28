<?php



html_open_wClasses('main','gateway gw-main centered');

title('Greetings, Stranger.');
state('State the nature of your inquiry.');

html_open_wClasses('div','gateway gw-container');

    html_open_wClasses('button','gateway gw-option inactive');
        state('You want to learn more about me personally.');
        title('I was nearby and thought I\'d drop in.');
    html_close('button');

    html_open_wClasses('button','gateway gw-option inactive');
        state('You wish to learn about my professional skillset, or build business relations.');
        title('Business.');
    html_close('button');

    html_open_wClasses('button','gateway gw-option inactive');
        state('You\'re interested in reading my articles.');
        title('Where is the library?');
    html_close('button');

    html_open_wClasses('button','gateway gw-option inactive');
        state('You wish to contact me.');
        title('Tell him: "We need to talk...');
    html_close('button');

html_close('div');

html_close('main');

include 'items/footer.itm.php';