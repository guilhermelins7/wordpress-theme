<?php


// carregando folhas de estilos:
function load_scripts() {
    // chamando arquivo js Bootstrap
    wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array( 'jquery'), '5.3.3', true  );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), time(), 'all');
}

// Chamando gancho
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// chamando menus:

register_nav_menus(
    array(
        // Slug: nome curto
        'my_main_menu' => 'Main Menu',
        'my_footer_menu' => 'Footer_Menu'
    )
    );