<?php
/**
 * The template for displaying the footer.
 *
 * Contains all footer content (widgets, copyright, wp_nav_menu, ... ) and the closing of </body> and </html>.
 * Contains tracking and other codes added to the options panel in the admin section.
 * Contains also the wp_footer() hook for footer enquered scripts and styles.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data ?>

	<?php ash_social_icons(); ?>

<footer role="contentinfo" class="footer">

	<div class="container">

		<div id="inner-footer" class="clearfix">

			<div id="sidebar-footer1" class="fluid-sidebar row-fluid clearfix" role="complementary">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-footer1') ) : ?>
				<?php endif; ?>
			</div>

				<hr>

			<nav class="clearfix">
				<?php ash_footer_links(); // Adjust using Menus in Wordpress Admin ?>
			</nav>

			<small><p class="pull-right"><a href="http://dummyrobot.com" id="DummyRobot" title="By the dudes of DummyRobot">by DummyRobot</a></p></small>

			<p class="attribution">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?> | <em><?php bloginfo('description'); ?></em></p>

		</div> <!-- /inner-footer -->

	</div> <!-- /container -->

</footer> <!-- /footer -->



	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_footer(); // js scripts are inserted using this function ?>

	<?php if ($smof_data['ash_layout'] == 'masonry') {
		include(TEMPLATEPATH . '/library/js/masonry.php');
	} ?>

	<?php if ($smof_data['tracking_code'] ) { echo $smof_data['tracking_code']; } ?>

</body>

</html>