<?php
/*
 * Template Name: SuperSlides
 * Description: Template for displaying a full width page (no sidebar)
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data; get_header(); ?>

<div id="slides">
	<ul class="slides-container row-fluid">

	<?php if (have_posts()): while (have_posts()) : the_post();?>


	<li>
		<header>
			<?php the_post_thumbnail('full');?>
		</header>

		<div class="container">

		<article id="post-<?php the_ID(); ?>" <?php post_class('fullscreen clearfix'); ?> role="article">

			<header class="span4 offset6">
				<h1 class="fullscreen"><?php the_title(); ?></h1>
			</header>

			<section class="fullscreen span6 offset5">
				<?php ash_excerpt(200); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-mini pull-right">Read more &rsaquo;</a>
			</section> 

		</article>

		</div> <!-- /container -->
	</li>

	<?php endwhile; endif;?>

	<?php wp_reset_query(); ?> 
	</ul>

	<nav class="slides-navigation">
		<a href="#" class="next"><i class="icon-chevron-right"></i></a>
		<a href="#" class="prev"><i class="icon-chevron-left"></i></a>
	</nav>
</div>

<?php get_template_part( 'library/inc/footer', 'alt' ); ?>	