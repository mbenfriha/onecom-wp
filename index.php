<?php /* Template Name: Modèle page accueil */ ?>

<?php get_header(); ?>

<!-- /header -->
<div class="wrapper">

    <?php $news = get_field('news'); ?>

    <main role="main" class="py-10 home">
        <h2 class="text-8xl mb-10 font-normal mt-20">Actualités</h2>
        <hr class="w-24 mb-20 border-solid border-1 border-black">
        <div class="grid grid-cols-7 gap-4">
            <h3 class="text-4xl mb-12 uppercase font-normal col-span-6">Restez dans le move !</h3>
            <a href="<?= $news['url_see_all'] ?>" class="col-span-1 text-2xl font-normal text-right underline more">Voir
                tous</a>
        </div>
        <!-- section -->
        <section class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <?php
				$args = array(
					'post_type' => 'post',
					'numberposts' => $news['nbr_of_posts'],
				);
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ) { ?>

            <div class="">
                <a href="<?= get_permalink($recent["ID"]) ?> ">
                    <img class="w-full max-h-96" src="<?= get_the_post_thumbnail( $recent["ID"] )?>
                    </a>
                    <div class="py-4">
                    <div class="font-bold text-lg mb-2"><?= get_the_category_list($recent['ID'] ) ?>
                        <?= the_time('F Y') ?></div>
                    <p class="text-2xl font-bold  uppercase">
                        <?= $recent["post_title"]?>
                    </p>
            </div>
            <div class="text-xl pt-2 pb-2">
                <a href="<?= get_permalink($recent["ID"])?>"
                    class="inline-block rounded-full py-1 font-semibold text-gray-700 mr-2 mb-2 underline more">Lire</a>
            </div>
</div>
<?php    }
                ?>
</section>
<h2 class="text-8xl  mb-10 font-normal mt-20">Projets</h2>

<div class="grid grid-cols-7 gap-4">
    <div class="col-span-6">
        <hr class="w-24 mb-20 border-solid border-1 border-black">
    </div>
    <?php $projects = get_field('projects'); ?>
    <a href="<?= $projects['url_see_all'] ?>" class="col-span-1 text-2xl font-normal text-right underline more">Voir
        tous</a>

</div>
<!-- /section -->
<section class="grid grid-rows-4 grid-flow-col gap-4">
    <div
        class="background-image-galery row-span-4 col-span-2  bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold"
        style="background-image: url(<?= $projects['image_left']['url'] ?>); height: 1100px;">
    </div>
    <div
        class="background-image-galery  row-span-2 col-span-2 bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold" style="background-image: url(<?= $projects['image_right_top']['url'] ?>);">

    </div>
    <div
        class="background-image-galery  row-span-2 col-span-2 bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold"  style="background-image: url(<?= $projects['image_right_bot']['url'] ?>);">
    </div>
</section>

<h2 class="text-8xl  mb-10 font-normal mt-20">Prestations</h2>

<div class="grid grid-cols-7 gap-4">
    <div class="col-span-6">
        <hr class="w-24 mb-20 border-solid border-1 border-black">
    </div>

</div>
<!-- section -->
<section class="grid grid-cols-1 gap-4 lg:grid-cols-2">
    <?php

// Check rows exists.
if( have_rows('prestations') ):

    // Loop through rows.
    while( have_rows('prestations') ) : the_row();
    ?>

    <div class="rounded overflow-hidden">

        <div class="background-image-galery font-extrabold"
            style="background-image: url(<?= get_sub_field('image')['url']; ?>); height: 34rem;">

        </div>
        <div class="py-4">
            <p class="text-4xl font-normal uppercase my-4">
                <?= get_sub_field('title'); ?>
            </p>
            <p class="font-normal">
                <?= get_sub_field('text'); ?></p>
        </div>
        <div class="text-xl pt-2 pb-2">
            <a href="<?= get_sub_field('url'); ?>" class=" border-2 inline-block py-4 px-8 font-semibold text-gray-700 mr-2 mb-2
                            border-black">En
                savoir plus</a>
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
</main>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>