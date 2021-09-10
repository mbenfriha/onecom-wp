<?php get_header(); ?>
<?php 
	 $coverPost = get_field('cover-post');
	?>
<div class="grid grid-cols-1 <?= $coverPost['url'] ? 'h-610' : '' ?>  background-image-galery mb-4" style="background-image:url(<?= $coverPost['url'] ?>)">
</div>

	<main role="main" class="wrapper">
	<div class="grid grid-cols-1 mb-36 text-right text-xl">
	<?= get_field('cover-copyright') ?>
</div>
<div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-60">
	<!-- section -->
	<section class="col-span-3">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="mb-36" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
	
			<!-- /post thumbnail -->

			<!-- post title -->
			<p class="display-inline mb-8 relative">
			<img class="stroke-menu black-image" style="left: -11em;" src="<?php echo get_template_directory_uri(); ?>/img/icons/losange_trace.png" alt="">
					<a class="uppercase font-bold text-4xl mr-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
					<span class="text-xl category-real uppercase font-normal mr-6"> <?=edit_post_link();?></span>

				<span class="text-xl uppercase font-normal mr-6"><?php the_time('F Y'); ?> </span>
				<span class="text-xl category-real uppercase font-normal"><?= the_category(', ') ?></span>
			</p>
			<!-- /post title -->


			<div class="grid-cols-1 mb-10 content font-normal text-xl">
			<?php the_content(); // Dynamic Content ?>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<div>
		<h2 class="uppercase text-4xl text-center font-bold mb-20">
			Articles connexes
		</h2>
	<?php

// The Query
query_posts('orderby=rand&posts_per_page=5&cat='. get_the_category(get_the_ID())[0]->term_id);

// The Loop
while ( have_posts() ) : the_post();
?>
	<!-- // echo
	// 	'<div>
	// 	   <a href="'. get_permalink(get_the_ID()) .'">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</a>
	// 		<span class="text-xl font-bold"> <a href="'. get_permalink(get_the_ID()) .'">' . get_the_title(get_the_ID()). ' </a></span>
	// 		<a class="inline-block rounded-full py-1 font-semibold mr-2 mb-2 underline more">Lire</a>  
	// 	   </div>
	// 	   '; -->
	<div class="h-96 background-image-galery mb-14" style="background-image:url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)">

	</div>
	<p class="text-2xl font-bold mb-8"><?= get_the_title(get_the_ID()) ?></p>
	<a href="<?= get_permalink(get_the_ID()) ?>" class="inline-block rounded-full py-1 font-semibold mr-2 mb-32 underline more">Lire</a>

<?php

endwhile;

// Reset Query
wp_reset_query();
?>
</div>
	</div>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
