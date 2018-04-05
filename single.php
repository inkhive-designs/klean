<?php
/**
 * The template for displaying all single posts.
 *
 * @package klean
 */

get_header(); ?>

	<div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php 
				if ( has_post_format( 'gallery' ) ) {
					get_template_part( 'modules/content/content','gallery' );
				}
				else {
				
				get_template_part( 'modules/content/content', 'single' );
				
				}
			
			?>

			<?php klean_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
