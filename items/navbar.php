<?php // make links appear as TREE.

$open_navbar = '<nav class="navbar element">';
$shut_navbar = '</nav>';

$open_list = '<ul>';
$shut_list = '</ul>';
$next_list = "$shut_list$open_list";

echo $open_navbar.$open_list;

make_pagelink('home');
make_pagelink('portfolio');

echo $next_list;

make_pagelink('test');

echo $shut_list.$shut_navbar;