<?php get_header(); ?>

	<main role="main" class="py-10 home">
	<h2 class="text-8xl mb-10 font-normal mt-20">Actualités</h2>
	<hr class="w-24 mb-20 border-solid border-1 border-black">
	<div class="grid grid-cols-7 gap-4">
	<h3 class="text-4xl mb-12 uppercase font-normal col-span-6">Restez dans le move !</h3>
	<a href="" class="col-span-1 text-2xl font-normal text-right underline more">Voir tous</a>
	</div>
		<!-- section -->
		<section class="grid grid-cols-1 gap-4 lg:grid-cols-3">
		 <?php
				$args = array(
					'post_type' => 'post',
					'numberposts' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => 8,
							'operator' => 'IN'
						)
				) );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ) {
                    echo '
					<div class="rounded overflow-hidden">
					<a href='.get_permalink($recent["ID"]).'> <img class="w-full max-h-96" src="'. get_the_post_thumbnail( $recent["ID"] ).'</a>
      <div class="py-4">
        <div class="font-bold text-lg mb-2">'. get_the_category_list($recent['ID'] ) .' 20/20/20</div>
        <p class="text-2xl font-bold  uppercase">
          '.$recent["post_title"].'
        </p>
      </div>
      <div class="text-xl pt-2 pb-2">
        <a href="'.get_permalink($recent["ID"]).'" class="inline-block rounded-full py-1 font-semibold text-gray-700 mr-2 mb-2 underline more">Lire</a>
      </div>
    </div>';
                }
                ?> 
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
