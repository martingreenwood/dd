<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<?php dd_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
			<?php 
			/*
			<div class="entry-meta">
				<div class="time">	
					<!-- <i class="far fa-clock"></i> -->
					<?php
					$taxonomy  = 'club';
					$tax_terms = wp_get_post_terms(get_the_ID(), $taxonomy);
					echo $tax_terms[0]->name;
					?>
					<?php
					//$gmt_timestamp = get_post_time('U', true);
					//echo ShowDate($gmt_timestamp);
					?>
				</div>
				<div class="slash">
					&nbsp;
				</div>
				<div class="cat">	
					<?php
					$category = get_the_category(); 
					echo $category[0]->cat_name;
					?>
				</div>
			</div><!-- .entry-meta -->
			*/
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->