<?php

function getHeader() {
  global $ROOT;
  include_once "$ROOT/assets/header.php";
}
function getFooter() {
  global $ROOT;
  include_once "$ROOT/assets/footer.php";
}

function getFillerContent() {
  global $parsedown;
  global $ROOT;

  echo "<div class=\"textbox\">";
    echo $parsedown->text( file_get_contents( 
      "$ROOT/md/test.md"
    ));
  echo "</div>";
}

function getMarkdown() {
  global $parsedown;
  global $ROOT;
  global $SELF;

  echo "<div class=\"textbox\">";
    echo $parsedown->text( file_get_contents( 
      "$ROOT/md/$SELF.md"
    ));
  echo "</div>";
}

// EOF
