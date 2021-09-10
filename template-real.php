<?php /* Template Name: Modèle page réalisation */ ?>

<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="grid grid-cols-1 gap-4 py-4 lg:grid-cols-4">
        <?php
                $args = array(
                    'post_type' => 'realisation',
                    'numberposts' => '100'
                );
                $recent_posts = wp_get_recent_posts($args);
                $the_query = new WP_Query(array( 'orderby' => 'rand', 'posts_per_page' => '100', 'post_type' => 'realisation'));

                while ($the_query->have_posts()) : $the_query->the_post();
                $category = get_the_category();
                    ?>

        <a href="<?=get_permalink($recent["ID"])?>">
            <div class="background-image-galery relative text-white text-2xl font-extrabold"
                style="background-image: url(<?= get_the_post_thumbnail_url($recent["ID"]) ?>); height: 410px;">
                <div class="absolute bottom-8 left-8 overlay-galery">
                    <p class="uppercase"> <?= the_title() ?></p>
                    <p class="uppercase"><?= the_time('F Y')  ?> - <span class="text-xl uppercase font-normal"><?php if ($category[0]) {
                        echo $category[0]->cat_name ;
                    }?></span> </p>
                </div>
            </div>
        </a>
        <?php
endwhile;
?>
    </section>
</main>

<?php get_footer(); ?>