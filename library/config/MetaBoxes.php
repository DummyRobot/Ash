<?php
/**
 * This file show you an improvement of better include meta box in some pages
 * based on post ID, post slug, page template and page parent
 *
 * @author Charlie Rosenbury <charlie@40digits.com>
 */

$prefix = 'ash_';

global $meta_boxes;

$meta_boxes = array();

//====================================================Contact Page Template Google Maps
$meta_boxes[] = array(
	'title'  => 'Contact Info',
	'pages' => array( 'page'),
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Your Email',
			'id'		=> $prefix . 'contact_email',
			'desc'		=> 'Paste the email adress that will receive the messages send by this page.',
			'type'		=> 'text',
			'std'		=> ''
		),
		// Divider
		array(
			'type'		=> 'divider'
		),
		// CHECKBOX
		array(
			'name'		=> 'Display a Google Map?',
			'desc'		=> 'Check this box if you want to display a Google Map',
			'id'		=> "{$prefix}gmap_on",
			'type'		=> 'checkbox',
			'std'		=> 0,
		),
		//Google Map
		 array(
			'id'		=> 'address',
			'name'		=> 'Address',
			'type'		=> 'text',
			'std'		=> 'Porto, Portugal',
		),
		array(
			'id'		=> $prefix .'loc',
			'type'		=> 'map',
			'std'		=> '-25.838942,28.216527',			// 'latitude,longitude[,zoom]' (zoom is optional)
			'style'		=> 'width: 100%; height: 300px',
			'address_field' => 'address',					// Name of text field where address is entered. Can be list of text fields, separated by commas (for ex. city, state)
		),
		),
			'only_on'   => array(
			//'id'      => array( 1, 4649 ),
			//'slug' 	=> array( 'news', 'blog' ),
			'template' 	=> array( 'page-templates/page-contact.php' )
			//'parent'  => array( 10 )
	),
);

//====================================================Other Metaboxes IF they exist

	if(file_exists( ASH_XTRA . 'post-types/post-types-metaboxes.php')) {
		include ASH_XTRA . 'post-types/post-types-metaboxes.php';
	}

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * Register meta boxes
 *
 * @return void
 *////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function ash_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! ash_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}

add_action( 'admin_init', 'ash_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function ash_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
			break;
		}
	}

	// If no condition matched
	return false;
}

// Show Hide Gmaps by Checkbox

function ash_metaboxes_custom_js()  { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('.rwmb-checkbox#ash_gmap_on').click(function() {
		if ( jQuery('.rwmb-checkbox#ash_gmap_on:checked').length > 0) {
			jQuery(".rwmb-input#address").show();
		} else {
			jQuery(".rwmb-input#address").hide();
		}
	});
});
</script>	
<?php }
add_action('admin_print_scripts', 'ash_metaboxes_custom_js');