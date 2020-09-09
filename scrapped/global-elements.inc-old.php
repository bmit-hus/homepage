<?php

open('header');
  include_once "$root/assets/elements/header.php";
close('header');

open('nav');
  include_once "$root/assets/elements/navigation.php";
close('nav');

open('footer');
  include_once "$root/assets/elements/footer.php";
close('footer');


open('main');
  parse( "$root/assets/content/$self/main.md");
close('main');

open('aside');
  parse( "$root/assets/content/$self/aside.md");
close('aside');

// EOF
