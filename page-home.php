<?php
/*
    Template Name: Home Page
*/

// Custom Fields
$prelaunch_price		= get_post_meta( 7, 'prelaunch_price', true );
$launch_price			= get_post_meta( 7, 'launch_price', true );
$final_price			= get_post_meta( 7, 'final_price', true );
$course_url				= get_post_meta( 7, 'course_url', true );
$button_text			= get_post_meta( 7, 'button_text', true );
$optin_button_text		= get_post_meta( 7, 'optin_button_text', true );
$optin_text				= get_post_meta( 7, 'optin_text', true );

// Advanced Custom Fields
$income_featured_image		= get_field('income_featured_image');
$income_section_title		= get_field('income_section_title');
$income_section_desc		= get_field('income_section_description');
$reason_1_title				= get_field('reason_1_title');
$reason_1_desc				= get_field('reason_1_description');
$reason_2_title				= get_field('reason_2_title');
$reason_2_desc				= get_field('reason_2_description');

$who_featured_image			= get_field('who_featured_image');
$who_section_title			= get_field('who_section_title');
$who_section_body			= get_field('who_section_body');

$features_section_image		= get_field('features_section_image');
$features_section_title		= get_field('features_section_title');
$features_section_body		= get_field('features_section_body');

$project_feature_title		= get_field('project_feature_title');
$project_feature_body		= get_field('project_feature_body');

$video_feature_title		= get_field('video_feature_title');
$video_feature_code			= get_field('video_feature_code');

$instructor_section_title	= get_field('instructor_section_title');
$instructor_name			= get_field('instructor_name');
$bio_excerpt				= get_field('bio_excerpt');
$full_bio					= get_field('full_bio');
$twitter_username			= get_field('twitter_username');
$facebook_username			= get_field('facebook_username');
$googleplus_username		= get_field('googleplus_username');
$number_circle_one			= get_field('number_circle_one');
$number_circle_two			= get_field('number_circle_two');
$number_circle_three 		= get_field('number_circle_three');

get_header(); ?>

	<!-- HERO
	================================ -->
	<section id="hero" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix">
				<div class="row">
					<div class="col-sm-5">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
					</div> <!-- end col -->

					<div class="col-sm-7">
						<h1><?php bloginfo('name'); ?></h1>
						<p class="lead"><?php bloginfo('description'); ?></p>

						<div id="price-timeline">
							<div class="price active">
								<h4>Pre-Launch Price <small>Ends soon!</small></h4>
								<span><?php echo $prelaunch_price; ?></span>
							</div> <!-- end price -->

							<div class="price">
								<h4>Launch Price <small>Coming soon!</small></h4>
								<span><?php echo $launch_price; ?></span>
							</div> <!-- end price -->

							<div class="price">
								<h4>Final Price <small>Coming soon!</small></h4>
								<span><?php echo $final_price; ?></span>
							</div> <!-- end price -->

							<p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text; ?></a></p>
						</div>
					</div> <!-- end col -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</article>
	</section> <!-- end hero -->

	<!-- OPT IN SECTION
	================================ -->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?php echo $optin_text; ?></p>
				</div> <!-- end col -->

				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end optin -->

	<!-- BOOST YOUR INCOME
	================================ -->
	<section id="boost-income">
		<div class="container">
			<div class="section-header">

				<?php if( !empty($income_featured_image) ) : ?>
					<img src="<?php echo $income_featured_image['url']; ?>" alt="<?php echo $income_featured_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $income_section_title; ?></h2>
			</div> <!-- end section-header -->

			<p class="lead"><?php echo $income_section_desc; ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_1_title; ?></h3>
					<p><?php echo $reason_1_desc; ?></p>
				</div> <!-- end col -->
				<div class="col-sm-6">
					<h3><?php echo $reason_2_title; ?></h3>
					<p><?php echo $reason_1_desc; ?></p>
				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>

	<!-- WHO BENEFITS
	================================ -->
	<section id="who-benefits">
		<div class="container">
			<div class="section-header">

				<?php if( !empty($who_featured_image) ) : ?>
					<img src="<?php echo $who_featured_image['url']; ?>" alt="<?php echo $who_featured_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $who_section_title; ?></h2>
			</div> <!-- end section-header -->

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $who_section_body; ?>
				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end who-benefits -->

	<!-- COURSE FEATURES
	================================ -->
	<section id="course-features">
		<div class="container">
			<div class="section-header">

				<?php if( !empty($features_section_image) ) : ?>
					<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $features_section_title; ?></h2>

				<?php if( !empty($features_section_body) ) : ?>
					<p class="lead"><?php echo $features_section_body; ?></p>
				<?php endif; ?>
			</div> <!-- end section-header -->

			<div class="row">
				<?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-sm-2">
						<i class="<?php the_field('course_feature_icon'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div> <!-- end col -->
				<?php endwhile; ?>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>

	<!-- PROJECT FEATURES
	================================ -->
	<section id="project-features">
		<div class="container">
			<h2><?php echo $project_feature_title; ?></h2>
			<p class="lead"><?php echo $project_feature_body; ?></p>

			<div class="row">
				<?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-sm-4">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div> <!-- end col -->
				<?php endwhile; ?>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>

	<!-- VIDEO FEATURETTE
	================================ -->
	<section id="video-feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_feature_title; ?></h2>
					<iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo $video_feature_code; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>

	<!-- INSTRUCTOR
	================================ -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div> <!-- end col -->
						<div class="col-lg-4">

							<?php if( !empty($twitter_username) ) : ?>
							<a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>

							<?php if( !empty($facebook_username) ) : ?>
							<a href="https://facebook.com<?php echo $facebook_username ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>

							<?php if( !empty($googleplus_username) ) : ?>
							<a href="https://google.com/<?php echo $googleplus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>

						</div> <!-- end col -->
					</div> <!-- end row -->

					<p class="lead"><?php echo $bio_excerpt; ?></p>

					<?php echo $full_bio; ?>

					<hr>

					<h3>The Numbers <small>They Don't Lie</small></h3>

					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $number_circle_one ?> <span>students</span>
								</div> <!-- end num-content -->
							</div> <!-- end num -->
						</div> <!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $number_circle_two ?> <span>reviews</span>
								</div> <!-- end num-content -->
							</div> <!-- end num -->
						</div> <!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $number_circle_three ?> <span>courses</span>
								</div> <!-- end num-content -->
							</div> <!-- end num -->
						</div> <!-- end col -->
					</div> <!-- end row -->

				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end instructor -->

	<!-- TESTIMONIALS
	================================ -->
	<section id="kudos">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<h2>What People Are Saying About Clint</h2>

					<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- TESTIMONIAL -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail(200, 200);
									}
								?>
							</div> <!-- end col -->
							<div class="col-sm-8">
								<blockquote>
									<?php the_content(); ?>
									<cite>&mdash; <?php the_title(); ?></cite>
								</blockquote> <!-- end blockquote -->
							</div> <!-- end col -->
						</div> <!-- end row testimonial -->

					<?php endwhile; ?>

				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end kudos -->

<?php get_footer(); ?>
