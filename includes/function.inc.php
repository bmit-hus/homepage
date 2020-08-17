<?php

function open( $element)
{
  echo "<$element>";
}

function close( $element)
{
  echo "</$element>";
}

function parse( $this_file)
{
  global $parsedown;
  echo $parsedown->text(file_get_contents( $this_file));
}

// 

// EOF
