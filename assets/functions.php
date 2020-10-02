<?php

function getFillerContent() {
  global $parsedown;
  global $ROOT;

  echo $parsedown->text( file_get_contents( 
    "$ROOT/md/test.md"
  ));
}

function getMarkdown() {
  global $parsedown;
  global $ROOT;
  global $SELF;

  echo $parsedown->text( file_get_contents( 
    "$ROOT/md/$SELF.md"
  ));
}

// EOF
