<?php 

$open_navbar = '<nav class="navbar element">';
$close_navbar = '</nav>';

function createLink( $link )
{ 
    echo " <li> <a href=\"?page=$link\" > " . ucfirst($link) . " </a> </li> "; 
}

echo $open_navbar;

createLink( "home" );
createLink( "portfolio" );
createLink( "test" );

// make links appear as TREE.

echo $close_navbar;