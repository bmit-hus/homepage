<?php

openw('main', 'container');

if($page != 'blog')
{
    include 'items/navbar.php';
}

openw('aside', 'element sidebar');
echo $parsedown->text(file_get_contents("panel/$page.md"));
shut('aside');

openw('div', 'element content');
echo $parsedown->text(file_get_contents("page/$page.md"));
shut('div');

shut('main');