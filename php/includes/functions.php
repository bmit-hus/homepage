<?php

function callSelf() {
  return rtrim( basename( $_SERVER['PHP_SELF']), '.php');
}
function callFile() {
  return basename( $_SERVER['PHP_SELF']);
}

// EOF
