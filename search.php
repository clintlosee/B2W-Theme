<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap To WordPress
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</section> <!-- end section -->

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main> <!-- end main content -->

			<!-- SIDEBAR
            ================================ -->
            <aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside> <!-- end aside -->
		</div> <!-- end primary row -->
	</div> <!-- end container -->

<?php get_footer(); ?>
