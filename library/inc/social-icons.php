<?php function ash_social_icons() {
	global $smof_data;?>

	<div class="clearfix row social-icons">

		<?php if ($smof_data['ash_feedburner']) { ?>
			<a class="tip" href="<?php echo $smof_data['ash_feedburner'];?>" title="RSS Feed">
				<span class='symbol'>&#xe271;</span>
			</a>
		<?php } else {?>
			<a class="tip" href="<?php echo home_url(); ?>/rss" title="RSS Feed">
				<span class='symbol'>&#xe271;</span>
			</a>
		<?php } ?>


		<?php if ($smof_data['icon_facebook_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_facebook_id'];?>" title="Facebook" target="_blank">
				<span class='symbol'>&#xe227;</span>
			</a>
		<?php }?>

		<?php if ($smof_data['icon_twitter_enable'] == '1') { ?>
			<a class="tip" href="https://twitter.com/<?php echo $smof_data['ash_twitter_id'];?>" title="Twitter" target="_blank">
				<span class='symbol'>&#xe286;</span>
			</a>
		<?php }?>
		
		<?php if ($smof_data['icon_tumblr_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_tumblr_id'];?>" title="tumblr" target="_blank">
				<span class='symbol'>&#xe285;</span>
			</a>
		<?php }?>

		<?php if ($smof_data['icon_gplus_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_gplus_id'];?>" title="Google Plus" target="_blank">
				<span class='symbol'>&#xe239;</span>
			</a>
		<?php }?>

		<?php if ($smof_data['icon_pinterest_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_pinterest_id'];?>" title="Pinterest" target="_blank">
				<span class='symbol'>&#xe264;</span>
			</a>
		<?php }?>

		<?php if ($smof_data['icon_behance_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_behance_id'];?>" title="Behance" target="_blank">
				<span class='symbol'>&#xe209;</span>
			</a>
		<?php }?>

		<?php if ($smof_data['icon_deviantart_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_deviantart_id'];?>" title="DeviantArt" target="_blank">
				<span class='symbol'>&#xe218;</span>		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_linkedin_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_linkedin_id'];?>" title="LinkedIN" target="_blank">
				<span class='symbol'>&#xe252;</span>		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_flickr_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_flickr_id'];?>" title="Flickr" target="_blank">
				<span class='symbol'>&#xe229;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_youtube_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_youtube_id'];?>" title="Youtube" target="_blank">
				<span class='symbol'>&#xe299;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_vimeo_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_vimeo_id'];?>" title="Vimeo" target="_blank">
				<span class='symbol'>&#xe289;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_lastfm_enable'] == '1') { ?>
		 	<a class="tip" href="<?php echo $smof_data['ash_lastfm_id'];?>" title="LastFM" target="_blank">
				<span class='symbol'>&#xe251;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_soundcloud_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_soundcloud_id'];?>" title="SoundCloud" target="_blank">
				<span class='symbol'>&#xe278;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_myspace_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_myspace_id'];?>" title="MySpace" target="_blank">
				<span class='symbol'>&#xe259;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_skype_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_skype_id'];?>" title="Skype" target="_blank">
				<span class='symbol'>&#xe274;</span>		       		       
			</a>
		<?php }?>

		<?php if ($smof_data['icon_github_enable'] == '1') { ?>
			<a class="tip" href="<?php echo $smof_data['ash_github_id'];?>" title="GitHub" target="_blank">
				<span class='symbol'>&#xe236;</span>
			</a>
		<?php }?>

	</div><!--/clearfix row social-icons-->

<?php }