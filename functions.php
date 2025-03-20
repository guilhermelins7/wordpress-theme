<?php

// carregando folhas de estilos:
function carregar_scripts() {
    // chamando arquivo js Bootstrap
    wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array( 'jquery'), '5.3.3', true  );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), time(), 'all');
}

// Chamando gancho de carregamento dos scritps.
add_action( 'wp_enqueue_scripts', 'carregar_scripts' );

// Configurações do tema:
function tema_config() {
    // chamando menus:
    register_nav_menus(
    array(
        // Slug: nome curto
        'my_main_menu' => 'Main Menu',
        'my_footer_menu' => 'Footer_Menu'
    )
    );

    // Definindo cabeçalho customizavel, habilita a função no wp-admin.
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
    // Adiciona opção para definir imagem destacada:
    add_theme_support('post-thumbnails');
    // Adicionando formatos de post:
    add_theme_support('post-formats', array( 'video', 'image' ) );
    // Adicionando as side-bars:

}

// Criando e definindo a side-bar:
function sidebars() {
    register_sidebar(
        array(
            'name'=> 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Side bar para uso na Home Page',
            'before_widget' => '<div class="widget-wrapper>',
            'afeter_widget' => '</div>',
            'before_title' => '<h2 class="widget-title>',
            'after_title' => '</h2>',
        )
        );
        // Definindo a side-bar do Blog:
        register_sidebar(
            array(
                'name'=> 'Blog Sidebar',
                'id' => 'sidebar-2',
                'description' => 'Side bar para uso no Blog',
                'before_widget' => '<div class="widget-wrapper>',
                'afeter_widget' => '</div>',
                'before_title' => '<h2 class="widget-title>',
                'after_title' => '</h2>',
            )
            );
}

add_action('after_setup_theme', 'tema_config', 0);

// Criando uma side-bar para adicionar widgets:
add_action( 'widgets_init', 'sidebars' );

// Funções lógicas:
function tipo_sidebar() {
    if (is_home()) {
        return 'sidebar-2'; 
    } 
    return 'sidebar-1';
}