<?php

open( 'main');

  container( 'content container');
    getContent();
  shutcontainer();

  open( 'aside');

    container( 'aside-switch');
    shutcontainer();
    
    startlist( 'options container');
    endlist();

    open( 'nav');
      startlist( 'navigation container');

      endlist();
    close( 'nav');

  close( 'aside');

close( 'main');

// EOF
