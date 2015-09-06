<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap To WordPress
 */

?>

<?php wp_footer(); ?>

	<!-- JAVASCRIPT -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		if (typeof jQuery == 'undefined') {
			document.write(unescape("%3Cscript src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-2.1.4.min.js'"));
		}
	</script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
