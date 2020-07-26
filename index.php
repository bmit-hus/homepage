<?php

include_once "includes/setup.inc.php";

echo <<<NAVIGATE

  <a href="$root/pages/home.php"><button>home</button></a>
  <a href="$root/pages/business.php"><button>business</button></a>
  <a href="$root/pages/blog.php"><button>blog</button></a>
  <a href="$root/pages/contact.php"><button>contact</button></a>

NAVIGATE;


echo <<<TEXT

  <h1>Header 1</h1>
  <p>Paragraph</p>
  <h2>Header 2</h2>
  <p>Paragraph</p>
  <h3>Header 3</h3>
  <p>Paragraph</p>
  <h4>Header 4</h4>
  <p>Paragraph</p>
  <h5>Header 5</h5>
  <p>Paragraph</p>
  <h6>Header 6</h6>
  <p>Paragraph</p>
  <q>Quote</q>
  <em>emphatic text</em>
  <strong>strong text</strong>

TEXT;

// 

// EOF
