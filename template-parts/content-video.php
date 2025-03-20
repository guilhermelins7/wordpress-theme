<article>
    <php? echo get_post_format() ?>
        <h2> <a href="<?php the_permalink( ); ?> "><?php the_title(); ?> </a> </h2>
        <!-- chamando thumbnail -->
        <div class="thumbnail">
            <!-- chamando thumbnail -->
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( array(275, 275) ); ?>
            </a>
        </div>
        <p>Publicado em: <?php echo get_the_date(); ?> </p>
        <p> <?php the_tags() ?> </p>
        <p> <?php the_content() ?> </p>
</article>