<?php

function new_excerpt_more() {
    global $post;
    return '<br><a class="btn btn-default btn-md" href="'. get_permalink($post->ID) . '">Leia mais</a>'; //Change to suit your needs
}
 
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

?>