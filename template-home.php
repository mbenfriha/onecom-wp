<?php /* Template Name: Modèle page accueil */ ?>

<?php get_header(); ?>
<!-- /header -->
<div class="wrapper">

    <?php $news = get_field('news'); ?>

    <main role="main" class="py-10 home">
        <h2 class="text-8xl mb-10 font-normal">Actualités</h2>
        <hr class="w-24 mb-20 border-solid border-1 border-black">
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-7">
            <h3 class="lg:text-4xl text-2xl mb-12 uppercase font-normal lg:col-span-6">Restez dans le move !</h3>
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
                <div class="h-96 overflow-hidden bg-yellow-200">
                    <img class="w-full" src="<?= get_the_post_thumbnail( $recent["ID"] )?>
                    </div>
                    </a>
                    <div class=" py-4">
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
<?php    
}?>
</section>
<div class="">

    <h2 class="text-8xl mb-10 mt-16 font-normal">Projets</h2>

    <div class="grid grid-cols-2 gap-4 lg:grid-cols-7">
        <div class="lg:col-span-6">
            <hr class="w-24 mb-20 border-solid border-1 border-black">
        </div>
        <?php $projects = get_field('projects'); ?>
        <a href="<?= $projects['url_see_all'] ?>" class="col-span-1 text-2xl font-normal text-right underline more">Voir
            tous</a>

    </div>
    <!-- /section -->
    <section class="grid lg:grid-rows-4 lg:grid-flow-col grid-flow-row gap-4 mb-16 grid-rows-1">
    <?php
				$args = array(
					'post_type' => 'realisation',
					'numberposts' => 3,
					'orderby' => 'rand',
				);
                $recent_realisations = wp_get_recent_posts( $args );?>

        <a class="background-image-galery lg:row-span-4 lg:col-span-2 rounded-md flex md:h-610 justify-center items-center text-white text-2xl font-extrabold" href="<?= get_permalink($recent_realisations[0]["ID"]) ?>"
            style="background-image: url(<?= get_the_post_thumbnail_url( $recent_realisations[0]["ID"] ) ?>); height: 1110px;">
            </a>
        <a class="background-image-galery lg:row-span-2 lg:col-span-2 h-610 rounded-md flex justify-center items-center text-white text-2xl font-extrabold" href="<?= get_permalink($recent_realisations[1]["ID"]) ?>" 
            style="background-image: url(<?= get_the_post_thumbnail_url( $recent_realisations[1]["ID"] ) ?>);">

            </a>
        <a class="background-image-galery lg:row-span-2 lg:col-span-2 rounded-md h-610 flex justify-center items-center text-white text-2xl font-extrabold" href="<?= get_permalink($recent_realisations[2]["ID"]) ?>"
            style="background-image: url(<?= get_the_post_thumbnail_url( $recent_realisations[2]["ID"] ) ?>);">
            </a>

    </section>

    <h2 class="text-8xl mb-10 font-normal">Prestations</h2>

    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-6">
            <hr class="w-24 mb-20 border-solid border-1 border-black">
        </div>

    </div>
    <!-- section -->
    <section class="grid grid-cols-1 gap-4 mb-16 lg:grid-cols-2">
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