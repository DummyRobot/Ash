<?php
/*
 * Template Name: Landing Page
 * Description: Template for displaying a full width page (no sidebar)
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; get_header(); ?>

<div class="container">

	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span12 clearfix landing" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<header>
					
				</header> <!-- /article header -->

				<section class="post_content">
					<?php the_content(); ?>
				</section> <!-- /article section -->

				<footer>
					
				</footer> <!-- end article footer -->

			</article> <!-- /article -->


			<?php endwhile; endif; ?>

		</div> <!-- /#main -->

	</div> <!-- /#content -->

</div> <!-- /.container -->

<?php get_template_part('library/inc/footer','alt');?>	