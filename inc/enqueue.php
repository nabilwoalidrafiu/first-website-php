<?php

 function nabil_css_js_file_calling(){

    //css calling
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
        wp_enqueue_style('bootstrap');
        wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
        wp_enqueue_style('custom');
        //wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string );

    //js calling 
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.0.2', 'true');
};
add_action('wp_enqueue_scripts', 'nabil_css_js_file_calling');
//add google font
function nabil_add_google_font() {
    wp_enqueue_style('nabil_google_font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}