<?php
/*
Template Name: General Template
*/
?>

<!-- chamando header: -->
<?php get_header(); ?>

<?php get_template_part('template-parts/banner'); ?>

<div class="content-area">
    <main class="">
        <section class="middle-area">
            <div class="container">
                <div class="general-template">
                    <article>
                        <h2> <?php the_title(); ?> </h2>
                        <?php the_content() ?>
                    </article>
                </div>
        </section>
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