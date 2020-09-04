<?php

include_once 'includes/global.inc.php';

function get_content( $file)
{
  global $root;
  global $parsedown;
  echo $parsedown->text( 
    file_get_contents( 
      "$root/assets/content/$file.md"
    )
  );
}

open( 'main');
  get_content( 'test');
close( 'main');

// 

// EOF
