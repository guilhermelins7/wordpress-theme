<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/banner'); ?>

<div class=" content-area">
    <main class="">
        <section class="middle-area">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Página não encontrada</h1>
                        <p>Infelizmente, a página que você tentou acessar não existe no site!</p>
                    </header>
                    <div class="error">
                        <p>Você pode fazer uma pesquisa abaixo no nosso site:</p>
                        <?php get_search_form(  ) ?>
                        <?php the_widget('WP_Widget_Recent_Posts', array('title' => 'Lastest Posts', 'number' => 3 )); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>