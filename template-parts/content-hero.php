<?php
// Custom Field Variables
$prelaunch_price		= get_post_meta( 7, 'prelaunch_price', true );
$launch_price			= get_post_meta( 7, 'launch_price', true );
$final_price			= get_post_meta( 7, 'final_price', true );
$course_url				= get_post_meta( 7, 'course_url', true );
$button_text			= get_post_meta( 7, 'button_text', true );
?>

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

                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </article>
</section> <!-- end hero -->