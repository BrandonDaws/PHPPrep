<?php

function brandontheme_register_styles(){
    wp_enqueue_style( 'brandontheme_register_style', get_template_directory_uri()."/style.css", array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'brandontheme_register_styles');