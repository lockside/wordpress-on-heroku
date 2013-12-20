<?php
/*
Template Name: Product Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="product-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="article-inner">

						<div class="product-image-wrapper">
							<?php the_post_thumbnail(); ?>
						</div>

						<div class="product-content">
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</div>

					</div>
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
