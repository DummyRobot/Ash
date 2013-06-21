<?php
/**
 * Functions for the Bootstrap Carousel.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */
global $smof_data;


//================================================================================
// The Default Bootstrap Carousel - Fixed Width
//================================================================================

if ($smof_data['homepage_carousel_type'] == 'normal' ) { ?>


	<div class="container">

		<div id="content" class="clearfix row-fluid">
				
			<div id="main" class="span12 clearfix" role="main">

				<div id="myCarousel" class="carousel slide carousel-fade">

					<!-- Carousel items -->
					<div class="carousel-inner">

						<?php
							global $post;
							$tmp_post = $post;
							$show_posts = $smof_data['carousel_slides_number'];
							//$show_posts = of_get_option('slider_options');
							//$show_posts = 3;
							$args = array( 'numberposts' => $show_posts ); // set this to how many posts you want in the carousel
							$myposts = get_posts( $args );
							$post_num = 0;
						foreach( $myposts as $post ) :	setup_postdata($post);
							$post_num++;
							$post_thumbnail_id = get_post_thumbnail_id();
							$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'carousel' );
						?>

						<div class="<?php if($post_num == 1){ echo 'active'; } ?> item">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'carousel' ); ?></a>

							<div class="carousel-caption">

								<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
									<p>
										<?php
											$excerpt_length = 100; // length of excerpt to show (in characters)
											$the_excerpt = get_the_excerpt(); 
										if($the_excerpt != ""){
											$the_excerpt = substr( $the_excerpt, 0, $excerpt_length );
										echo $the_excerpt . '... ';
										?>

										<br>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-mini">Read more &rsaquo;</a>

										<?php } ?>
									</p>

							</div> <!--/carousel-caption-->
						</div>

						<?php endforeach; ?>
						<?php $post = $tmp_post; ?>

					</div> <!--/carousel-inner-->

						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

				</div> <!--/myCarousel-->

			</div> <!--/#main-->

		</div> <!--/#content-->

	</div> <!--/container-fluid-->

<?php } else { 
//================================================================================
// The Fluid Bootstrap Carousel - Full Width
//================================================================================
?>

	<div class="container-fluid">

		<div id="content" class="clearfix row-fluid">

			<div id="main" class="span12 clearfix" role="main">

				<div id="myCarousel" class="carousel slide carousel-fade">

					<!-- Carousel items -->
					<div class="carousel-inner container">

						<?php
							global $post;
							$tmp_post = $post;
							$show_posts = $smof_data['wide_carousel_slides_number'];
							//$show_posts = of_get_option('slider_options');
							//$show_posts = 3;
							$args = array( 'numberposts' => $show_posts ); // set this to how many posts you want in the carousel
							$myposts = get_posts( $args );
							$post_num = 0;
						foreach( $myposts as $post ) :	setup_postdata($post);
							$post_num++;
							$post_thumbnail_id = get_post_thumbnail_id();
							$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'carousel' );
						?>

						<div class="<?php if($post_num == 1){ echo 'active'; } ?> item">
							
							<div class="row">
							
								<div class="span5">
							
									<a class="aligncenter" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('500x400'); ?></a>
								
								</div><!--/span6-->
								
								<div class="span7">

									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<?php ash_excerpt(200);?>

										<br>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn pull-right">Read more &rsaquo;</a>								

								</div> <!--/span7-->
							
							</div> <!--/row-->
							
						</div>

						<?php endforeach; ?>
						<?php $post = $tmp_post; ?>

					</div> <!--/carousel-inner-->

						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

				</div> <!--/myCarousel-->

			</div> <!--/#main-->

		</div> <!--/#content-->

	</div> <!--/container-fluid-->

<?php } 