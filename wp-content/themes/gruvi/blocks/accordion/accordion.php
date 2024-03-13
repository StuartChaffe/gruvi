<?php
$counter = 0;
$accordion = get_field('accordion_items');
// var_dump($accordion);
if($accordion):
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
					<?php
						$team = $item['team'];
						if($team):
					?>
					<div class="accordion__team">
					<?php foreach($team as $item): ?>
						<div class="accordion__team-item">
							<?php if ($item['image']): ?><img loading="lazy" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" /><?php endif; ?>
							<?php if ($item['title']): ?><p><?php echo $item['title']; ?></p><?php endif; ?>
							<?php if ($item['location']): ?><p class="accordion__team-item__location small txt--grey"><?php echo $item['location']; ?></p><?php endif; ?>
							<?php if ($item['name']): ?><p class="caps"><strong><?php echo $item['name']; ?></strong></p><?php endif; ?>
						</div>
					<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
</section>
<?php endif; ?>
