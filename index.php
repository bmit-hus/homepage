<?php

include_once "assets/arch.php";

// EOF

?>

<header>header</header>

<main> <?php getFillerContent(); ?> </main>

<footer>

<p>
  <strong> 
    <?= "$copyright $author, $date__yyyy." ?>
  </strong>
</p>

<p>
  This domain is sponsered by 
    <a 
      href=
        <?=$espas_homepage?>
      target="_blank"> 
      ESPAS
    </a>. 

  Check out our
    <a 
      href=
        <?=$espas_services?>
      target="_blank"> 
      offer of services
    </a>, 
  especially our
    <a 
      href=
        <?=$espas_it_services?> 
      target="_blank"> 
      IT services
    </a>.
</p>

</footer>