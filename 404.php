<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */

get_header(); ?>

<div class="container">

		<?php if ($smof_data['ash_breadcrumbs'] == '1') { ?>
		<nav class="container">
			<?php ash_breadcrumbs(); ?>
		</nav><!--/.container -->
		<?php } ?>

	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span12 clearfix" role="main">

			<article id="post-not-found" class="clearfix">

				<header>

					<div class="hero-unit">

						<h1><?php _e("Epic 404 - Article Not Found","ash"); ?></h1>
						<p><?php _e("This is embarassing. We can't find what you were looking for.","ash"); ?></p>

					</div>

				</header> <!-- /article header -->

				<section class="post_content">

					<p><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.","ash"); ?></p>

					<div class="row-fluid">
						<div class="span12">
							<?php get_search_form(); ?>
						</div>
					</div>

				</section> <!-- /article section -->

				<footer>

				</footer> <!-- /article footer -->

			</article> <!-- /article -->

		</div> <!-- /#main -->

	</div> <!-- /#content -->

</div> <!-- /#container -->

<?php get_footer(); ?>