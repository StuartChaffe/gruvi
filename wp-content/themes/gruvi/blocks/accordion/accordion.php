<?php
$counter = 0;
$accordion = get_field('accordion_items');

if($accordion) {
?>
<section class="accordion">
	<?php foreach($accordion as $item) { $counter++; ?>
		<div class="accordion__item animate">
			<div class="container">
			<button aria-expanded="false" class="accordion__handle<?php if($item['hover_image']): ?> accordion__has-image<?php endif; ?>" aria-controls="accordion-<?php echo $block['id'] . '_' . $counter; ?>" id="<?php echo sanitize_title($item['accordion_title']); ?>">
				<div class="accordion__title"><?php echo $item['accordion_title']; ?></div>
				<?php if($item['accordion_subtitle']): ?><div class="accordion__subtitle"><p><?php echo $item['accordion_subtitle']; ?></p> <?php if($item['hover_image']): ?><img loading="lazy" class="accordion__hover" src="<?php echo $item['hover_image']['url']; ?>" alt="<?php echo $item['hover_image']['alt']; ?>" /><?php endif; ?></div><?php endif; ?>
				<div class="accordion__icon">&nbsp;</div>
			</button>
			<div class="accordion__body" id="accordion-<?php echo $block['id'] . '_' . $counter; ?>" role="region" aria-labelledby="<?php echo sanitize_title($item['accordion_title']); ?>">
				<?php echo $item['accordion_body']; ?>
			</div>
			</div>
		</div>
	<?php } ?>
</section>
<?php } ?>
