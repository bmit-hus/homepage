<?php

openw('aside', 'item item3');
    echo $parsedown->text(file_get_contents("panel/$page.md"));
shut('aside');

openw('main', 'item item4');
    echo $parsedown->text(file_get_contents("page/$page.md"));
shut('main');