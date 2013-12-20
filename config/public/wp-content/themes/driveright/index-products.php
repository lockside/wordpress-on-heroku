<?php
/*
Template Name: Products Index
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php 
			 		global $post;
			 		$items = get_pages( array( 
			 			'sort_column' => 'menu_order, post_title',
			 			'parent' => $post->ID,
			 			'hierarchical' => 0,
			 		) );
				?>

				<nav class="products-index">
					<ul>
						<?php foreach ( $items as $item ) :
							setup_postdata($item);
							$link = get_page_link( $item->ID );
							$images_array = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), array( 240, 240 ) );
							$images_url = $images_array[0];
						?>
							<li>
								<a class="product-index-link" href="<?php echo $link; ?>">
									<div class="product-index-image">
										<img src="<?php echo $images_url; ?>" alt="<?php echo $item->post_title; ?>">
									</div>
									<div class="product-index-details">
										<h2><?php echo $item->post_title; ?></h2>
										<div class="product-index-summary">
											<?php echo get_the_excerpt() ?>
										</div>
									</div>
									<span class="arrow"></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>