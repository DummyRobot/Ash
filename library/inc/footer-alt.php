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

	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_footer(); // js scripts are inserted using this function ?>

	<?php if ($smof_data['ash_layout'] == 'masonry') {
		ash_masonry_scripts(); // masonry scripts are inserted using this function if masonry layout is selected in admin options
	} ?>

	<?php if ($smof_data['tracking_code'] ) { echo $smof_data['tracking_code']; } ?>

</body>

</html>