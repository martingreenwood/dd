<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php dd_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>

</article>
