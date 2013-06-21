<?php 


function ash_masonry_featured_image() { ?>

	<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } else { echo '<img src="' . get_template_directory_uri() . '/library/images/dummy/460x350.jpg" class="attachment-post-thumbnail wp-post-image"/>';} ?></a>

<?php }


function ash_featured_image( $size = 'post-thumbnail', $attr = '' ) {?>
        <a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail($size); } else { echo '<img src="' . get_template_directory_uri() . '/library/images/dummy/460x350.jpg" class="attachment-post-thumbnail wp-post-image"/>';} ?></a>
<?php }