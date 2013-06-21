<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; get_header(); ?>

<div class="container">

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
			<nav class="container">
				<?php ash_breadcrumbs(); ?>
			</nav><!--/container -->
		<?php } ?>

		<header>
			<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>

			<p class="meta"><i class="icon-user"></i> <?php _e("by", "ash"); ?> <?php the_author_posts_link(); ?> <i class="icon-tags"></i> <?php the_category(', '); ?> <?php if ($smof_data['post_views'] == '1') { ?> <i class="icon-eye-open"></i> <?php echo getPostViews(get_the_ID()); } ?> <i class="icon-comment-alt"></i> <?php comments_number(); ?></p>

		</header> <!-- /article header -->

	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span8 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php //Post Views
				if ($smof_data['post_views'] == '1') { setPostViews(get_the_ID()); } ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('prettybox clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="post_content clearfix" itemprop="articleBody">

					<?php the_content(); ?>

					<?php wp_link_pages(); ?>

				</section> <!-- /article section -->

				<footer>
					<?php
						$tag = get_the_tags(); 
						if ( $tag) { //If the post have tags display them, if not hide the well div ?>
							<div class="well tags" style="margin:75px auto;">
								<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","ash") . ':</span> ', ' ', '</p>'); ?>
							</div>
					<?php } ?>
					
					
					<?php if ($smof_data['author_box_enable'] == '1') { 
						include(ASH_INC.'author-box.php'); 
					} ?>

					<?php if ($smof_data['related_posts_enable'] == '1') { 
						ash_related_posts(); 
					} ?>
					
				</footer> <!-- /article footer -->

			</article> <!-- /article -->
	
		
			<?php comments_template('',true); ?>

		
			<?php endwhile; ?>

			<?php else : ?>

			<article id="post-not-found">
				<header>
					<h1><?php _e("Not Found", "ash"); ?></h1>
				</header>

				<section class="post_content">
					<p><?php _e("Sorry, but the requested resource was not found on this site.", "ash"); ?></p>
				</section>

				<footer>
				</footer>
			</article>

			<?php endif; ?>

		</div> <!-- /main -->

		<?php get_sidebar(); // sidebar 1 ?>

	</div> <!-- /content -->

</div> <!-- /container -->

<?php get_footer(); ?>