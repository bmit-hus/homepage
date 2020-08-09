<?php

open('header');
  include_once "$root/assets/elements/header.php";
close('header');

open('nav');
  include_once "$root/assets/elements/navigation.php";
close('nav');

open('main');
  include_once "$root/assets/elements/main.php";
close('main');

open('aside');
  include_once "$root/assets/elements/aside.php";
close('aside');

open('footer');
  include_once "$root/assets/elements/footer.php";
close('footer');

// EOF
