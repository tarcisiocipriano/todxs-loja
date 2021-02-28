<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text d-none"><?php _e( 'Search for:', 'todxs_loja' ); ?></span>
		<input
			id="<?php echo esc_attr( $todxs_loja_unique_id ); ?>"
			class="search-field"
			type="search"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'todxs_loja' ); ?>"
			value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button', 'todxs_loja' ); ?></button>
	<?php if(class_exists('WooCommerce')): ?>
		<input type="hidden" value="product" name="post_type" id="post_type" />
	<?php endif; ?>
</form>
