<?php

// Links:
$espas_homepage =     "https://www.espas.ch/";
$espas_services =     "https://www.espas.ch/de/unsere-dienstleistungen";
$espas_it_services =  "https://its-espas.ch/";

echo <<<FOOTER

  <footer>

    <p>
      <strong>
        $copyright $author, $date__yyyy.
      </strong>
    </p>

    <p>
      This domain is sponsered by 
        <a href="$espas_homepage" target="_blank"> 
          ESPAS</a>. 

      Check out our
        <a href="$espas_services" target="_blank"> 
          offer of services</a>, 
      especially our
        <a href="$espas_it_services" target="_blank"> 
          IT services</a>.
    </p>

  </footer>

FOOTER;

// EOF
