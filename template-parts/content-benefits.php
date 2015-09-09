<?php
// Advanced Custom Field Variables
$who_featured_image			= get_field('who_featured_image');
$who_section_title			= get_field('who_section_title');
$who_section_body			= get_field('who_section_body');
?>
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
