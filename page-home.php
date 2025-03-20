<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/banner'); ?>

<div class="content-area">
    <main class="">
        <section class="slide">Slide</section>
        <?php get_template_part( 'template-parts/services' ) ?>
        <section class="middle-area">
            <div class="container">
                <h1>Últimas notícias</h1>

                <!-- Post Principal -->
                <div class="row">
                    <?php 
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 1,
                        'cat'           => '11',
                    );
                    
                    $featured = new WP_Query($args);

                    if ($featured->have_posts()) {
                        while ($featured->have_posts()) {
                            $featured->the_post();
                    ?>
                    <div class="col-12 mb-4">
                        <?php get_template_part('template-parts/content', 'featured'); ?>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <!-- Posts Secundários -->
                <div class="row">
                    <?php 
                    $args2 = array(
                        'posts_per_page'   => 2,
                        'category__not_in' => array(8),
                        'category__in'     => array(5),
                        
                    );

                    $secondary = new WP_Query($args2);

                    if ($secondary->have_posts()) {
                        while ($secondary->have_posts()) {
                            $secondary->the_post();
                    ?>
                    <div class="col-sm-6 mb-4">
                        <?php get_template_part('template-parts/content', 'secondary'); ?>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>

        </section>
        <section class="map">Mapa</section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>