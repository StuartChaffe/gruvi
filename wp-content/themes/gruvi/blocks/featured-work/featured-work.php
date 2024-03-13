<?php
if (!isset($args)) {
	$args = null;
}
$defaults = [
	'featured' => get_field('featured'),
];

$args = wp_parse_args($args, $defaults);
?>
<section class="featured-work">
	<div class="container featured-list">
	<?php foreach($args['featured'] as $item): ?>
		<a href="<?php echo $item['link']; ?>" class="featured-item <?php if ($item['size']): ?><?php echo $item['size']; ?><?php endif; ?> <?php echo $item['offset']; ?>">
			<div class="animate">
			<?php if ($item['title']): ?><div class="featured-item__title <?php echo $item['title_position']; ?>"><h4><strong><?php echo $item['title']; ?></strong></h4></div><?php endif; ?>
			<?php if ($item['image']): ?><img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"><?php endif; ?>
			<div class="arrow"><svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-9, -9)" fill="currentColor" fill-rule="nonzero">
						<path d="M11.2071,9.79289 C10.8166,9.40237 10.1834,9.40237 9.79289,9.79289 C9.40237,10.1834 9.40237,10.8166 9.79289,11.2071 L11.2071,9.79289 Z M25.5,26.5 C26.0523,26.5 26.5,26.0523 26.5,25.5 L26.5,16.5 C26.5,15.9477 26.0523,15.5 25.5,15.5 C24.9477,15.5 24.5,15.9477 24.5,16.5 L24.5,24.5 L16.5,24.5 C15.9477,24.5 15.5,24.9477 15.5,25.5 C15.5,26.0523 15.9477,26.5 16.5,26.5 L25.5,26.5 Z M9.79289,11.2071 L24.79289,26.2071 L26.2071,24.79289 L11.2071,9.79289 L9.79289,11.2071 Z"></path>
					</g>
				</g>
			</svg></div>
			</div>
		</a>
	<?php endforeach; ?>
	</div>
</section>
