<?php
// Advanced Custom Field Variables
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
?>
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
