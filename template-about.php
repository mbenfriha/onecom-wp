<?php /* Template Name: Modèle page à propos*/ ?>

<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <div class="wrapper">
        <section class="grid grid-rows-2 grid-cols-6 grid-flow-col gap-6 mb-8">
            <?php
            $leftBlockImage = get_field('left-block-image');
            if( $leftBlockImage['image'] ): ?>
            <div class="row-span-2 col-span-4 flex justify-center items-center text-white text-2xl font-extrabold background-image-w-overlay relative"
                style='background-image: url(<?= esc_url( $leftBlockImage['image']['url']) ?>);
                height: 630px;'>
                <div class="absolute bottom-8 left-8">
                    <p class="uppercase"><?= $leftBlockImage['title'] ?></p>
                    <p><?= $leftBlockImage['subtitle'] ?></p>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $rightTopBlockImage = get_field('right-top-block-image');
            if( $rightTopBlockImage['image'] ): ?>
            <div class="row-span-1 col-span-2 flex justify-center items-center text-white text-2xl font-extrabold background-image-w-overlay relative"
                style='background-image: url(<?= esc_url( $rightTopBlockImage['image']['url']) ?>)' ;>
                <div class="absolute bottom-8 left-8">
                    <p class="uppercase"><?= $rightTopBlockImage['title'] ?></p>
                    <p><?= $rightTopBlockImage['subtitle'] ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php
            $rightBotBlockImage = get_field('right-bot-block-image');
            if( $rightBotBlockImage['image'] ): ?>
            <div class="row-span-1 col-span-2 flex justify-center items-center text-white text-2xl font-extrabold background-image-w-overlay relative"
                style='background-image: url(<?= esc_url( $rightBotBlockImage['image']['url']) ?>)' ;>

                <div class="absolute bottom-8 left-8">
                    <p class="uppercase"><?= $rightBotBlockImage['title'] ?></p>
                    <p><?= $rightBotBlockImage['subtitle'] ?></p>
                </div>
            </div>
            <?php endif; ?>
        </section>
        <section class="grid grid-cols-1 mb-36 gap-24 lg:grid-cols-3 px-10">
            <?php

                // Check rows exists.
                if( have_rows('text_group') ):

                    // Loop through rows.
                    while( have_rows('text_group') ) : the_row();
                    ?>
                            <div>
                                <p class="uppercase mb-3 text-2xl font-bold"><?= get_sub_field('title'); ?></p>
                                <p class="font-medium  text-xl"><?= get_sub_field('text'); ?></p>
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

        <h2 class="text-8xl  mb-16 font-normal mt-20">L'équipe</h2>
        <hr class="w-24 mb-20 border-solid border-1 border-black">

        <section class="grid grid-cols-1 mb-36 gap-6 lg:grid-cols-3">
            <?php

                // Check rows exists.
                if( have_rows('team_group') ):

                    // Loop through rows.
                    while( have_rows('team_group') ) : the_row();
                    ?>
                            <div>
                                <div class="bg-black h-610 mb-12 background-image"  style='background-image: url(<?= esc_url( get_sub_field('image')['url']) ?>)'></div>
                                <p class="uppercase text-3xl font-bold mb-4">
                                    <?= get_sub_field('name') ?>
                                </p>
                                <p class="text-2xl font-normal mb-8">
                                    <?= get_sub_field('role') ?>
                                </p>
                                <div class="grid grid-cols-8">
                                    <?php if( get_sub_field('instagram') ): ?>
                                        <div>
                                        <a href="<?= get_sub_field('instagram') ?>">
                                            <img class="w-6" src="<?php echo get_template_directory_uri(); ?>/img/instagramblack.png" alt="instagram <?= get_sub_field('name')?>  <?= get_sub_field('role') ?>">
                                        </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('linkedin') ): ?>
                                        <div>
                                        <a href="<?= get_sub_field('linkedin') ?>">
                                            <img class="w-6" src="<?php echo get_template_directory_uri(); ?>/img/linkedinblack.png" alt="linkedin <?= get_sub_field('name')?>  <?= get_sub_field('role') ?>">
                                        </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('facebook') ): ?>
                                        <div>
                                        <a href="<?= get_sub_field('facebook') ?>">
                                            <img class="w-3" src="<?php echo get_template_directory_uri(); ?>/img/facebookblack.png" alt="facebook <?= get_sub_field('name')?>  <?= get_sub_field('role') ?>">
                                        </a>
                                        </div>
                                    <?php endif; ?>
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
    <section>

        <div class="box-border md:box-content">


            <div class="h-96 place-items-auto bg-black-grey bg-opacity-100 flex items-center justify-center">
                <div class="text-white text-center text-2xl mb-8 font-normal lg:text-4xl">
                    <p class="my-6">
                        Vous souhaitez prendre un café ! Nous rencontrer ?
                    </p>
                    <br>

                    <a class="text-white border-2 inline-block py-6 px-16 font-semibold mr-2 mb-2 border-white text-2xl"
                        href="<?php echo home_url() . '/contact'; ?>">Nous trouver</a>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">

    </div>


    <!-- /section -->
</main>


<?php get_footer(); ?>