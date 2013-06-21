<?php
/**
 * Widget to display Flickr Images
 *
 * Based on: - SORRY! Lost the original Code - All credits to the original author, NOT Media Tri.be.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


	class ash_Flickr_Widget extends WP_Widget {
	function ash_Flickr_Widget() {
		$widget_ops = array('classname' => 'flickr_stream', 'description' => __('Use this widget to display your latest Flickr images.','ash') );
		$this->WP_Widget('flickr_stream', '&#9883; Flickr Images', $widget_ops);
	}

	function widget($args, $instance) {
		extract($args, EXTR_SKIP);

		$title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
        $user = empty($instance['user']) ? ' ' : apply_filters('widget_user', $instance['user']);
        $counter = empty($instance['counter']) ? ' ' : apply_filters('widget_counter', $instance['counter']);
		echo $before_widget;
		echo $before_title;
        echo $title;
		echo $after_title;
        echo '<div class="flickr_stream"><script src="http://www.flickr.com/badge_code_v2.gne?show_name=1&amp;count='.$counter.'&amp;display=latest&amp;size=s&amp;layout=v&amp;source=user&amp;user='.$user.'" type="text/javascript"></script><br class="clear" /></div>';
        echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['counter'] = strip_tags($new_instance['counter']);
		return $instance;
	}

	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'user' => '', 'counter' => '' ) );
		$title = strip_tags($instance['title']);
        $user = strip_tags($instance['user']);
        $counter = strip_tags($instance['counter']);
?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','ash');?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('user'); ?>"><?php _e('Flickr User ID:','ash');?> <input class="widefat" id="<?php echo $this->get_field_id('user'); ?>" name="<?php echo $this->get_field_name('user'); ?>" type="text" value="<?php echo $instance['user']; ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('counter'); ?>"><?php _e('Number of Images:','ash');?> <input class="widefat" id="<?php echo $this->get_field_id('counter'); ?>" name="<?php echo $this->get_field_name('counter'); ?>" type="text" value="<?php echo $instance['counter']; ?>" /></label></p>
<?php
	}
}
register_widget('ash_Flickr_Widget');

?>