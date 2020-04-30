<?php // look up "Font Awesome" for icons:

include_once "meta/db-handler.php";
include "imported/parsedown.php";
include "meta/var.php";
include "meta/run.php";
include "meta/lib.php";

html();
open('head');
meta();
shutopen('head', 'body');

include "meta/header.php";

    openw('div', 'container frame');

        include "meta/navbar.php";

        parse_side();
        parse_main();

    shut('div');

include "meta/footer.php";

shut('body');
shut('html');