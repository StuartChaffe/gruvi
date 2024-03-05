<?php
// $size = get_field('size');
// $id		= get_field('tabbed_id');
?>


<section class="tabbed animate">
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

					<div class="tab-slider__grid">
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
							<p class="small caps"><strong>Fast loading</strong></p>
							<p class="small">Gruvi specialises in creating landing pages, banners, and social media players for movies and film festivals.</p>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
						</div>
						<div class="tab-slider__grid-item">
							<?php echo get_icon('icon-fast-loading'); ?>
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
