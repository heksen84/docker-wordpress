<?php
/**
 * The template for displaying search form
 * @package Web-development
 */
?>
<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" placeholder="<?php esc_attr_e('Поиск...','web-development'); ?>" class="form-control" required="">
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		</span>
	</div>
</form>