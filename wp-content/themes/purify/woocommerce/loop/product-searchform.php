

<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
			<div>
<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search', 'thim' ); ?>" />
                <button type="submit" class="button-search" role="button"><i></i></button>
<input type="hidden" name="post_type" value="product" />
</div>
</form>