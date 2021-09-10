<?php /* Template Name: Modèle page Actualité */ ?>

<?php get_header(); ?>

<main role="main" class="wrapper">
    <!-- section -->

    <section class="grid grid-cols-1 gap-x-4 gap-y-12 py-4 lg:grid-cols-3">
        <?php
		 $new_query = new WP_Query(
			[
				'post_type'         => 'post',
				'posts_per_page'    => -1
			]
			);
		if ($new_query->have_posts()) {
			$i = 0;
			while ($new_query->have_posts()) {
				$new_query->the_post();
				$postid = get_the_ID();
				?>
        <div>

		<a href="<?= get_permalink($recent["ID"])?>">
            <div class="background-image-galery relative text-white text-2xl font-extrabold"
                style="background-image: url(<?= get_the_post_thumbnail_url( $postid) ?>); height: 410px;">

            </div>
			</a>

            <p class="mt-5 mb-5 uppercase"> <span
                    class="category-real font-normal mr-4"><?= the_category(', '); ?></span>
                <span><?= the_time('F Y') ?></span>
            </p>
            <p class="uppercase text-2xl font-bold mb-4"> <?= the_title() ?></p>
            <p class="mb-4"><?= html5wp_excerpt('html5wp_index'); ?></p>
            <div class="text-xl pt-2 pb-2">
                <a href="<?= get_permalink($recent["ID"])?>"
                    class="inline-block rounded-full py-1 font-semibold mr-2 mb-2 underline more">Lire</a>
            </div>
        </div>
        <?php
			}
		}?>
    </section>
</main>

<?php get_footer(); ?>