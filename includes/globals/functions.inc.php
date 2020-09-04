<?php

// ===== GLOBAL

function open( $element)
{
  echo "<$element>";
}
  function container( $class)
  {
    echo "<div class=\" $class\">";
  }
  function shutcontainer()
  {
    echo "</div>";
  }

function close( $element)
{
  echo "</$element>";
}

function parsedown( $file)
{
  global $root;
  global $parsedown;
  echo $parsedown->text( 
    file_get_contents( 
      "$root/assets/content/$file.md"
    )
  );
}

function bigmac( $additional_classes)
{
  echo <<<__BIGMAC
    <li class="menu-switch $additional_classes">
      <div class="hamburger "></div>
    </li>
__BIGMAC;
}

// function toggle( $additional_classes)
// {
//   echo "i'm yet to receive a function...";
// }

// EOF