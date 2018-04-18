 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

	<?php if (get_field( 'video_url' )): ?>
	<div id="feature_video" class="videoWrapper">
		<iframe src="<?php the_field( 'video_url' ); ?>" frameborder="0" allowfullscreen scrolling="no"></iframe>
	</div>
	<?php else: ?>
		<?php dd_post_thumbnail(); ?>
	<?php endif; ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<div class="entry-meta">
			<?php 
			/*
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
			*/ 
			?>
			<div class="sharethis-inline-share-buttons"></div>
		</div><!-- .entry-meta -->
	</header>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dd' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		?>
		<div class="entry-meta">
			<?php
			/*
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
			*/ 
			?>
			<div class="sharethis-inline-share-buttons"></div>
		</div><!-- .entry-meta -->
	</div>

	<div class="sidebar">
		<?php echo get_sidebar( ); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
