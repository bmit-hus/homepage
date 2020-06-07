<?php

$html->openw('body', 'centered ', '');

$html->openw($header, 'left', '');
    $html->title('landing space');
$html->shut($header);

$html->openw($main, 'grid-container', '');
    $add->gateway_button('homepage');
    $add->gateway_button('business');
    $add->inactive_button('blog');
    $add->gateway_button('contact');
$html->shut($main);

$html->openw($footer, 'right', '');
    $add->copyright_declaration();
$html->shut($footer);