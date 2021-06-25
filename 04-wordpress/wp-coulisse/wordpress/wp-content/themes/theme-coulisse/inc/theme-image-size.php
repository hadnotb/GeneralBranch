<?php



add_action('after_setup_theme', 'devtheme_add_images_sizes');

function devtheme_add_images_sizes(){
    add_image_size('devtheme-thumbnail', 100, 100, true);
}