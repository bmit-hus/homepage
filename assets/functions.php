<?php

function getHeader() {
  global $ROOT;
  include_once "$ROOT/assets/header.php";
}
function getFooter() {
  global $ROOT;
  include_once "$ROOT/assets/footer.php";
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

function lipsum( $reps) {

  echo "<h2>Lorem Ipsum</h2>";

for ( $x = 0; $x < $reps; $x++) {
  echo <<<lipsum
  <p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
  </p>
lipsum;
}

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

// EOF
