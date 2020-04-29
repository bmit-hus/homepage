<?php

openw('main', 'container main');

include 'items/navbar.php';

openw('aside', 'element sidebar');

md_panel($page);

shut('aside');

openw('div', 'element content');

md_page($page);

shut('div');

shut('main');