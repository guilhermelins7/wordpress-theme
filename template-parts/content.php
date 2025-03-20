<!-- Verificar possibilidade de condicionar a exibição de alguns elementos aqui -->

<article <?php post_class() ?>>
    <php? echo get_post_format() ?>
        <h2> <a href="<?php the_permalink( ); ?> "><?php the_title(); ?> </a> </h2>
        <!-- chamando thumbnail -->
        <div class="thumbnail">
            <!-- chamando thumbnail -->
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( array(275, 275) ); ?>
            </a>
        </div>
        <p>Publicado em: <?php echo get_the_date(); ?> por: <?php the_author_posts_link( ); ?> </p>
        <p>Categorias: <?php the_category() ?> </p>
        <p> <?php the_tags() ?> </p>
        <p> <?php the_content() ?> </p>
</article>