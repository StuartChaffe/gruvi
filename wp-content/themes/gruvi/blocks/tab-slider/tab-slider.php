<?php
$counter = 0;
$allowed_blocks = null;

if (!isset($args)) {
	$args = null;
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list', 'core/image');
}
$defaults = [
	'tabs' => get_field('tabs'),
	'bkg__image' => get_field('bkg__image'),
];
$args = wp_parse_args($args, $defaults);
if($args['tabs']):
?>

<div class="tabbed animate" id="tabs">
	<?php if($args['bkg__image']): ?>
	<img decoding="async" class="block__image" loading="lazy" src="<?php echo $args['bkg__image']['url']; ?>" alt="<?php echo $args['bkg__image']['alt']; ?>" />
	<?php endif; ?>
	<div class="tabbed--buttons animate">
	<?php foreach($args['tabs'] as $item): $counter++; ?>
		<a href="#" class="tabbed--button"><?php echo $item['button']; ?></a>
	<?php endforeach; ?>
	</div>

	<?php $counter = 0; ?>
	<?php if( have_rows('tabs') ): ?>
		<?php while ( have_rows('tabs') ) : the_row();
			$title = get_sub_field('title');
			$button = get_sub_field('button');
			$counter++;
		?>
		<div class="tabbed--item">
			<div class="tabbed--item__inner">
				<div class="tabbed--item__content">
					<?php echo $title; ?>
				</div>
			</div>

			<?php if( have_rows('slider') ): ?>
				<div class="tab-slider animate">
				<?php while( have_rows('slider') ): the_row();
					$image = get_sub_field('image');
				?>
					<div class="tab-slider-item">
						<?php if($image): ?>
						<div class="tab-slider__image">
							<img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
						<?php endif; ?>

						<?php if( have_rows('grid') ): ?>
						<div class="tab-slider__grid animate">
							<?php while( have_rows('grid') ): the_row();
								$icon = get_sub_field('icon');
								$title = get_sub_field('title');
								$content = get_sub_field('content');
							?>
							<div class="tab-slider__grid-item">
								<?php if($icon): ?><img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /><?php endif; ?>
								<?php if($title): ?><p class="small caps"><strong><?php echo $title; ?></strong></p><?php endif; ?>
								<?php if($content): ?><p class="small"><?php echo $content; ?></p><?php endif; ?>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

</div>


<?php endif; ?>
