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
                        <div href="" class="col-span-1 text-8xl lg:invisible">
                            <div class="navigation-menu">
                            <div class="menu-corner"></div>
                            <input class="navigation-input" id="navigation-input" type="checkbox">
                            <label class="navigation-button" for="navigation-input"></label>
                            <div class="navigation-list"> 
                            <?php html5blank_nav(); ?>
                            </div>
                        </div>
   
                        </div>
					</div>
					<!-- /logo -->

					<!-- nav -->
                    <div class="grid grid-cols-7 gap-4">
                        <nav class="nav col-span-3 invisible lg:visible" role="navigation">
                            <div class="home-nav">
                                <div id="carre"></div>
                                <p class="line-through ml-24">Accueil</p>
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
                        <div class="col-span-1 text-white text-8xl text-right">
                            <ul>
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="onecom facebook" class="float-right pr-4"></li>
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="onecom instagram" class="float-right"></li>
                                <li class="mb-10 h-14"><img src="<?php echo get_template_directory_uri(); ?>/img/vimeo.png" alt="onecom vimeo" class="float-right"></li>
                                <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="onecom linkedin" class="float-right"></li>
                            </ul>
                        </div>
                    </div>

					<!-- /nav -->

                </div>
			</header>
			<!-- /header -->
        <div class="wrapper">
