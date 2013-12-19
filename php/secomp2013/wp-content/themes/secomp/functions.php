<?php

add_theme_support('post-thumbnails');

function get_permalink_url($title) {
    echo (esc_url(get_permalink(get_page_by_title($title))));
}

?>