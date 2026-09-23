<form role="search" method="get" class="contact-form" style="flex-direction:row;padding:0;background:none;" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" name="s" placeholder="Search…" value="<?php echo esc_attr( get_search_query() ); ?>" style="flex:1;" />
	<button type="submit" class="btn btn-primary">Search</button>
</form>
