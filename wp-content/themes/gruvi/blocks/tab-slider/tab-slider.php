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
<section class="tabbed animate">
<?php if($args['bkg__image']): ?>
<img decoding="async" class="block__image" loading="lazy" src="<?php echo $args['bkg__image']['url']; ?>" alt="<?php echo $args['bkg__image']['alt']; ?>" />
<?php endif; ?>
	<div class="tabbed--buttons" role="tablist" aria-label="TabCordion">
	<?php foreach($args['tabs'] as $item): $counter++; ?>
		<button class="tab<?php if ($counter == 1): ?> is-active<?php endif; ?>" role="tab" aria-selected="<?php if ($counter == 1): ?>true<?php else: ?>false<?php endif; ?>" aria-controls="tab<?php echo $counter; ?>" id="tab<?php echo $counter; ?>" <?php if ($counter !== 1): ?>tabindex="-<?php echo $counter; ?>"<?php endif; ?>><?php echo $item['button']; ?></button>
	<?php endforeach; ?>
	</div>

	<?php $counter = 0; ?>
	<?php if( have_rows('tabs') ): ?>
		<?php while ( have_rows('tabs') ) : the_row();
			$title = get_sub_field('title');
			$button = get_sub_field('button');
			$counter++;
		?>
		<div id="tab<?php echo $counter; ?>" class="tabbed--item<?php if ($counter == 1): ?> is-active<?php endif; ?>" data-title="<?php echo $button; ?>" tabindex="-<?php echo $counter; ?>" role="tabpanel" aria-labelledby="tab<?php echo $counter; ?>">
			<div class="tabbed--item__inner">
				<div class="tabbed--item__content">
					<?php echo $title; ?>
				</div>
			</div>

			<?php if( have_rows('slider') ): ?>
				<div class="tab-slider">
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
</section>
<?php endif; ?>

<section class="tabbed animate hide">
	<div class="tabbed--buttons" role="tablist" aria-label="TabCordion">
		<button class="tab is-active" role="tab" aria-selected="true" aria-controls="<?php echo $block['id']; ?>-tab1-tab" id="tab1">Landing pages</button>
		<button class="tab" role="tab" aria-selected="false" aria-controls="<?php echo $block['id']; ?>-tab2-tab" id="tab2" tabindex="-1">Showtimes banners</button>
	</div>
	<div id="<?php echo $block['id']; ?>-tab1-tab" class="tabbed--item is-active" data-title="Landing pages" tabindex="0" role="tabpanel" aria-labelledby="tab1">
		<div class="tabbed--item__inner">
			<div class="tabbed--item__content">
				<h4><strong>Landing page</strong></h4>
				<p>Spider-Man: Into the Spider-Verse</p>
			</div>

			<div class="tab-slider">
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid animate">
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							<p class="small caps"><strong>Fast loading</strong></p>
							<p class="small">Gruvi specialises in creating landing pages, banners, and social media players for movies and film festivals.</p>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							<p class="small caps"><strong>Fast loading</strong></p>
							<p class="small">Gruvi specialises in creating landing pages, banners, and social media players for movies and film festivals.</p>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							<p class="small caps"><strong>Fast loading</strong></p>
							<p class="small">Gruvi specialises in creating landing pages, banners, and social media players for movies and film festivals.</p>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							<p class="small caps"><strong>Fast loading</strong></p>
							<p class="small">Gruvi specialises in creating landing pages, banners, and social media players for movies and film festivals.</p>
						</div>
					</div>
				</div>
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							grid1
						</div>
						<div class="tab-slider__grid-item">
							grid2
						</div>
						<div class="tab-slider__grid-item">
							grid3
						</div>
						<div class="tab-slider__grid-item">
							grid4
						</div>
					</div>
				</div>
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							grid1
						</div>
						<div class="tab-slider__grid-item">
							grid2
						</div>
						<div class="tab-slider__grid-item">
							grid3
						</div>
						<div class="tab-slider__grid-item">
							grid4
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="<?php echo $block['id']; ?>-tab2-tab" class="tabbed--item" data-title="Showtimes banners" tabindex="-1" role="tabpanel" aria-labelledby="tab2">
		<div class="tabbed--item__inner">
			<div class="tabbed--item__content">
				<h4><strong>Showtimes banners</strong></h4>
				<p>The other title</p>
			</div>

			<div class="tab-slider">
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							grid1
						</div>
						<div class="tab-slider__grid-item">
							grid2
						</div>
						<div class="tab-slider__grid-item">
							grid3
						</div>
						<div class="tab-slider__grid-item">
							grid4
						</div>
					</div>
				</div>
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							grid1
						</div>
						<div class="tab-slider__grid-item">
							grid2
						</div>
						<div class="tab-slider__grid-item">
							grid3
						</div>
						<div class="tab-slider__grid-item">
							grid4
						</div>
					</div>
				</div>
				<div class="tab-slider-item">
					<div class="tab-slider__image">
						<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/tab-slider.png" alt="tab-slider">
					</div>

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							grid1
						</div>
						<div class="tab-slider__grid-item">
							grid2
						</div>
						<div class="tab-slider__grid-item">
							grid3
						</div>
						<div class="tab-slider__grid-item">
							grid4
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
