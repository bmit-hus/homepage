<?php

// This class shall contain all functions to html elements

class HTML {

    // makers
        // makers create an element
    // 

    public static function makeMeta( $metatype, $metainfo ) { echo <<<"THIS"
        <meta name="$metatype" content="$metainfo">
THIS;
    }


    public static function makeElement( $tags, $content ) { echo <<<"THIS"
        <$tags> $content </$tags>
THIS;
    }

//     public static function createElement_wAttributes( $tags, $attributes, $content ) { echo <<<"THIS"
//         < $tags $attributes > $content </ $tags >
// THIS;
//     }

    public static function makeElement_wID( $tags, $identifier, $content ) { echo <<<"THIS"
        <$tags id="$identifier"> $content </$tags>
THIS;
    }

    public static function makeElement_wClasses( $tags, $classes, $content ) { echo <<<"THIS"
        <$tags class="$classes"> $content </$tags>
THIS;
    }


    public static function makeLink( $target, $classes, $linkName ) { echo <<<"THIS"
        <link href="$target" class="$classes"> $linkName </link>
THIS;
    }

}

// EOF
