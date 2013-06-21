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
    <ul class="slides-container">
    	
    	<?php query_posts('showposts=6&post_type=post&ignore_sticky_posts=1');?>
	<?php if (have_posts()): while (have_posts()) : the_post();?>    	
    	
    	
      <li>
        <?php the_post_thumbnail('full');?>
        <div class="container">
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<h1><?php the_title(); ?></h1>
			

				
					<?php the_content(); ?>
           </article>
          
        </div>
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