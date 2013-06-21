<?php
/**
 * Template Name: Contact
 * Description: A Page Template for a quick contact form.
 *
 * The e-mail must be entered in the options panel in the admin section
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
		</header> <!-- end article header -->

	<div id="content" class="clearfix row-fluid">

		<div id="main" class="span12 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix prettybox'); ?> role="article">

				<section class="clearfix post_content">
					<div class="span6">
						<?php the_content(); ?>
					</div>

					<div class="span6">
						<!--Call the Contact-->
						<?php get_template_part( 'library/inc/contact', 'contact' );?>
					</div>

				</section> <!-- end article section -->

				<footer class="row-fluid">
				
					<?php if (rwmb_meta('ash_gmap_on') == 1 ) { ?>
						<div id="themap">
							<?php
								$loc = get_post_meta($post->ID, 'ash_loc', true );
								$deg = explode(',' , $loc);
								// Echo the lat & lng for testing
								//echo $loc;
								$lat = $deg[0];
								$lng = $deg[1];
							?>
							<script type="text/javascript">
								var iconBase = '<?php echo get_template_directory_uri() ?>/library/images/icons/';
								var map;
								jQuery(document).ready(function(){
									map = new GMaps({
										el: '#themap',
										lat: <?php echo $lat; ?>,
										lng: <?php echo $lng; ?>,
										zoomControl : true,
										zoomControlOpt: {
											style : 'SMALL',
											position: 'TOP_LEFT'
										},
										panControl : false,
										scrollwheel: false,
										streetViewControl : false,
										mapTypeControl: false,
										overviewMapControl: false
									});
									map.addMarker({
										lat: <?php echo $lat; ?>,
										lng: <?php echo $lng; ?>,
										icon: iconBase + 'letter_m.png'
									});
								});
							</script>
						</div> <!-- /themap -->
					
					<?php } ?>
					
				</footer>

			</article> <!-- end article -->

			<?php endwhile; endif; ?>

		</div> <!-- end #main -->

		<?php //get_sidebar(); // sidebar 1 ?>

	</div> <!-- end #content -->

</div> <!-- /.container -->

<?php get_footer(); ?>