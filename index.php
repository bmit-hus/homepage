<?php
    include "meta/run.php";
    include "meta/arc.php";
?>

<body class="container">

<?php

// include items:
include "items/header.php";
if ( $page != "blog" )
{
    include "items/navigation.php";
}
include "items/content.php";
include "items/footer.php";

?>

</body>

</html>