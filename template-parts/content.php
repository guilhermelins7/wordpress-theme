<article>
    <h2> <?php the_title(); ?> </h2>
    <!-- chamando thumbnail -->
    <?php the_post_thumbnail( array(275, 275) ); ?>
    <p>Publicado em: <?php echo get_the_date(); ?> por: <?php the_author_posts_link( ); ?> </p>
    <p>Categorias: <?php the_category() ?> </p>
    <p> <?php the_tags() ?> </p>
    <p> <?php the_content() ?> </p>
</article>