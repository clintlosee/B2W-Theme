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

	<?php get_template_part( 'template-parts/content', 'signup' ); ?>

	<!-- FOOTER
	================================ -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
			</div> <!-- end col -->

			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="/">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resources</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Sign up now</a></li>
					</ul> <!-- end list-unstyled -->
				</nav> <!-- end nav -->
			</div> <!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2015 Clint Losee</p>
			</div> <!-- end col -->
		</div> <!-- end container -->
	</footer> <!-- end footer -->

	<!-- MODAL SECTION
	================================ -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe</h4>
				</div> <!-- end modal-header -->

				<div class="modal-body">
					<p>Simply enter your name and e-mail to stay up-to-date on the latest news and information!</p>

					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div> <!-- end form-group -->
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your e-mail</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your e-mail">
						</div> <!-- end form-group -->

						<input type="submit" class="btn btn-danger" value="Subscribe">
					</form>

					<hr>

					<p><small>By providing your e-mail you consent to receiving promotional e-mails &amp; newsletters. <br>No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div> <!-- end modal-body -->
			</div> <!-- end modal-content -->
		</div> <!-- end modal-dialog -->
	</div> <!-- end modal -->

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
