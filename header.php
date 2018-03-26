<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dd
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class($pagename); ?>>

<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<div class="dugout-main-menu">
					
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
						<div class="social">
							<ul>
								<li><a href="https://twitter.com/dugout/" title=""><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/officialdugout/" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.instagram.com/officialdugout/" title=""><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/dugout-ltd/" title=""><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
				</nav>
			
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
