<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Tema Wordpress</title>
    <!-- Bootstrap: -->
    <link rel='stylesheet' id='bootstrap-css-css'
        href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?ver=5.3.3' type='text/css'
        media='all' />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header class="">
        <section class="top-bar">
            <div class="social-media-icons">
                Icones Sociais
            </div>
            <div class="search">
                <?php get_search_form(); ?>
            </div>
        </section>
        <section class="menu-area">
            <section class="logo">
                Logo
            </section>
            <nav class="menu">
                <!-- Chamando o menu criado: -->
                <?php wp_nav_menu( array('theme_location' => 'my_main_menu' ) ) ?>
            </nav>
        </section>
    </header>