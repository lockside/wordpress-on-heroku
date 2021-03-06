<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="homepage-top">
			<?php wp_nav_menu( array( 
				'theme_location' => 'homepage-secondary', 
				'menu_class'     => 'homepage-secondary-menu',
			) ); ?>

			<?php global $post ?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="homepage-image" style="background-image: url(<?php echo $url ?>);">
			</div>
		</div>

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
