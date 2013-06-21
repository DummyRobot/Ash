<?php
/**
 * Author Box for Posts & Pages
 *
 * Based on: ash
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
?>
 
	<div class="row author-box">

		<div class="span2"></div>

			<div class="span8"><hr>

				<div class="span3">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'ash_author_bio_avatar_size', 100 ) ); ?>
				</div>
			
				<h4>
					<?php printf( __( 'About %s', 'ash' ), get_the_author() ); ?> - 
				
					<?php if(get_the_author_meta('facebook') ) {?>
  					<a class="tip" href="<?php echo get_the_author_meta('facebook'); ?>" title="Facebook" target="_blank"><i class="icon-facebook"></i></a>
					<?php } ?> 
				
					<?php if(get_the_author_meta('twitter') ) {?>
  					<a class="tip" href="<?php echo get_the_author_meta('twitter'); ?>" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
					<?php } ?>
				
					<?php if(get_the_author_meta('googleplus') ) {?>
  					<a class="tip" href="<?php echo get_the_author_meta('googleplus'); ?>" title="Google +" target="_blank"><i class="icon-google-plus"></i></a>
					<?php } ?>
				</h4>

				<?php //the_author_meta( 'description' ); ?>
				<p><?php the_author_meta( 'description' ); ?></p>
				
				<div id="author-link">
					<b class="pull-right">More about <?php the_author_posts_link(); ?></b>					
				</div><!-- #author-link	-->

			

			</div><!--/span8-->

		<div class="span2"></div>	

	</div><!-- #author-info -->