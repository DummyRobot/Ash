<?php
/**
 * Class for showing Related Posts by category or Tags
 *
 * Just add a <?php include TEMPLATEPATH . 'foo.php';?>  of this file to call the Related Posts
 *
 * Based on: http://www.wpbeginner.com/wp-themes/how-to-add-related-posts-with-a-thumbnail-without-using-plugins/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


function ash_related_posts() {
	global $smof_data;
	
		$posts_number = $smof_data['related_posts_number'];
	
	 	$orig_post = $post;
			global $post;
		$tags = wp_get_post_tags($post->ID);
			if ($tags) {
		$tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		
		$args=array(
	    	'tag__in' => $tag_ids,
	    	'post__not_in' => array($post->ID),
	    	'posts_per_page'=> 3, // Number of related posts that will be shown.
			//'posts_per_page'=> echo $smof_data['related_posts_number'],
			'posts_per_page'=> $posts_number,
	    	'caller_get_posts'=>1
	   	);
	   		
	    $my_query = new wp_query( $args );
	    
	    	if( $my_query->have_posts() ) {
			
				echo '<hr><h3 class="related-posts">You may also like:</h3><div class="thumbnails related-posts">';
			
				while( $my_query->have_posts() ) {
		
				$my_query->the_post();?>
	
				<div class="span4 clearfix">
					
					<div class="thumbnail clearfix">
						<a href="<?php the_permalink()?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
					
						<div class="caption" class="pull-left">
							<h4><a href="<?php the_permalink()?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b></h4>
							<small><?php ash_excerpt(50); ?></small>
							<a href="<?php the_permalink()?>" class="btn btn-primary icon  pull-right">View</a>
						</div>
					</div>
				
				</div>
			
			
			<?php	}
			 echo '</div>';
			}
		}
		$post = $orig_post;
	
	wp_reset_query();

} //end ash_related_posts