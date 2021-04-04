</div>
<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer bg-gray-900	 text-white  pt-24 p-10  font-medium" role="contentinfo">
                <div class="wrapper text-2xl">

                <div class="grid grid-cols-4 gap-4 mb-24">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                    </div>
                    <div>
                        <ul>
                            <li class="mb-3">75 rue Laurent <br> 68100 MULHOUSE</li>
                            <li class="mb-3">mail@frezf</li>
                            <li class="mb-3">Téléphone</li>
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
					Le One &copy; <?php echo date('Y'); ?>.All Rights reserved -
					 <a href="//html5blank.com" title="HTML5 Blank">By BENFRIHA Mohamed</a>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

            </div>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
