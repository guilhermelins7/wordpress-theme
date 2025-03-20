<article>
    <php? echo get_post_format() ?>
        <h2> <a href="<?php the_permalink( ); ?> "><?php the_title(); ?> </a> </h2>
        <?php
            if(has_category()):
        ?>
        <p>Categories: <?php the_category(' ') ?> </p>
        <?php
            endif
        ?>
        <p> <?php the_tags() ?> </p>
        <p> <?php the_excerpt() ?> </p>
</article>