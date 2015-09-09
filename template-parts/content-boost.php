<?php
// Advanced Custom Field Variables
$income_featured_image		= get_field('income_featured_image');
$income_section_title		= get_field('income_section_title');
$income_section_desc		= get_field('income_section_description');
$reason_1_title				= get_field('reason_1_title');
$reason_1_desc				= get_field('reason_1_description');
$reason_2_title				= get_field('reason_2_title');
$reason_2_desc				= get_field('reason_2_description');
?>
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
