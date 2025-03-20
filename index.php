<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<div class=" content-area">
    <main class="">
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="new col-md-8"> <?php
            // Se houver algum post:
            if(have_posts()) {
              // Enquanto houver posts, mostre o post.
              while( have_posts()) {
                the_post();
                // Chamando o componente, com base no se formato:
                get_template_part('template-parts/content', get_post_format());
              }
            } else {
              echo '<p>Não há posts para serem exibidos.</p>';
            }
                ?>
                    </div>
                    <aside class="sidebar col-md-4 h-100"><?php echo get_sidebar() ?></aside>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>