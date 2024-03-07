<?php
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list', 'core/image');
}
$defaults = [
	'slide' => get_field('slide'),
	// 'image' => get_sub_field('image'),
	// 'title' => get_sub_field('title'),
];

$args = wp_parse_args($args, $defaults);

?>
<div class="slider animate">
<?php foreach($args['slide'] as $item): ?>
	<div class="slider-item">
		<img loading="lazy" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" />
		<?php if ( $item['title'] ): ?><div class="slider-item__title"><?php echo $item['title']; ?></div><?php endif; ?>
	</div>
<?php endforeach; ?>
</div>
