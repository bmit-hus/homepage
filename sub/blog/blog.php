<?php $root = "../..";

// look up "Font Awesome" for icons:

// include_once "db/db-handler.php";
include "$root/imported/parsedown.php";
include "$root/meta/run.php";
include "$root/meta/var.php";
include "lib.php";

$load->html();

open('head');

$load->metadata();

shutopen('head', 'body');

include "$root/meta/header.php";

    openw('div', 'container frame');

        include "$root/meta/navbar.php";

        $load->content();

    shut('div');

include "$root/meta/footer.php";

shut('body', 'html');