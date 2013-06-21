<?php
/**
 * The template for displaying Author pages.
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

		<div class="hero-unit clearfix">
			
			<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
			<div class="span2 author-avatar">
				<?php //http://wordpress.org/support/topic/using-a-gravatar-image-within-authorphp ?>
			<?php global $authordata, $curauth;
		$authordata=get_userdata(get_query_var( 'author' )); if(function_exists('get_avatar')) { echo get_avatar( get_the_author_id(), 150, "#646464" ); } ?>
			</div>
			
			<h2 class="archive_title">
				<?php //echo get_the_author_meta('display_name'); ?>
				<?php echo $curauth->display_name; ?>
			</h2>
			
			<p><?php echo $curauth->description; ?></p>
			
			<hr>
			<div class="clearfix row social-icons-small">
				<?php if(get_the_author_meta('facebook') ) {?>
  				<a class="tip" href="<?php echo $curauth->facebook; ?>" title="Facebook" target="_blank"><i class="icon-facebook"></i></a>
				<?php } ?> 
				
				<?php if(get_the_author_meta('twitter') ) {?>
  				<a class="tip" href="<?php echo $curauth->twitter; ?>" title="Twitter" target="_blank"><span class='symbol'>&#xe286;</span></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('googleplus') ) {?>
  				<a class="tip" href="<?php echo $curauth->googleplus; ?>" title="Google +" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('behance') ) {?>
  				<a class="tip" href="<?php echo $curauth->behance; ?>" title="Behance" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('deviantart') ) {?>
  				<a class="tip" href="<?php echo $curauth->deviantart; ?>" title="DeviantArt" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('flickr') ) {?>
  				<a class="tip" href="<?php echo $curauth->flickr; ?>" title="Flickr" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('500px') ) {?>
  				<a class="tip" href="<?php echo $curauth->fivehundredpixels; ?>" title="500Px" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('instagram') ) {?>
  				<a class="tip" href="<?php echo $curauth->instagram; ?>" title="Instagram" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('lastfm') ) {?>
  				<a class="tip" href="<?php echo $curauth->lastfm; ?>" title="LastFM" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
				
				<?php if(get_the_author_meta('soundcloud') ) {?>
  				<a class="tip" href="<?php echo $curauth->soundcloud; ?>" title="Soundcloud" target="_blank"><i class="icon-google-plus"></i></a>
				<?php } ?>
			</div> <!--/social icons-->
		</div> <!-- /hero-unit-->
		
	<div class="page-header">
		<h1 class="archive_title"><?php _e("Posts By:", "ash"); ?> <?php echo $curauth->display_name; ?></h1>
	</div>
	
	<div id="content" class="row clearfix">

		<?php //Show Sidebar in Search Results page IF List layout is enabled in Admin Options, ELSE show grid layout.
			if ($smof_data['ash_archives_layout'] == 'list') { ?>
			<div id="main" class="span8 clearfix" role="main">
			
			<?php get_template_part('library/inc/layouts/list','search');?>	
			
			</div> <!-- /#main -->
			
		<?php } else { ?>
			
			<?php get_template_part('library/inc/layouts/grid','search');?>	
		
		<?php } ?>

			
			
				
		<?php //Show Sidebar in Search Results page IF is enabled in Admin Options, ELSE hide it.
			if ($smof_data['ash_archives_layout'] == 'list') { ?>
			<?php get_sidebar(); // sidebar 1 ?>
		<?php } ?>
				
	</div> <!-- /#content -->
	
	<?php ash_page_nav();?>
	
</div> <!-- /#container -->

<?php get_footer(); ?>