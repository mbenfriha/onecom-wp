<?php get_header(); ?>

<main role="main" class="wrapper">
    <!-- section -->
    <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article class="mb-36" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         

            <!-- post title -->
            <p class="display-inline mb-8 mt-44 relative">
                <img class="stroke-menu black-image" style="left: -11em;"
                    src="<?php echo get_template_directory_uri(); ?>/img/icons/losange_trace.png" alt="">
                <a class="uppercase font-bold text-4xl mr-6" href="<?php the_permalink(); ?>"
                    title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
                <span class="text-xl category-real uppercase font-normal mr-6"> <?=edit_post_link();?></span>

                <span class="text-xl uppercase font-normal mr-6"><?php the_time('F Y'); ?> </span>
                <span class="text-xl category-real uppercase font-normal"><?= the_category(', ') ?></span>
            </p>

               <!-- post thumbnail -->
            <?php
        $images = get_field('single-realisation');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($images): ?>
            <div class="grid grid-cols-1 gap-6 mb-36 lg:grid-cols-3">
                <?php foreach ($images as $image): ?>
                <a href="<?=$image['url']?>">
                    <div class="<?= $image['url'] ?  'h-610' : ''?> background-image-galery"
                        style="background-image:url(<?= $image['url'] ?>)"> </div>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <!-- /post thumbnail -->
            <!-- /post title -->


            <div class="grid text-xl font-normal grid-cols-1 mb-10 lg:grid-cols-2 gap-12">
   
                <div class="flex flex-wrap content-center">
                    <?php the_content(); // Dynamic Content?>
                </div>
                             <div>
                    <?php
    // Check rows exists.
    if (have_rows('video_real')):

        // Loop through rows.
        while (have_rows('video_real')) : the_row();
        ?>

                    <div class="video-responsive">

                        <?= get_sub_field('url_video'); ?>
                    </div>
                    <?php
        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
    ?>
                </div>
            </div>

            <a class="text-black border-2 inline-block py-6 px-16 font-semibold mr-2 mb-2 border-black text-2xl"
                href="<?php echo home_url() . '/contact'; ?>">Nous contacter</a>

        </article>
        <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

        <!-- article -->
        <article>

            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

        </article>
        <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>