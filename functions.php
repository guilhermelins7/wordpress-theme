<?php

// carregando folhas de estilos:
function carregar_scripts() {
    // chamando arquivo js Bootstrap

    // Também possível chamar o bootstrap(css&js) por aqui:

    // wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array( 'jquery'), '5.3.3', true  );
    // wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    
    // chamando minhas folhas de estilo:
    $styles = ['template', 'header', 'blog', 'footer', 'content'];

    foreach ($styles as $style) {
        wp_enqueue_style($style, get_template_directory_uri() . "/css/$style.css");
    }
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

// Criando widgets de serviço:
function servicos_widget(): void {
    $widgets = array(
        array(
            'name'        => 'Service 1',
            'id'          => 'services-1',
            'description' => 'Primeira área de serviço.',
        ),
        array(
            'name'        => 'Service 2',
            'id'          => 'services-2',
            'description' => 'Segunda área de serviço.',
        ),
        array(
            'name'        => 'Service 3',
            'id'          => 'services-3',
            'description' => 'Terceira área de serviço.',
        )
    );

    foreach ( $widgets as $widget ) {
        register_sidebar(
            array(
                'name'          => $widget['name'],
                'id'            => $widget['id'],
                'description'   => $widget['description'],
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
}

function widgets(): void {
    sidebars();
    servicos_widget();
}

add_action('after_setup_theme', 'tema_config', 0);

// passando os widgets do projeto:
add_action( 'widgets_init', 'widgets' );

// Funções lógicas:
function tipo_sidebar(): string {
    if (!is_home()) {
        return 'sidebar-1';
    }
    return 'sidebar-2';
}