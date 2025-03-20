<article>
    <php? echo get_post_format() ?>
        <h2> <?php the_title(); ?> </h2>
        <!-- chamando thumbnail -->
        <?php the_post_thumbnail( array(275, 275) ); ?>
        <p> <?php the_tags() ?> </p>
        <p> <?php the_content() ?> </p>
</article>