<!-- chamando header: -->
<?php get_header(); ?>

<div class=" content-area">
    <main class="">
        <section class="slide">Slide</section>
        <section class="services">Serviços</section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4">Barra lateral</aside>
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
                </div>
            </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>