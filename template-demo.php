<?php /* Template Name: Demo Page Template */ ?>

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
<header class="header clear" role="banner">
    <div class="wrapper">


        <!-- logo -->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/onecomblack.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <!-- /logo -->

        <!-- nav -->
        <div class="grid grid-cols-7 gap-4">
            <nav class="nav col-span-3 text-black" role="navigation">
                <div class="home-nav text-white">
                    <div id="carre"></div>
                    <p class="line-through ml-24">Accueil</p>
                </div>
                <?php html5blank_nav(); ?>
            </nav>

            <div class="text-black col-span-3">

                <p class="text-4xl mb-10 font-medium"><?php the_title(); ?></p>
                <hr class="w-24 mb-20">
                <p class="text-8xl mb-10 font-extrabold">
                    <?php the_field('text_header'); ?>
                </p>
            </div>
            <div class="col-span-1 text-black text-8xl text-right">
                <ul>
                    <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/facebookblack.png" alt="onecom facebook" class="float-right pr-4"></li>
                    <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/instagramblack.png" alt="onecom instagram" class="float-right"></li>
                    <li class="mb-10 h-14"><img src="<?php echo get_template_directory_uri(); ?>/img/vimeoblack.png" alt="onecom vimeo" class="float-right"></li>
                    <li class="mb-10 h-20"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedinblack.png" alt="onecom linkedin" class="float-right"></li>
                </ul>
            </div>
        </div>

        <!-- /nav -->

    </div>
</header>
<!-- /header -->
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                    <br class="clear">

                    <?php edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

        </section>
        <!-- /section -->
    </main>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>
