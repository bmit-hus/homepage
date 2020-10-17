<?php

$espas_homepage =     "https://www.espas.ch/";
$espas_services =     "https://www.espas.ch/de/unsere-dienstleistungen";
$espas_it_services =  "https://its-espas.ch/";

echo <<<FOOTER

<footer>

<p>
  <strong> 
    $copyright $AUTHOR, $date__yyyy.
  </strong>
</p>

<p>
  This domain is sponsered by <a href= $espas_homepage target="_blank">ESPAS</a>.
  Learn more about our <a href= $espas_services target="_blank">offer of services</a>. 
</p>
<p>
  We also got you covered in regards of ICT, check our
    <a href= $espas_it_services target="_blank">IT services</a>
  to learn more.
</p>

</footer>

FOOTER;

// EOF
