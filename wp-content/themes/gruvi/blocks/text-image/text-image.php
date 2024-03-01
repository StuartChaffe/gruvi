<?php
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list');
}

$defaults = [
	'image' => get_field('image'),
	'imagepos' => get_field('image_position'),
];

$args = wp_parse_args($args, $defaults);
?>
<section class="text-image <?php echo $args['imagepos'] ?>">
	<div class="text-image__inner animate">
		<div class="text-image__item text-image__image">
			<div><img loading="lazy" src="<?php echo $args['image']['url']; ?>" alt="<?php echo $args['image']['alt']; ?>" /></div>
		</div>
		<div class="text-image__item text-image__text">
			<?php if($allowed_blocks): ?><?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?><?php endif; ?>
		</div>
	</div>
</section>
