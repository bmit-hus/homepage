<?php

include_once "includes/setup.inc.php";

echo <<<NAVIGATE

  <a href="$root/pages/home.php"><button>home</button></a>
  <a href="$root/pages/business.php"><button>business</button></a>
  <a href="$root/pages/blog.php"><button>blog</button></a>
  <a href="$root/pages/contact.php"><button>contact</button></a>

NAVIGATE;

// 

// EOF
