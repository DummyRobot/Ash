<?php
/*
The comments page for Bones
*/
global $smof_data;

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","ash"); ?></div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<?php if ( ! empty($comments_by_type['comment']) ) : ?>
	<h3 id="comments"><?php comments_number('<span>' . __("No","ash") . '</span> ' . __("Comments","ash") . '', '<span>' . __("One","ash") . '</span> ' . __("Comment","ash") . '', '<span>%</span> ' . __("Comments","ash") );?> <?php _e("to","ash"); ?> &#8220;<?php the_title(); ?>&#8221;</h3>

	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link( __("Older comments","ash") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","ash") ) ?></li>
	 	</ul>
	</nav>
	
	<ol class="commentlist prettybox">
		<?php wp_list_comments('type=comment&callback=bones_comments'); ?>
	</ol>
	
	<?php endif; ?>
	
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
		<h3 id="pings">Trackbacks/Pingbacks</h3>
		
		<ol class="pinglist">
			<?php wp_list_comments('type=pings&callback=list_pings'); ?>
		</ol>
	<?php endif; ?>
	
	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link( __("Older comments","ash") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","ash") ) ?></li>
		</ul>
	</nav>
  
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed 
	?>
	
	<?php
		//$suppress_comments_message = $smof_data['ash_suppress_comments_message'] ==1;

		//if (is_page() && $suppress_comments_message) :
		if (is_page() && $smof_data['ash_suppress_comments_message'] ==1) :
	?>
			
		<?php else : ?>
		
			<!-- If comments are closed. -->
			<p class="alert alert-info"><?php _e("Comments are closed","ash"); ?>.</p>
			
		<?php endif; ?>

	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form prettybox">

	<h3 id="comment-form-title"><?php comment_form_title( __("Leave a Comment","ash"), __("Leave a Comment to","ash") . ' %s' ); ?></h3>

	<div id="cancel-comment-reply">
		<p class="small"><?php cancel_comment_reply_link( __("Cancel","ash") ); ?></p>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  	<div class="help">
  		<p><?php _e("You must be","ash"); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e("logged in","ash"); ?></a> <?php _e("to post a comment","ash"); ?>.</p>
  	</div>
	<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comments-form">
	
	<div class="row-fluid">
	
	<?php if ( is_user_logged_in() ) : ?>
		
	<p class="comments-logged-in-as"><?php _e("Logged in as","ash"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account","ash"); ?>"><?php _e("Log out","ash"); ?> &raquo;</a></p>

	<?php else : ?>

		<div class="span4">
			<div class="control-group">
				<label for="author"><?php _e("Name","ash"); ?> <?php if ($req) echo "(required)"; ?></label>
		
				<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span><input type="text" class="input-block-level" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e("Your Name","ash"); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>
				</div>
			</div>
			
			<div class="control-group">
				<label for="email"><?php _e("Mail","ash"); ?> <?php if ($req) echo "(required)"; ?></label>
		
				<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span><input type="email" class="input-block-level" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e("Your Email","ash"); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					<span class="help-inline">(<?php _e("will not be published","ash"); ?>)</span>
				</div>
				</div>
			</div>
			
			<div class="control-group">
				<label for="url"><?php _e("Website","ash"); ?></label>
			  	
			  	<div class="controls">
			  	<div class="input-prepend">
			  		<span class="add-on"><i class="icon-home"></i></span><input type="url" class="input-block-level" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e("Your Website","ash"); ?>" tabindex="3" />
				</div>
				</div>
			</div>
			
			
			
		</div><!-- /span4 -->
		
		<?php endif; ?>
		
		<div class="span8">
			<div class="control-group">
				<div class="controls">
					<textarea name="comment" id="comment" class="input-block-level row-fluid" rows="10" placeholder="<?php _e("Your Comment Here…","ash"); ?>" tabindex="4"></textarea>
				</div>
			</div>
		</div>
	
	
<input class="btn btn-primary pull-right" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment","ash"); ?>" />
	  <?php comment_id_fields(); ?>
	
	
	<?php 
		//comment_form();
		do_action('comment_form()', $post->ID);
	?>

	</div><!--/row-fluid-->

</form>

	
	<?php endif; // If registration required and not logged in ?>
	
</section>

<?php endif; // if you delete this the sky will fall on your head ?>