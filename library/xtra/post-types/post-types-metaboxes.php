<?php
// ================================================================================BOOKS
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'books',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Personal Information',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'books' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Affiliate link',
			'id'		=> $prefix . 'affiliate_link',
			'desc'		=> 'Amazon ... Affiliate link',
			'type'		=> 'text',
			'std'		=> ''
		),
		// TEXT
		array(
			'name'		=> 'Book Name',
			'id'		=> $prefix . 'book_name',
			'desc'		=> 'The Book Name',
			'type'		=> 'text',
			'std'		=> ''
		),
		// TEXT
		array(
			'name'		=> 'Book Year',
			'id'		=> $prefix . 'book_year',
			'desc'		=> 'The Book Year',
			'type'		=> 'text',
			'std'		=> ''
		),
		// TEXT
		array(
			'name'		=> 'Author Name',
			'id'		=> $prefix . 'author_name',
			'desc'		=> 'Author Name',
			'type'		=> 'text',
			'std'		=> ''
		),
		// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
		array(
			'name'		=> '',
			'desc'		=> 'Book Cover',
			'id'		=> "{$prefix}book_cover",
			'type'		=> 'plupload_image',
			'max_file_uploads' => 200,
		),
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' 		=> '',
			'id'   		=> "{$prefix}book_review",
			'type' 		=> 'wysiwyg',
			'std'  		=> "",
			'desc' 		=> '',
			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' 	=> array(
				'textarea_rows' => 8,
				'teeny'         => false, // minimal format buttons
				'media_buttons' => true,
			),
		)
	)
);

// ================================================================================GURUS
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'gurus',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Personal Information',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'gurus' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Affiliate link',
			'id'		=> $prefix . 'guru_affiliate_link',
			'desc'		=> 'Amazon ... Affiliate link',
			'type'		=> 'text',
			'std'		=> ''
		),
		// TEXT
		array(
			'name'		=> 'Guru Name',
			'id'		=> $prefix . 'guru_name',
			'desc'		=> 'Guru Name',
			'type'		=> 'text',
			'std'		=> ''
		),
		// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
		array(
			'name'		=> '',
			'desc'		=> 'Guru Photo',
			'id'		=> "{$prefix}guru_photo",
			'type'		=> 'plupload_image',
			'max_file_uploads' => 200,
		),
	)
);

// ================================================================================Videos
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'video_info',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => __('Video Info','ash'),

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'videos' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Duration',
			'id'		=> $prefix . 'video_duration',
			'desc'		=> 'Duration in minutes',
			'type'		=> 'text',
			'std'		=> ''
		),
	)
);

?>