<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap To WordPress
 */

get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	<h1 class="page-title">Dang! That page can't be found.</h1>
</section> <!-- end section -->

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">

					<div class="error-404 not-found">
						<div id="page-content">
							<h2><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bootstrap2wordpress' ); ?></h2>

							<?php get_search_form(); ?>

							<!-- RESOURCES
						    ================================ -->
							<h3>Resources</h3>
							<p>Perhaps you were looking for a specific resource?</p>

							<?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

		                    <hr>

		                    <div class="resource-row clearfix">

		                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

		                        <?php
		                            // Custom field variables
		                            $resource_image     = get_field('resource_image');
		                            $resource_url       = get_field('resource_url');
		                            $button_text        = get_field('button_text');
		                        ?>

		                        <div class="resource">
		                            <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">

		                            <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>

		                            <?php the_excerpt(); ?>

		                            <?php if ( !empty($button_text) ) : ?>
		                                <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
		                            <?php endif; ?>
		                        </div> <!-- end resource -->

		                        <?php endwhile; ?>

		                    </div> <!-- end resource-row -->

							<!-- CATEGORIES
						    ================================ -->
							<h4>Categories</h4>
							<p>...or maybe a popular category?</p>

							<div class="widget widget_categories">
								<h4 class="widget-title">Most Used Categories</h4>
								<ul>
									<?php
										wp_list_categories( array (
											'orderby'	=> 'count',
											'order'		=> 'DESC',
											'show_count'=> 1,
											'title_li'	=> '',
											'number'	=> 10
										));
									?>
								</ul>
							</div> <!-- end widget -->

							<!-- ARCHIVES
						    ================================ -->
							<h3>Archives</h3>
							<p>You can always sort through the archives...</p>

							<?php the_widget('WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widgettitle">&after_title=</h4>'); ?>

							<p>...or, just head back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">home page</a>.</p>

						</div> <!-- end page-content -->
					</div> <!-- end error-404 -->

			</main><!-- #main -->

			<!-- SIDEBAR
			================================ -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div> <!-- end primary -->
	</div><!-- container -->

<?php get_footer(); ?>
