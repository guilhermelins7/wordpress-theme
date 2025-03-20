<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Tema Wordpress</title>
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
            <nav class="menu col-md-10 text-end">
                <!-- Chamando o menu criado: -->
                <?php wp_nav_menu( array('theme_location' => 'my_main_menu' ) ) ?>
            </nav>
        </section>
    </header>