<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<?php setlocale('LC_TIME', 'fr'); ?>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/onecomblack.png" rel="apple-touch-icon-precomposed">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E0VJWTT3RR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E0VJWTT3RR');
</script>


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
<?php $header = get_field('header'); ?>
    <!-- wrapper -->
    <!-- header -->
    <?php if ($header['image_header']) {
                    echo '<header class="header-home clear mb-10" role="banner" style="background-image: url('.$header['image_header'].') !important">';
                } else {
                    // if(get_post_type() == 'realisation') {
                    //     var_dump(get_field('id_page'));
                    //     echo '<header class="header-home clear mb-10" role="banner" style="background-image: url('.get_field('header', get_field('id_page'))['image_header'].') !important">';
                    // } else {
                        echo '<header class="header clear  mb-10" role="banner">';
                 //   }
                } ?>
    <div class="wrapper">
<p>
</p>

        <!-- logo -->
        <div class="logo grid grid-cols-7">
            <a class="col-span-6" style="z-index: 100;" href="<?php echo home_url(); ?>">
                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                <img src="<?php echo get_template_directory_uri(); ?><?php echo $header['image_header'] ? '/img/logo.png' : '/img/onecomblack.png' ?>"
                    alt="Logo" class="logo-img">
            </a>
            <div href="" class="col-span-1 text-8xl">
                <div class="navigation-menu">
                    <div class="menu-corner"></div>
                    <input class="navigation-input" id="navigation-input" type="checkbox">
                    <label class="navigation-button <?php echo $header['image_header'] ? '' : 'black-image' ?>" for="navigation-input"></label>
                    <div class="navigation-list w-full <?php echo $header['image_header'] ? '' : 'bg-gray-500' ?> lg:w-6/12">
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu-mobile', 'container_class' => 'menu', 'container_id' => 'menu', 'menu_class' => '' ) ); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- /logo -->

        <!-- nav -->
        <div class="grid grid-cols-7 gap-4 p-3">
            <nav class="nav col-span-3 invisible h-2  lg:h-auto lg:visible" role="navigation">
                <div class="home-nav">
                    <img class="stroke-menu <?php echo $header['image_header'] ? '' : 'black-image' ?>"
                        src="<?php echo get_template_directory_uri(); ?>/img/icons/losange_trace.png" alt="">
                    <a  href="<?php echo is_front_page() ? '#' : home_url() ?>" class="<?php echo is_front_page() ? '' : '' ?> ml-16">Accueil</a>
                </div>
                <?php html5blank_nav(); ?>
            </nav>

            <div class="text-white col-span-6 lg:col-span-3">
            <?php $header = get_field('header'); ?>

                <p class="text-4xl mb-10 font-medium"><?php echo $header['title'] ?> </p>
                <hr class="w-24 mb-20">
                <p class="text-6xl mb-10 font-extrabold lg:text-8xl"><?php echo $header['subtitle'] ?></p>
                <p class="text-4xl font-medium">
                <?php echo $header['text'] ?>
                </p>
            </div>
            <div class="col-span-1 text-white text-8xl text-right  flex">
                <ul class="m-auto mr-0">
                    <li class="mb-10 h-20">
                    <a href="https://www.facebook.com/onecommulhouse">
                    <img
                            src="<?php echo get_template_directory_uri(); ?><?php echo $header['image_header'] ? '/img/facebook.png' : '/img/facebookblack.png' ?>"
                            alt="onecom facebook" class="float-right pr-4">
                            </a>
                            </li>
                    <li class="mb-10 h-20">
                    <a href="https://www.instagram.com/onecommulhouse/">
                    <img
                            src="<?php echo get_template_directory_uri(); ?><?php echo $header['image_header'] ? '/img/instagram.png' : '/img/instagramblack.png' ?>"
                            alt="onecom instagram" class="float-right">
                            </a>
                            </li>
                    <li class="mb-10 h-14">
                    <a href="https://vimeo.com/onecom">
                    <img
                            src="<?php echo get_template_directory_uri(); ?><?php echo $header['image_header'] ? '/img/vimeo.png' : '/img/vimeoblack.png' ?>"
                            alt="onecom vimeo" class="float-right">
                            </a>

                            </li>
                    <li class="mb-10 h-20">
                    <a href="https://www.linkedin.com/company/42411580/admin/">
                    <img
                            src="<?php echo get_template_directory_uri(); ?><?php echo $header['image_header'] ? '/img/linkedin.png' : '/img/linkedinblack.png' ?>"
                            alt="onecom linkedin" class="float-right">
                            <a href=""></a>
                            </li>
                </ul>
            </div>
            <div class="col-span-7 justify-center flex mb-20 mt-10">
                <div>
                    <img <?php echo $header['image_header'] ? '' : 'class="black-image"' ?>  src="<?php echo get_template_directory_uri(); ?>/img/icons/trace_8.png" alt="">
                </div>
            </div>
        </div>

        <!-- /nav -->
    </div>

    </header>