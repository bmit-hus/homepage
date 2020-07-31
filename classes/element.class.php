<?php

class Element
{

  public function open( $element)
  {
    echo "<$element>";
  }
  public function close( $element)
  {
    echo "</$element>";
  }

  public function make_btn( $target, $name)
  {
    global $root;
    echo <<<BUTTON
      <a href="$root/$target.php"><button> $name </button></a>
BUTTON;
  }

  public function index_button()
  {
    global $root;
    echo "<a href=\"$root/index.php\"><button> go to landing page</button></a>";
  }
  public function pages_button( $button_name)
  {
    global $root;
    echo "<a href=\"$root/pages/$button_name.php\"><button> $button_name</button></a>";
  }
}

// EOF
