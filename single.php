<?php get_header() ?>

<div class="primary">
    <main>
        <div class="contianer">
            <?php
                while(have_posts()) {
                    the_post();
                    get_template_part( 'template-parts/content', 'single' );

                    // Carregando seção de comentários:
                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                }
            ?>
        </div>
    </main>
</div>

<?php get_footer() ?>