<?php

// ===== GLOBAL

function open( $element)
{
  echo "<$element>";
}

function close( $element)
{
  echo "</$element>";
}

function bigmac( $additional_classes)
{
  echo <<<__BIGMAC
    <li class="menu-switch $additional_classes">
      <div class="hamburger "></div>
    </li>
__BIGMAC;
}

function toggle( $additional_classes)
{
  echo "i'm yet to receive a function...";
}

// EOF