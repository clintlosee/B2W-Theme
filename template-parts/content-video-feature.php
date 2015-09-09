<?php
// Advanced Custom Field Variables
$video_feature_title		= get_field('video_feature_title');
$video_feature_code			= get_field('video_feature_code');
?>
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
