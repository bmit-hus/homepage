<?php 

// * local variables *****************************
$inc = "php/includes";
$cnt = "php/content";
$itm = "php/item";

// * global files ********************************
// includes
include_once "$inc/variables.php";
include_once "$inc/functions.php";
// content
// items

// * class autoloader ****************************
spl_autoload_register('autoloadClasses');

function autoloadClasses($class) {
  $path = "classes/";
  $extention = ".class.php";
  $file = $path . $class . $extention;

  if (!file_exists($file)) {
    return false;
  }

  include_once $file;
}

// * global classes ******************************
$html = new HTML();

// EOF
