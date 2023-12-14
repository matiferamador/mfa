
<?php
require get_template_directory() . '/includes/queries.php';

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

function mfa_scripts_styles() {
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/latest/normalize.css', array(), '8.0.1');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.5');
    wp_enqueue_style('flowbite-css', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css', array(), '2.2.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'swiper-css'), '1.0.0');

    // Archivos scripts
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5');
    wp_enqueue_script('flowbite-js', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js', array(), '2.2.0');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js', 'flowbite-js'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'mfa_scripts_styles');



// Registrar el tipo de entrada personalizado
function registrar_tipo_proyecto() {
    $labels = array(
        'name'               => _x( 'Proyectos', 'Nombre general de la entrada personalizada', 'text-domain' ),
        'singular_name'      => _x( 'Proyecto', 'Nombre singular de la entrada personalizada', 'text-domain' ),
        'menu_name'          => _x( 'Proyectos', 'Nombre en el menú', 'text-domain' ),
        'name_admin_bar'     => _x( 'Proyecto', 'Nombre en la barra de administración', 'text-domain' ),
        'add_new'            => _x( 'Agregar Nuevo', 'Proyecto', 'text-domain' ),
        'add_new_item'       => __( 'Agregar Nuevo Proyecto', 'text-domain' ),
        'new_item'           => __( 'Nuevo Proyecto', 'text-domain' ),
        'edit_item'          => __( 'Editar Proyecto', 'text-domain' ),
        'view_item'          => __( 'Ver Proyecto', 'text-domain' ),
        'all_items'          => __( 'Todos los Proyectos', 'text-domain' ),
        'search_items'       => __( 'Buscar Proyectos', 'text-domain' ),
        'parent_item_colon'  => __( 'Proyecto Padre:', 'text-domain' ),
        'not_found'          => __( 'Proyectos no encontrados.', 'text-domain' ),
        'not_found_in_trash' => __( 'Proyectos no encontrados en la papelera.', 'text-domain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'proyecto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'proyecto', $args );
}
add_action( 'init', 'registrar_tipo_proyecto' );
