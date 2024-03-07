<?php
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading');
}
$defaults = [
	'image' => get_field('image'),
];
$args = wp_parse_args($args, $defaults);
?>
<div class="mega-title animate">
	<?php if($args['image']): ?>
	<div class="mega-title__image">
		<img decoding="async" class="" loading="lazy" src="<?php echo $args['image']['url']; ?>" alt="<?php echo $args['image']['alt']; ?>" />
	</div>
	<?php endif; ?>
	<div class="mega-title__content">
		<?php if($allowed_blocks): ?><?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?><?php endif; ?>
	</div>
</div>
