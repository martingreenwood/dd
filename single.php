<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

				endwhile; // End of the loop.
				?>

		</main>
	</div>

<?php
get_footer();
