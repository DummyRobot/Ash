<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
			</nav><!-- /container -->
		<?php } ?>
		
		<header>
			<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
		</header> <!-- /article header -->
					
	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span8 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('prettybox clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	

					<section class="post_content clearfix" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <!-- /article section -->

					<footer>
						<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","ash") . ':</span> ', ', ', '</p>'); ?>
					</footer> <!-- end article footer -->

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