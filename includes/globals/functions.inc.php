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
  function startlist( $class)
  {
    echo "<ul class=\" $class\">";
  }
  function endlist()
  {
    echo "</ul>";
  }

function close( $element)
{
  echo "</$element>";
}

function getContent()
{
  global $root;
  global $parsedown;
  global $content_file;

  $get = "$root/assets/content/$content_file.md"; 

  echo $parsedown->text( file_get_contents( $get));
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