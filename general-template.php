<?php
/*
Template Name: General Template
*/
?>

<!-- chamando header: -->
<?php get_header(); ?>
<div class="content-area">
    <main class="">
        <section class="middle-area">
            <div class="container">
                <div class="general-template"> <?php
            // Se houver algum post:
            if(have_posts()) {
              // Enquanto houver posts, mostre o post.
              while( have_posts()):
                the_post();
                ?>
                    <article>
                        <h2> <?php the_title(); ?> </h2>
                        <?php the_content() ?>
                    </article>

                    <?php
              endwhile;
            } else {
              echo '<p>Não há posts para serem exibidos.</p>';
            }
                ?>
                </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>