<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<div class="content-area">
    <main class="">
        <section class="slide">Slide</section>
        <section class="services">Serviços</section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4"> <?php echo get_sidebar() ?> </aside>
                    <div class="new col-md-8">
                        <?php
                          // Se houver algum post:
                          if(have_posts()) {
                            // Enquanto houver posts, mostre o post.
                            while( have_posts()) {
                              the_post();
                            }
                          } else {
                            echo '<p>Não há posts para serem exibidos.</p>';
                          }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>