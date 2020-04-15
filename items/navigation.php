<?php 

function createLink( $link )
{ 
    echo " <li> <a href=\"?page=$link\" > " . ucfirst($link) . " </a> </li> "; 
}

?>

<nav class="item item2" >

<?php

createLink( "home" );
createLink( "portfolio" );
createLink( "test" );

// make links appear as TREE.

?> 

</nav>