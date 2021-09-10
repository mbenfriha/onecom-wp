</div>
<!-- /wrapper -->

<!-- footer -->
<footer class="footer bg-gray-900	 text-white  pt-24 p-10  font-medium" role="contentinfo">
<div class="absolute right-14 rotate-180">
                    <img class="-rotate-180 transform" onclick='window.scrollTo({ top: 0, behavior: "smooth" })' src="<?php echo get_template_directory_uri(); ?>/img/icons/trace_8.png" alt="">
                </div>
    <div class="wrapper text-2xl">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 mb-24  lg:place-items-center">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
            </div>
            <div>
                <ul>
                    <li class="mb-3">75 rue Laurent <br> 68100 MULHOUSE</li>
                    <li class="mb-3">contact@one-communication.com</li>
                    <li class="mb-3">07 60 80 88 32</li>
                </ul>
            </div>
            <div>
                <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'menu', 'container_id' => 'menu', 'menu_class' => '' ) ); ?>
            </div>
            <div>
                <?php wp_nav_menu( array( 'theme_location' => 'extra-menu-right', 'container_class' => 'menu', 'container_id' => 'menu', 'menu_class' => '' ) ); ?>

            </div>
        </div>
        <hr class="mb-8">
    <!-- copyright -->
    <p class="copyright">
        ONE COM &copy; <?php echo date('Y'); ?>.All Rights reserved -
        <a href="mohamedbenfriha.me" title="HTML5 Blank">By BENFRIHA Mohamed</a>
    </p>
    <!-- /copyright -->
    </div>


</footer>
<!-- /footer -->



<?php wp_footer(); ?>

</body>

</html>