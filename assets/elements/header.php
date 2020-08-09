<?php


if ( $self == 'index')
{
  $local = 'home';
  $hide_this = 'shant-exist';
}
else
{
  $local = $self;
  $hide_this = '';
}

echo <<<BANNER

<ul class="banner">
  <li class="banner-element home-button $hide_this">
    <a href="$root/index.php" class="banner-link go-home"> home</a>
  </li>
  <li class="banner-element page-name"> $local</li>
  <li class="banner-element burger-menu">
    <div class="hamburger"></div>
  </li>
</ul>

BANNER;

// EOF
