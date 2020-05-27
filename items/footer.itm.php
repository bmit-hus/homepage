<?php

html_open_wClasses('footer','footer');

html_open_wClasses('div','locale');
    state_where();
html_close('div');

html_open_wClasses('div','c-statement');
    $copyright_by = "$copy Copyright by ";
    $me = $_POST['my_Fullname'];
    $copyright_statement = $copyright_by.$me.$_b.$date_short_en.$dot;

    state($copyright_statement);
html_close('div');

html_close('footer');