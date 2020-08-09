<?php

$currentPage = rtrim( basename( $_SERVER['PHP_SELF'], '.php'));

$current_page_is = $currentPage;
if ( $current_page_is = 'index')
{
  $currentPage = 'home';
  $forget = 'shant-exist';
}

echo <<<BANNER

<ul class="banner">
  <li class="banner-element home-button $forget"> home</li>
  <li class="banner-element page-name "> $currentPage</li>
  <li class="banner-element burger-menu">
    <div class="hamburger"></div>
  </li>
</ul>

BANNER;

// EOF
