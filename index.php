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
		<h2 class="text-8xl  mb-10 font-normal mt-20">Projets</h2>

	<div class="grid grid-cols-7 gap-4">
		<div class="col-span-6">
	<hr class="w-24 mb-20 border-solid border-1 border-black">
			</div>

	<a href="" class="col-span-1 text-2xl font-normal text-right underline more">Voir tous</a>
	</div>
		<!-- /section -->
		<section class="grid grid-rows-4 grid-flow-col gap-4">
  <div class="row-span-4 col-span-2  bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold">
	  <img class="w-full h-full" src="https://i.pinimg.com/originals/c5/2f/c9/c52fc99b6fecac8e6bc20a8ccc83a7e1.jpg" alt="">
  </div>
  <div class="row-span-2 col-span-2 bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold">
	  	  <img class="w-full h-full" src="https://www.competencephoto.com/photo/art/grande/31056991-29406133.jpg?v=1553260189" alt="">

  </div>
  <div class="row-span-2 col-span-2 bg-fuchsia-500 rounded-md flex justify-center items-center text-white text-2xl font-extrabold">
	  <img class="w-full h-full" src="https://www.guillenphoto.com/data/blog/2015/011-paysages-10-astuces/images/10-astuces-photo-paysages-amar-guillen-photographe-1.jpg" alt="">
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
					<div class="rounded overflow-hidden">
					<a href="#"> <img class="w-full max-h-96" src="https://www.guillenphoto.com/data/blog/2015/011-paysages-10-astuces/images/10-astuces-photo-paysages-amar-guillen-photographe-1.jpg"></a>
      <div class="py-4">
        <p class="text-4xl font-normal uppercase my-4">
          PHOTOGRAPHIES
        </p>
		<p class="font-normal">
		Sophistiquée, artistique, décalée, donnez un coup de neuf à votre communication interne ou externe !  
		La photo permet de se démarquer de la concurrence, de fidéliser ses clients, de présenter ses produits ou 
		son équipe tout en apportant une touche d’originalité. Son objectif est d'augmenter le taux de visibilité sur 
		les réseaux sociaux, un site internet, un support numérique ou imprimé.		</p>
      </div>
      <div class="text-xl pt-2 pb-2">
        <a href="#" class=" border-2 inline-block py-4 px-8 font-semibold text-gray-700 mr-2 mb-2 border-black">En savoir plus</a>
      </div>
    </div>
	<div class="rounded overflow-hidden">
					<a href="#"> <img class="w-full max-h-96" src="https://www.guillenphoto.com/data/blog/2015/011-paysages-10-astuces/images/10-astuces-photo-paysages-amar-guillen-photographe-1.jpg"></a>
      <div class="py-4">
        <p class="text-4xl font-normal uppercase my-4">
          VIDÉOS
        </p>
		<p class="font-normal">
		Support de communication très prisé par les entreprises, elle permet la présentation d’une marque, 
		d’un produit, d’un savoir-faire et même d’un employé ! Utilisé à la fois en communication interne et 
		externe, cet outil permet d’inspirer vos équipes ou de convaincre vos prospects ! Les objectifs sont 
		riches et variés mais ont vocation à renforcer la culture et l’image d’une marque. Interviews, reportages, 
		vidéo 360°, microfilms, notre offre est sur-mesure.		
	</p>
      </div>
      <div class="text-xl pt-2 pb-2">
        <a href="#" class=" border-2 inline-block py-4 px-8 font-semibold text-gray-700 mr-2 mb-2 border-black">En savoir plus</a>
      </div>
    </div>
		</section>
	</main>
	</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
