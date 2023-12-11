<?php
function mfa_setup() {
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mfa_setup');
function mfa_menus() {
    register_nav_menus(array(
        'menu-principal' => __("Menu Principal", 'mfa')
    ));

}
add_action('init', 'mfa_menus');

function mfa_scripts_styles () {
    //archivos css
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/latest/normalize.css', array(),'8.0.1');
    wp_enqueue_style('swiper-css', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css",array(), '11.0.5');
    wp_enqueue_style('flowbite-css', "https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css",array(), '2.2.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'swiper-css'), '1.0.0');


    // archivos scripts

    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5');
    wp_enqueue_script('flowbite-js', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js', array(), '2.2.0');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js','flowbite-js'), '1.0.0'); 


};
add_action ('wp_enqueue_scripts', 'mfa_scripts_styles');



