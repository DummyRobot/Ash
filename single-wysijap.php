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

	<div id="content" class="clearfix row-fluid">
			
		<div id="main" class="span12 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<header>
					<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
				</header> <!-- /article header -->

				<section class="post_content clearfix" itemprop="articleBody">

					<?php the_content(); ?>
					<?php if($_REQUEST['action'] == 'subscribe'){ //subscribe page
// Design for subscribe goes here
} elseif($_REQUEST['action'] == 'unsubscribe'){ // unsubscribe page
// Design for unsubscribe goes here
} elseif ($_REQUEST['action'] == 'subscriptions'){ // edit profile
// Design for edit profile goes here
}?>
				</section> <!-- /article section -->


				<footer>

				</footer> <!-- /article footer -->

			</article> <!-- /article -->


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

	</div> <!-- /content -->

</div> <!-- /container -->

<?php get_footer(); ?>