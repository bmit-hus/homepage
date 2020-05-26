<?php

html_open_wClasses('main','gateway gw-main');

title('Greetings, Stranger.');
state('May I show you around?');
// state('Choose where your journey will take you. Before I do.');

html_open_wClasses('div','gateway gw-container');

    html_open_wClasses('div','gateway gw-option');
        title('Home Page');
        state('Learn more about me as a human, man and citizen.');
    html_close('div');

    html_open_wClasses('div','gateway gw-option');
        title('Business Page');
        state('Learn more about my Business achievements and failures.');
    html_close('div');

    html_open_wClasses('div','gateway gw-option');
        title('Personal Blog');
        state('Read about my thoughts on a wide range of topics.');
    html_close('div');

    html_open_wClasses('div','gateway gw-option');
        title('Contact Page');
        state('If you got any kind of inquiry, get in touch with me through here.');
    html_close('div');

html_close('div');

html_close('main');