<!-- Verificar possibilidade de condicionar a exibição de alguns elementos aqui -->

<article <?php post_class(array( 'class' => 'secondary')) ?>>
    <php? echo get_post_format() ?>
        <h2> <a href="<?php the_permalink( ); ?> "><?php the_title(); ?> </a> </h2>
        <div class="thumbnail">
            <!-- chamando thumbnail -->
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( array(275, 275) ); ?>
            </a>
        </div>
        <div class="meta-info">
            by <span> <?php the_author_posts_link( ); ?> </span>
            Categories: <span> <?php the_category(' '); ?> </span>
            <?php the_tags( 'Tags: <span>', ', ', '</span>'); ?>
        </div>
        <!-- Resumo do post: -->
        <?php the_excerpt(  ) ?>
</article>