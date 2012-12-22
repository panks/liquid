<?php

function new_excerpt_length($length) {
    return 70;
}
add_filter('excerpt_length', 'new_excerpt_length');

function excerpt_ellipse($text) {
   return str_replace('[...]', ' <a href="'.get_permalink().'">Read more...</a>', $text); }
add_filter('the_excerpt', 'excerpt_ellipse');

?>