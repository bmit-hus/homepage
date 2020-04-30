<?php

openw('nav', 'navbar element');

// open('ul');

makelink('home','navobj sitelink','');
add(' | ');
makelink('test','navobj pagelink','');
add(' | ');
makelink('portfolio','navobj sitelink','root');
// makelink('portfolio','navobj sitelink','/',' | ');

// make_pagelink('home');
// make_linkseparator();
// make_pagelink('test');
// make_linkseparator();
// make_pagelink('portfolio');

// shut('ul');

shut('nav');