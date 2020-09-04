<?php

open( 'main');

  container( 'content');
    parsedown( 'test');
  shutcontainer();

  open( 'aside');
    
  close( 'aside');

close( 'main');

// EOF
