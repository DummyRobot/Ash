<?php
/**
 * The 6 columns grid layout.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data;?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
	<?php if ($smof_data['grid_columns'] == '6' ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('span2 prettybox grid'); ?> role="article">
	<?php } elseif ($smof_data['grid_columns'] == '5' ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('span2 prettybox grid'); ?> role="article">
	<?php } elseif ($smof_data['grid_columns'] == '4' ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('span3 prettybox grid'); ?> role="article">
	<?php } elseif ($smof_data['grid_columns'] == '3' ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('span4 prettybox grid'); ?> role="article">
	<?php } elseif ($smof_data['grid_columns'] == '2') { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('span6 prettybox grid'); ?> role="article">
	<?php } else {//if ($smof_data['archives_grid_columns'] = 1 ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('row prettybox grid'); ?> role="article">
	<?php } ?>


		<header class="text-center">
			<?php ash_featured_image();?>
		</header>
		<header>
			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php ash_title(60);?></h3></a>
		</header>
		<section>
			<div class="grid-content"><?php ash_excerpt(150);?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-mini">Read more &rsaquo;</a>
			</div>
		</section>
		<footer>
			<small><p class="meta"><i class="icon-user"></i> <?php _e("by", "ash"); ?> <?php the_author_posts_link(); ?> <i class="icon-tags"></i> <?php the_category(', '); ?> <?php if ($smof_data['post_views'] == '1') { ?> <i class="icon-eye-open"></i> <?php echo getPostViews(get_the_ID()); } ?> <i class="icon-comment-alt"></i> <?php comments_number( '0', '', '%' ); ?></p></small>
		</footer>


	</article><!-- /article -->


	<?php endwhile; endif; ?>