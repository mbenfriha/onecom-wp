<?php /* Template Name: Modèle page services */ ?>

<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section>

        <div class="wrapper">
            <h2 class="text-8xl mb-8 font-normal mt-15">

                <?php the_field('subtitle_page'); ?>
            </h2>
            <?php if(get_field('subtitle_page')) {
                    echo ' <hr class="w-24 mb-20 border-solid border-1 border-black" />';
                } ?>


            <div class="py-4">
                <h3 class="text-3xl mb-32 font-normal col-span-6">
                    <?php the_field('text_page'); ?>
                </h3>
                <h2 class="text-5xl mb-24 font-normal mt-15 uppercase">Photographies</h2>
                <section class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div class="rounded overflow-hidden">

                        <img class="w-full h-610" src="<?php the_field('service_photo_image_1'); ?>" />
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_photo_texte_1'); ?></p>

                        </div>
                    </div>
                    <div class="rounded overflow-hidden">

                        <img class="w-full h-610" src="<?php the_field('service_photo_image_2'); ?>" />
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_photo_texte_2'); ?></p>

                        </div>
                    </div>
                    <div class="rounded overflow-hidden">

                        <img class="w-full h-610" src="<?php the_field('service_photo_image_3'); ?>" />
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_photo_texte_3'); ?></p>

                        </div>
                    </div>
                </section>
                <h2 class="text-5xl mb-24 font-normal mt-20 uppercase">Vidéos</h2>
                <section class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div class="rounded overflow-hidden">

                        <a href="#"> <img class="w-full h-610"
                                src="<?php the_field('service_video_image_1'); ?>" /></a>
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_video_texte_1'); ?></p>

                        </div>
                    </div>
                    <div class="rounded overflow-hidden">

                        <a href="#"> <img class="w-full h-610"
                                src=<?php the_field('service_video_image_2'); ?>" /></a>
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_video_texte_2'); ?></p>

                        </div>
                    </div>
                    <div class="rounded overflow-hidden">

                        <a href="#"> <img class="w-full h-610"
                                src="<?php the_field('service_video_image_3'); ?>" /></a>
                        <div class="py-4">
                            <p class="text-2xl font-normal my-4"><?php the_field('service_video_texte_3'); ?></p>

                        </div>
                        &nbsp;

                    </div>
                </section>
            </div>
        </div>
        <section>

            <div class="box-border md:box-content">


                <div class="h-96 place-items-auto bg-black-grey bg-opacity-100 flex items-center justify-center mb-36">
                    <div class="text-white text-center text-2xl mb-8 font-normal lg:text-4xl">
                        <p class="my-6">
                            Un projet ? Une idée ? Demandez un devis gratuitement !
                        </p>
                        <br>

                        <a class="text-white border-2 inline-block py-6 px-16 font-semibold mr-2 mb-2 border-white text-2xl"
                            href="<?php echo home_url() . '/contact'; ?>">Nous écrire</a>
                    </div>
                </div>
            </div>
        </section>&nbsp;
        <div class="wrapper">
            <h2 class="text-5xl uppercase mb-8 font-normal mt-15 mb-20">Gestion de projet</h2>
            <section class="grid grid-cols-2 mb-36 gap-4 lg:grid-cols-3 lg:gap-x-96 lg:gap-y-20">

                <?php

                // Check rows exists.
                if( have_rows('service-manage-project') ):

                    // Loop through rows.
                    while( have_rows('service-manage-project') ) : the_row();
                    ?>

                <div class="text-center lg:px-8">

                    <img class="m-auto" src="
                                            <?= get_sub_field('icon'); ?>" />
                    <div class="py-4">
                        <p class="text-2xl font-normal my-4">
                            <?= get_sub_field('text'); ?>
                        </p>

                    </div>
                </div>
                <?php
                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>

            </section>
            <h2 class="text-8xl mb-10 font-normal mt-20">Témoignages</h2>
                <div class="mb-36">

                    <hr class="w-24 mb-20 border-solid border-1 border-black" />

                    <h2 class="text-5xl mb-20 font-normal mt-15 uppercase">Le mot de nos clients</h2>
                    <section class="grid grid-cols-1 gap:4 lg:gap-64 lg:grid-cols-2">
                        <?php

                    // Check rows exists.
                    if( have_rows('service-testimonial') ):

                        // Loop through rows.
                        while( have_rows('service-testimonial') ) : the_row();
                        ?>

                        <div class="grid grid-cols-8">

                            <div class="col-span-1 review-gui">
                                "
                            </div>

                            <div class="col-span-6 text-2xl font-normal py-24">
                            <p> <?= get_sub_field('review'); ?></p>
                            </div>
                            <div class="col-span-1 review-gui flipV">
                            "
                            </div>

                            <div class="col-span-8 text-center text-2xl capitalize font-normal">
                                <span class="font-medium">
                                    <?= get_sub_field('name'); ?>
                                </span>
                                <br>
                                <?= get_sub_field('enterprise'); ?>
                            </div>
                        </div>
                        <?php
                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>


                    </section>
                </div>
        </div>

        <!-- 
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>


                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template('', true); // Remove if you don't want comments?>

                    <br class="clear">

                    <?php edit_post_link(); ?>

                </article>

            <?php endwhile; ?>

            <?php else: ?>

                <article>

                    <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

                </article>

            <?php endif; ?> -->

    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>