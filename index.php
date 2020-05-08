<?php // look up "Font Awesome" for icons:

header('Location: https://hus.bm-it.ch/');

// include_once "meta/db-handler.php";
include "imported/parsedown.php";
include "meta/run.php";
include "meta/var.php";

$load->html();

open('head');

$load->metadata();

shutopen('head', 'body');

include "meta/header.php";

    openw('div', 'container frame');

        include "meta/navbar.php";

        $load->content();

    shut('div');

include "meta/footer.php";

shut('body', 'html');
