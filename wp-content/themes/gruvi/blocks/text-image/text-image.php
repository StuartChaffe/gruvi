<?php
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list');
}

$defaults = [
	'image' => get_field('image'),
	'imagepos' => get_field('image_position'),
	'tags' => get_field('tags'),
];
// $tags = get_field('tags');
$args = wp_parse_args($args, $defaults);
?>

<section class="text-image <?php echo $args['imagepos'] ?>">
	<div class="text-image__inner">
		<div class="text-image__text">
			<?php if($allowed_blocks): ?><?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?><?php endif; ?>

			<?php if( $args['tags'] ): ?>
			<div class="tags animate">
			<?php foreach($args['tags'] as $item): ?>
				<div class="tag"><?php echo $item['tag']; ?></div>
			<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="text-image__hiddenimage">
			<img loading="lazy" src="<?php echo $args['image']['url']; ?>" alt="<?php echo $args['image']['alt']; ?>" />
		</div>
	</div>
	<div class="text-image__image animate">
		<img loading="lazy" src="<?php echo $args['image']['url']; ?>" alt="<?php echo $args['image']['alt']; ?>" />
	</div>
</section>
<hr class="wp-block-separator">
