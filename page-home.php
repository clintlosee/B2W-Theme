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
								<span><?php echo $prelaunch_price ?></span>
							</div> <!-- end price -->

							<div class="price">
								<h4>Launch Price <small>Coming soon!</small></h4>
								<span><?php echo $launch_price ?></span>
							</div> <!-- end price -->

							<div class="price">
								<h4>Final Price <small>Coming soon!</small></h4>
								<span><?php echo $final_price ?></span>
							</div> <!-- end price -->

							<p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?></a></p>
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
					<p class="lead"><?php echo $optin_text ?></p>
				</div> <!-- end col -->

				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text ?></button>
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

				<h2><?php echo $income_section_title ?></h2>
			</div> <!-- end section-header -->

			<p class="lead"><?php echo $income_section_desc ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_1_title ?></h3>
					<p><?php echo $reason_1_desc ?></p>
				</div> <!-- end col -->
				<div class="col-sm-6">
					<h3><?php echo $reason_2_title ?></h3>
					<p><?php echo $reason_1_desc ?></p>
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
					<?php echo $who_section_body ?>
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

				<h2><?php echo $features_section_title ?></h2>

				<?php if( !empty($features_section_body) ) : ?>
					<p class="lead"><?php echo $features_section_body ?></p>
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
			<h2><?php echo $project_feature_title ?></h2>
			<p class="lead"><?php echo $project_feature_body ?></p>

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
					<h2>Watch the Course Introduction</h2>
					<iframe width="100%" height="415" src="https://www.youtube.com/embed/UfVB9u0-Dvs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
							<h2>Your Instructor <small>Clint Losee</small></h2>
						</div> <!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://facebook.com" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://googleplus.com" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
						</div> <!-- end col -->
					</div> <!-- end row -->

					<p class="lead">A highly skilled professional, Clint Losee is a passionate and experienced web developer, blogger and digital entrepreneur.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

					<hr>

					<h3>The Numbers <small>They Don't Lie</small></h3>

					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									41,000+ <span>students</span>
								</div> <!-- end num-content -->
							</div> <!-- end num -->
						</div> <!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									560 <span>reviews</span>
								</div> <!-- end num-content -->
							</div> <!-- end num -->
						</div> <!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									4 <span>courses</span>
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

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
						</div> <!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
								<cite>&mdash; Brennan, graduate of this course</cite>
							</blockquote> <!-- end blockquote -->
						</div> <!-- end col -->
					</div> <!-- end row testimonial -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
						</div> <!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Banjo tattooed sriracha polaroid, Banksy Marfa Neutra iPhone cray. Pug leggings sartorial, iPhone narwhal Pinterest Godard. Cardigan aesthetic next level typewriter pork belly Williamsburg American Apparel, YOLO chia pug. Ethical occupy keytar, leggings put a bird on it church-key before they sold out letterpress Thundercats ennui heirloom trust fund Truffaut. Narwhal leggings pork belly authentic viral. Quinoa Marfa fanny pack vegan cred. Organic gluten-free photo booth, single-origin coffee seitan Thundercats farm-to-table twee Portland fingerstache XOXO beard Intelligentsia flexitarian locavore.
								<cite>&mdash; Ben, graduate of this other course</cite>
							</blockquote> <!-- end blockquote -->
						</div> <!-- end col -->
					</div> <!-- end row testimonial -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
						</div> <!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Food truck organic vegan aesthetic, pour-over 8-bit hashtag jean shorts McSweeney's. 90's Echo Park slow-carb polaroid, McSweeney's normcore church-key heirloom tattooed food truck chambray aesthetic single-origin coffee Etsy yr. Tousled American Apparel meditation chia Odd Future, put a bird on it banjo gentrify Portland swag. Shoreditch asymmetrical Neutra, lumbersexual gentrify scenester health goth Kickstarter swag bitters disrupt next level. Cronut selvage retro 90's. Banjo slow-carb Pitchfork, vegan mixtape ugh lumbersexual migas disrupt cred. Actually Vice authentic, ugh Neutra kitsch Etsy.
								<cite>&mdash; AJ, graduate of this course</cite>
							</blockquote> <!-- end blockquote -->
						</div> <!-- end col -->
					</div> <!-- end row testimonial -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a beard in a suit">
						</div> <!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Taxidermy cornhole banh mi twee messenger bag forage. Chambray cliche literally ugh, seitan butcher tousled paleo photo booth American Apparel. Blog fixie stumptown, tousled Neutra gluten-free American Apparel listicle occupy irony tilde fap retro Williamsburg kale chips. High Life swag street art, flannel pug yr Wes Anderson. Odd Future wayfarers bespoke, asymmetrical Banksy selvage raw denim pug twee.
								<cite>&mdash; Ernest, graduate of another course</cite>
							</blockquote> <!-- end blockquote -->
						</div> <!-- end col -->
					</div> <!-- end row testimonial -->

				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end kudos -->

<?php get_footer(); ?>
