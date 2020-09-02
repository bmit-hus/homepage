<?php

function root()
{
  $to_go_back = '..';
  $to_wait = '.';

  $is_index = 'index';
  $called_file = rtrim( basename ( $_SERVER[ 'PHP_SELF']), '.php');


  if ( $called_file == $is_index)
  {
    return $to_wait;
  }
  else
  {
    return $to_go_back;
  }
}

$goto = root();


// use the following lines of code
// if working on MacBook... (HOTFIX)
  include_once "$goto/assets/classes/arch.class.php";
  include_once "$goto/assets/classes/parsedown.class.php";

// use this line of code
// if working on Windows (DEFAULT)
  // include_once "$goto/includes/autoload/classes.inc.php";

include_once "$goto/includes/globals/variables.inc.php";
include_once "$goto/includes/globals/functions.inc.php";

include_once "$root/assets/items/header.php";
include_once "$root/assets/items/footer.php";

include_once "$goto/includes/new/feature.inc.php";

// EOF
