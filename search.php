<?php get_header() ?>

<div class="primary">
    <main>
        <div class="container">
            <div class="search-content">
                <h2>Resultados de pesquisa para: <?php echo get_search_query(); ?> </h2>
                <?php
                while(have_posts()) {
                    the_post();
                    get_template_part( 'template-parts/content', 'search' );

                    // Carregando seção de comentários:
                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                }

                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next'
                    )
                );
            ?>
            </div>
        </div>

    </main>
</div>

<?php get_footer() ?>