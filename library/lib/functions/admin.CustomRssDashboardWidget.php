<?php
/**
 * Function for enable a custom login style.
 * Based on: Bones Theme
 *
 * Now let's talk about adding your own custom Dashboard widget.
 * Sometimes you want to show clients feeds relative to their 
 * site's content. For example, the NBA.com feed for a sports
 * site. Here is an example Dashboard Widget that displays recent
 * entries from an RSS Feed.
 * For more information on creating Dashboard Widgets, view:
 * http://digwp.com/2010/10/customize-wordpress-dashboard/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

// RSS Dashboard Widget 
function ash_rss_dashboard_widget() {
	if(function_exists('fetch_feed')) {
		include_once(ABSPATH . WPINC . '/feed.php');               // include the required file
		$feed = fetch_feed('http://themble.com/feed/rss/');        // specify the source feed
		$limit = $feed->get_item_quantity(7);                      // specify number of items
		$items = $feed->get_items(0, $limit);                      // create an array of items
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';   // fallback message 
	else foreach ($items as $item) : ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_date('j F Y @ g:i a'); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?> 
	</p>
	<?php endforeach; 
}

// calling all custom dashboard widgets
function ash_custom_dashboard_widgets() {
	wp_add_dashboard_widget('ash_rss_dashboard_widget', 'Recently on Themble', 'ash_rss_dashboard_widget');
	/*
	Be sure to drop any other created Dashboard Widgets 
	in this function and they will all load.
	*/
}

// adding any custom widgets
add_action('wp_dashboard_setup', 'ash_custom_dashboard_widgets');

?>