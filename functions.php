<?php

function tobe_register_styles() {

    $version = wp_get_theme()->get('Version'); 
    wp_enqueue_style('tobe-style', get_template_directory_uri() . "/style.css", array('tobe-bootstrap'), $version);
    wp_enqueue_style('tobe-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('tobe-fontawesome', get_template_directory_uri() . "/assets/fontawesome/css/all.min.css", array(), '1.0', 'all');
};

add_action('wp_enqueue_scripts', 'tobe_register_styles');

?>

