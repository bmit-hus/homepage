<?php

openw('nav', 'navbar element');

open('ul');

    add('homepage:');

    makeLink('home');
    makeLink('story');

shut('ul');

open('ul');

    add('portfolio');

    makeLink('overview');
    makeLink('skills');


shut('ul');

// open('ul');

//     add('blog:');

//     makeLink('blog');
//     makeLink_sub('blog','home');

// shut('ul');

// open('ul'); add('test files:'); makeLink('empty'); makeLink('test'); shut('ul');

shut('nav');