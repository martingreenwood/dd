<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			<div class="row">

				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dd-logo-white.png" width="130" height="44" alt="">
				</div>

				<div class="social">
					<ul>
						<li><a href="https://twitter.com/dugout/" title=""><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/officialdugout/" title=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/officialdugout/" title=""><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/company/dugout-ltd/" title=""><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>

				<div class="footer-nav">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						) );
					?>
				</div>

				<center style="margin-top: 20px;">
					<p>&copy; 2018 Dugout Ltd.</p>
				</center>
				
			</div>
		</div>

	</footer>

</div><!-- #page -->

<div style="display: none;" class="rotate">
	<div class="table">
		<div class="cell middle">
			<i class="fas fa-mobile-alt"></i><br>Please use portrait mode
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
