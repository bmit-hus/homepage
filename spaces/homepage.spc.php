<?php

$html->openw('body', 'centered', '');

$html->openw($header, 'left', '');
    // nav_button;
    // theme_switch;
    // lang_switch;
    // login;
    $html->title('homepage');
$html->shut($header);

$html->openw($main, 'grid-container left', '');
    // homepage content
    $add->mdcontent();
$html->shut($main);

$html->openw($footer, 'right', '');
    $add->copyright_declaration();
$html->shut($footer);