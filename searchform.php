<form action="<?php echo home_url( '/' ); ?>" method="get" id="custom-search-form" class="form-search form-horizontal">
	<fieldset>
		<div class="input-append row">
				<input type="text" name="s" class="search-query" id="search" placeholder="<?php _e("Search","ash"); ?>" value="<?php the_search_query(); ?>" />
				<button type="submit" class="btn"><i class="icon-search"></i></button>	
		</div>
	</fieldset>
</form>