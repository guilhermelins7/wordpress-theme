<!-- chamando header: -->
<?php get_header(); ?>
<div class="content-area">
    <main class="">
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4">Barra lateral</aside>
                    <div class="new col-md-8"> <?php
            // Se houver algum post:
            if(have_posts()) {
              // Enquanto houver posts, mostre o post.
              while( have_posts()):
                the_post();
                ?>
                        <article>
                            <h2> <?php the_title(); ?> </h2>
                            <p>Publicado em: <?php echo get_the_date(); ?> por: <?php the_author_posts_link( ); ?> </p>
                            <p>Categorias: <?php the_category() ?> </p>
                            <p> <?php the_tags() ?> </p>
                            <p> <?php the_content() ?> </p>
                        </article>
                        <?php
              endwhile;
            } else {
              echo '<p>Não há posts para serem exibidos.</p>';
            }
                ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>