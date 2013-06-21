<?php
/**
 * Template Name: Sitemap
 * Description: A Page Template for displaying your site sitemap.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

get_header(); ?>

<div class="container">	

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
			<div class="container">
				<?php ash_breadcrumbs(); ?>
			</div><!--/.container -->
		<?php } ?>
		
		<header>
			<div class="page-header"><h1><?php the_title(); ?></h1></div>
		</header> <!-- /article header -->	

	<div id="content" class="clearfix">

		<div id="main" class="clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix prettybox'); ?> role="article">

				<header>
					<div class="page-header"><h1><?php the_title(); ?></h1></div>
				</header> <!-- end article header -->

				<section class="post_content">
					<?php the_content(); ?>
				</section> <!-- end article section -->

			</article> <!-- end article -->

			<?php endwhile; endif; ?>


			<div class="row clearfix">

				<!--Start Column 1-->
				<div class="span3">

					<h3><?php _e('Blog Posts:','ash'); ?></h3>

					<ul><?php $archive_query = new WP_Query('showposts=1000&cat=-8');
						while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
							(<?php comments_number('0', '1', '%'); ?>)
						</li>

						<?php endwhile; ?>
					</ul>

				</div><!--END first column-->

				<!--Start Column 2-->
				<div class="span3">

					<h3><?php _e('Pages','ash'); ?></h3>
					<ul><?php wp_list_pages("title_li=" ); ?></ul>

				</div><!--END second column-->


				<!--Start Column 3-->
				<div class="span3">

					<h3><?php _e('Archives','ash'); ?></h3>
					<ul>
						<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
					</ul>

				</div><!--END Third column-->

				<!--Start Column 4-->
				<div class="span3">

					<h3><?php _e('Blog Categories','ash'); ?></h3>
					<ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>

					<h3><?php _e('Feeds','ash'); ?></h3>

					<ul>
						<li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Main RSS','ash'); ?></a></li>  
						<li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comment Feed','ash'); ?></a></li>  
					</ul>

				</div><!--END Fourth column-->

			</div> <!-- /row -->

		</div> <!-- end #main -->

	</div> <!-- end #content -->

</div> <!-- /.container -->

<?php get_footer(); ?>