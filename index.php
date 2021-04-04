<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->


			<!-- header -->
			<header class="header-home clear" role="banner">
                <div class="wrapper">


                <!-- logo -->
					<div class="logo grid grid-cols-7">
						<a class="col-span-6" href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
                        <div href="" class="col-span-1 text-8xl">
                            <div class="navigation-menu">
                            <div class="menu-corner"></div>
                            <input class="navigation-input" id="navigation-input" type="checkbox">
                            <label class="navigation-button" for="navigation-input"></label>
                            <div class="navigation-list w-full lg:w-6/12"> 
                            <?php html5blank_nav(); ?>
                            </div>
                        </div>
   
                        </div>
					</div>
					<!-- /logo -->

					<!-- nav -->
                    <div class="grid grid-cols-7 gap-4 p-3">
                        <nav class="nav col-span-3 invisible h-2  lg:h-auto lg:visible" role="navigation">
                            <div class="home-nav">
                                <img class="stroke-menu" src="<?php echo get_template_directory_uri(); ?>/img/icons/losange_trace.png" alt="">
                                <p class="line-through ml-16 text-white">Accueil</p>
                            </div>
                            <?php html5blank_nav(); ?>
                        </nav>

                        <div class="text-white col-span-6 lg:col-span-3">

                            <p class="text-4xl mb-10 font-medium">Communication corporate</p>
                            <hr class="w-24 mb-20">
                            <p class="text-8xl mb-10 font-extrabold">Marquez le monde <br> de votre empreinte</p>
                            <p class="text-4xl font-medium">Nous développons une véritable expertise <br>
                            dans la communication audiovisuelle <br>
                            des entreprises, des institutions, <br>
                            des PME et des start-ups.</p>
                        </div>
                        <div class="col-span-1 text-white text-8xl text-right  flex">
                            <ul class="m-auto">
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="onecom facebook" class="float-right pr-4"></li>
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="onecom instagram" class="float-right"></li>
                                <li class="mb-10 h-14"><img src="<?php echo get_template_directory_uri(); ?>/img/vimeo.png" alt="onecom vimeo" class="float-right"></li>
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="onecom linkedin" class="float-right"></li>
                            </ul>
                        </div>
                        <div class="col-span-7 justify-center flex mb-20 mt-10">
                            <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/trace_8.png" alt="">
                        </div>
                        </div>
                    </div>

					<!-- /nav -->
                </div>
               
			</header>
			<!-- /header -->
        <div class="wrapper">


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
				);
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
