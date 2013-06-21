<?php
/*
 * Template Name: XMetaBox Output
 * Description: Template for displaying Meta Box Debug Options
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



			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">




					<?php the_content(); ?>

	<div class="span6">
			<hr>


			<h1>The MB Outputs</h1>
			<h4>More on http://www.deluxeblogtips.com/meta-box/helper-function-to-get-meta-value/</h4>

		<hr>
		<h4>Text Clone Field</h4>

<pre class="prettyprint linenums">
&lt;?php $clones = rwmb_meta( 'stv_text_clone', 'type=text' );
	echo implode( ', ', $clones ); ?&gt;
</pre>

		<p>Result:</p>	
		<?php $clones = rwmb_meta( 'stv_text_clone', 'type=text' );
			echo implode( ', ', $clones ); ?>


		<hr>
		<h4>Text Field</h4>

<pre class="prettyprint linenums">
&lt;?php $meta = get_post_meta( get_the_ID(), 'stv_text', true );
	echo $meta; // If you want to show ?&gt;
</pre>

		<p>Result:</p>
		<?php $meta = get_post_meta( get_the_ID(), 'stv_text', true );
			echo $meta; // If you want to show ?>

<p>or</p>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_text' );?&gt;
</pre>

			<p>Result:</p>
			<?php echo rwmb_meta( 'stv_text' );?>

		<hr>
		<h4>Checkbox</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_checkbox' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_checkbox' );?>

		<hr>
		<h4>Radio</h4>	

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_radio' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_radio' );?>

		<hr>
		<h4>Select</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_select' );?&gt;
</pre>

			<?php echo rwmb_meta( 'stv_select' );?>

		<hr>
		<h4>Number</h4>	

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_number' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_number' );?>

		<hr>
		<h4>Date picker</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_date' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_date' );?>

		<hr>
		<h4>Datetime picker</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_datetime' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_datetime' );?>

		<hr>	
		<h4>Time picker</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_time' );?&gt;
</pre>
		
				<?php echo rwmb_meta( 'stv_time' );?>

		<hr>
		<h4>Color picker</h4>

<pre class="prettyprint linenums">
&lt;?php echo rwmb_meta( 'stv_color' );?&gt;
</pre>

				<?php echo rwmb_meta( 'stv_color' );?>


		<hr>
		<h4>CHECKBOX LIST</h4>

<pre class="prettyprint linenums">
&lt;?php $labels = rwmb_meta( 'stv_checkbox_list', 'type=checkbox_list' );
	echo implode( ', ', $labels ); ?&gt;
</pre>

				<?php $labels = rwmb_meta( 'stv_checkbox_list', 'type=checkbox_list' );
					echo implode( ', ', $labels ); ?>

		<hr>	
		<h4>Taxonomy</h4>

		<p>ERROR - DOESN'T WORK</p>
					<?php //$terms = rwmb_meta( 'stv_taxonomy', 'type=taxonomy&taxonomy=tax_slug' );
						//$content = '<ul>';
						//foreach ( $terms as $term )
						//{
							//$content .= sprintf(
								//'<li><a href="%s" title="%s">%s</a></li>',
								//get_term_link( $term, 'tax_slug' ),
								//$term->name,
								//$term->name
							//);
						//}
						//$content .= '</ul>';
						//echo $content; ?>


		<hr>
		<h4>WYSIWYG/RICH TEXT EDITOR</h4>

<pre class="prettyprint linenums">
&lt;?php $meta = get_post_meta( get_the_ID(), 'stv_wysiwyg', true );
	echo $meta; // If you want to show ?&gt;
</pre>

				<?php $meta = get_post_meta( get_the_ID(), 'stv_wysiwyg', true );
					echo $meta; // If you want to show ?>

		<hr>
		<h4>File Upload (only permited files by wordpress - See here: http://en.support.wordpress.com/accepted-filetypes/)</h4>

<pre class="prettyprint linenums">
&lt;?php $files = rwmb_meta( 'stv_file', 'type=file' );
	foreach ( $files as $info )
	{
	echo "&lt;a href='{$info['url']}' title='{$info['title']}'&gt;{$info['name']}&lt;/a&gt;&lt;br /&gt;";
	}?&gt;
</pre>

				<?php $files = rwmb_meta( 'stv_file', 'type=file' );
					foreach ( $files as $info )
					{
					echo "<a href='{$info['url']}' title='{$info['title']}'>{$info['name']}</a><br />";
					}?>

		<hr>
		<h4>Image Upload</h4>

<pre class="prettyprint linenums">
&lt;?php $images = rwmb_meta( 'stv_image', 'type=image' );
	foreach ( $images as $image )
	{
	echo "&lt;a href='{$image['full_url']}' title='{$image['title']}' rel='thickbox'&gt;&lt;img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /&gt;&lt;/a&gt;";
	} ?&gt;
</pre>

				<?php $images = rwmb_meta( 'stv_image', 'type=image' );
					foreach ( $images as $image )
					{
					echo "<a href='{$image['full_url']}' title='{$image['title']}' rel='thickbox'><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /></a>";
					} ?>

		<hr>
		<h4>THICKBOX IMAGE UPLOAD (WP 3.3+)</h4>

<pre class="prettyprint linenums">
&lt;?php $images = rwmb_meta( 'stv_thickbox', 'type=image' );
		foreach ( $images as $image )
		{
		echo "&lt;a href='{$image['full_url']}' title='{$image['title']}' rel='thickbox'&gt;&lt;img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /&gt;&lt;/a&gt;";
		} ?&gt;
</pre>

				<?php $images = rwmb_meta( 'stv_thickbox', 'type=image' );
					foreach ( $images as $image )
					{
					echo "<a href='{$image['full_url']}' title='{$image['title']}' rel='thickbox'><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /></a>";
					} ?>


		<hr>
		<h4>PLUPLOAD IMAGE UPLOAD (WP 3.3+)</h4>

<pre class="prettyprint linenums">
&lt;?php  global $wpdb;
	$images = get_post_meta( get_the_ID(), 'stv_plupload', false );
	$images = implode( ',' , $images );
	// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
	SELECT ID FROM {$wpdb->posts}
	WHERE post_type = 'attachment'
	AND ID in ({$images})
	ORDER BY menu_order ASC
	" );

	foreach ( $images as $att )
		{
		// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'thumbnail' );
		$src = $src[0];
		// Show image
		echo "&lt;img src='{$src}' /&gt;";
	}
?&gt;
</pre>

			<?php global $wpdb;
					$images = get_post_meta( get_the_ID(), 'stv_plupload', false );
					$images = implode( ',' , $images );
				// Re-arrange images with 'menu_order'
					$images = $wpdb->get_col( "
					SELECT ID FROM {$wpdb->posts}
					WHERE post_type = 'attachment'
					AND ID in ({$images})
					ORDER BY menu_order ASC
					" );

					foreach ( $images as $att )
					{
					// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
					$src = wp_get_attachment_image_src( $att, 'thumbnail' );
					$src = $src[0];
					// Show image
					echo "<img src='{$src}' />";
					}
				?>
		<hr>
		<h4>Google Maps</h4>

<pre class="prettyprint linenums">
&lt;div id="themap"&gt;
        &lt;?php
          $loc = get_post_meta($post->ID, 'loc', true );
          $deg = explode(',' , $loc);
          // Echo the lat & lng for testing
          //echo $loc;
          $lat = $deg[0];
          $lng = $deg[1];
          ?&gt;
          &lt;script type="text/javascript"&gt;
          var iconBase = '&lt;?php echo get_stylesheet_directory_uri() ?&gt;/lib/img/icons/';
          var map;
          jQuery(document).ready(function(){
            map = new GMaps({
              el: '#themap',
              lat: &lt;?php echo $lat; ?&gt;,
              lng: &lt;?php echo $lng; ?&gt;,
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
              lat: &lt;?php echo $lat; ?&gt;,
              lng: &lt;?php echo $lng; ?&gt;,
              icon: iconBase + 'letter_m.png'
            });
          });
          &lt;/script&gt;
        &lt;/div&gt;
</pre>

		<div id="themap">
          <?php
          $loc = get_post_meta($post->ID, 'loc', true );
          $deg = explode(',' , $loc);
          // Echo the lat & lng for testing
          //echo $loc;
          $lat = $deg[0];
          $lng = $deg[1];
          ?>
          <script type="text/javascript">
          var iconBase = '<?php echo get_stylesheet_directory_uri() ?>/lib/img/icons/';
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
        </div>

					
		</div><!-- /span6-->

			</article> <!-- /article -->



			<?php endwhile; ?>	

			<?php endif; ?>



		</div> <!-- /#main -->

	</div> <!-- /#content -->

</div> <!-- /.container -->

<?php get_footer(); ?>