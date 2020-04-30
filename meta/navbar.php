<?php

openw('nav', 'navbar element');

// open('ul');

makelink('home','navobj link');
add(' | ');
makelink('skills','navobj link');
add(' | ');
makelink('story','navobj link');
add(' | ');
makelink('blog','navobj link');
add(' | ');
makelink('empty','navobj link');

// shut('ul');

open('ul'); makelink('test','navobj link'); shut('ul');

shut('nav');