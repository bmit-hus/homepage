<?php

openw('nav', 'navbar element');

// open('ul');

makeNavLink('home');
makeNavLink('skills');
makeNavLink('story');
makeNavLink('blog');

// shut('ul');

open('ul'); makeNavLink('empty'); makeNavLink('test'); shut('ul');

shut('nav');