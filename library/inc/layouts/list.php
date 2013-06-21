<?php
/**
 * The 6 columns grid layout.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data;
//========================================================================================================
// The List Layout function (Default Blog List)
//========================================================================================================
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
		<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid clearfix prettybox'); ?> role="article">
	
			<header class="span4">
				<?php ash_featured_image();?>
			</header>
			<header class="span8">
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php ash_title(60);?></h3></a>

			</header>
	
			<section class="post_content span8">
				<?php ash_excerpt(260);?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-mini pull-left">Read more &rsaquo;</a>
			</section><!-- /section -->

			<footer class="span8">
				<small><p class="meta"><i class="icon-user"></i> <?php _e("by", "ash"); ?> <?php the_author_posts_link(); ?> <i class="icon-tags"></i> <?php the_category(', '); ?> <?php if ($smof_data['post_views'] == '1') { ?> <i class="icon-eye-open"></i> <?php echo getPostViews(get_the_ID()); } ?> <i class="icon-comment-alt"></i> <?php comments_number( '0', '', '%' ); ?></p></small>
			</footer>


		</article><!-- /article -->

	<?php endwhile; endif; ?>