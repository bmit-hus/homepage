<?php

spl_autoload_register( 'autoload_class' );

function autoload_class( $class ) {
    $uri = $_SERVER[ 'REQUEST_URI' ];
    $path = 'php/classes/';
    $ext = ".cls.php";

    $class_file = $path . $class . $ext;

    if ( !file_exists( $class_file ) ) {
        return false;
    }

    require_once $class_file;
}

// EOF