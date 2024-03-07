<?php
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'acf/spacer');
}
$defaults = [
	'width' => get_field('width'),
];
$args = wp_parse_args($args, $defaults);
?>
<div class="content-block animate">
	<div class="content-block__inner">
	<?php if($allowed_blocks): ?><div class="<?php echo $args['width']; ?>"><?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?></div><?php endif; ?>
	</div>
</div>
