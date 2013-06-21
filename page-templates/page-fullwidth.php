<?php
/*
 * Template Name: Full Width Page
 * Description: Template for displaying a full width page (no sidebar)
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; get_header(); ?>

<div class="container">

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
			<div class="container">
				<?php ash_breadcrumbs(); ?>
			</div><!--/.container -->
		<?php } ?>
		
		<header>
			<div class="page-header"><h1><?php the_title(); ?></h1></div>
		</header> <!-- /article header -->
				
	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span12 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix prettybox'); ?> role="article">

				<section class="post_content">
					<?php the_content(); ?>
				</section> <!-- /article section -->

				<footer>
					<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","ash") . ': ', ', ', '</span>'); ?></p>
				</footer> <!-- end article footer -->

			</article> <!-- /article -->

			<?php comments_template(); ?>

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

		</div> <!-- /#main -->

	</div> <!-- /#content -->

</div> <!-- /.container -->

<?php get_footer(); ?>