<?php

openw('nav', 'navbar element');

open('ul');

    add('homepage:');

    makeLink('home');
    makeLink('skills');
    makeLink('story');
    makeLink('blog');

shut('ul');

open('ul');

    add('blog:');

    makeLink_sub('blog','home');

shut('ul');

open('ul'); add('test files:'); makeLink('empty'); makeLink('test'); shut('ul');

shut('nav');