<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( '搜尋 &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><img src="http://52.194.163.46/wp-content/themes/nctu/images/search-05.svg" alt="" style="width:24px;"></button>
</form>