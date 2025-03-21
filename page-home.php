<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/banner'); ?>

<div class="content-area">
    <main class="">
        <section class="slide">
            <?php echo do_shortcode('[recent_post_slider design="design-2" limit="3" ]') ?>
        </section>
        <?php get_template_part( 'template-parts/services' ) ?>
        <div class="container">
            <section class="middle-area">
                <div class="row">
                    <aside class=" container sidebar col-lg-5 col-xl-4">
                        <?php echo get_sidebar() ?>
                    </aside>
                    <div class=" container col-lg-7 col-xl-8">
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
                </div>

            </section>
        </div>
        <section class="map">
            <iframe width="100%" height="350" style="border:0" loading="lazy" allowfullscreen
                referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBdx0ju5BuL8HzEmBvM0OlrHx7SfS08X3w
                &q=Space+Needle,Seattle+WA&zoom=15">
            </iframe>
        </section>
    </main>
</div>

<!-- Chamando o footer -->
<?php get_footer(); ?>