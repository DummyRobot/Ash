<?php
/**
 * The Custom Script used to display the Masonry Layout.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data ?>

<script type="text/javascript">

		jQuery('#masonry').imagesLoaded(function() {
		// Prepare layout options.
		var options = {
		//itemWidth: 200, // Optional min width of a grid item
		autoResize: true, // This will auto-update the layout when the browser window is resized.
		container: jQuery('#masonry'), // Optional, used for some extra CSS styling
		offset: 20, // Optional, the distance between grid items
		//flexibleWidth: 400 // Optional, the maximum width of a grid item
	};

		// Get a reference to your grid items.
		//var handler = jQuery('#masonry .span4'); //Original
	<?php if ($smof_data['masonry_columns'] == 2) {
		echo "var handler = jQuery('#masonry .span6');"; }
	elseif ($smof_data['masonry_columns'] == 3) {
		echo "var handler = jQuery('#masonry .span4');"; } 
	elseif ($smof_data['masonry_columns'] == 4) {
		echo "var handler = jQuery('#masonry .span3');"; }
	elseif ($smof_data['masonry_columns'] == 5) {
		echo "var handler = jQuery('#masonry .span2');"; }
	elseif ($smof_data['masonry_columns'] == 6) {
		echo "var handler = jQuery('#masonry .span2');";
	}?>

		// Call the layout function.
		handler.wookmark(options);
		});

</script>