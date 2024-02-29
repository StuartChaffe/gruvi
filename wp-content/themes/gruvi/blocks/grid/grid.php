<?php
$block1 = get_field('block_1');
$block2 = get_field('block_2');
$block3 = get_field('block_3');
$block4 = get_field('block_4');
?>

<section class="grid--block">
	<div class="grid container animate">
		<a href="<?php if($block1['link']): ?><?php echo $block1['link']['url']; ?><?php endif; ?>" class="grid-item">
			<?php if($block1['title']): ?><h4><strong><?php echo $block1['title']; ?></strong></h4><?php endif; ?>
			<?php if($block1['image']): ?><img src="<?php echo $block1['image']['url']; ?>" alt="<?php echo $block1['image']['alt']; ?>" /><?php endif; ?>
			<?php if($block1['content']): ?><p><?php echo $block1['content']; ?></p><?php endif; ?>
			<div class="arrow"><svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-9, -9)" fill="currentColor" fill-rule="nonzero">
						<path d="M11.2071,9.79289 C10.8166,9.40237 10.1834,9.40237 9.79289,9.79289 C9.40237,10.1834 9.40237,10.8166 9.79289,11.2071 L11.2071,9.79289 Z M25.5,26.5 C26.0523,26.5 26.5,26.0523 26.5,25.5 L26.5,16.5 C26.5,15.9477 26.0523,15.5 25.5,15.5 C24.9477,15.5 24.5,15.9477 24.5,16.5 L24.5,24.5 L16.5,24.5 C15.9477,24.5 15.5,24.9477 15.5,25.5 C15.5,26.0523 15.9477,26.5 16.5,26.5 L25.5,26.5 Z M9.79289,11.2071 L24.79289,26.2071 L26.2071,24.79289 L11.2071,9.79289 L9.79289,11.2071 Z"></path>
					</g>
				</g>
			</svg></div>
		</a>
		<a href="<?php if($block2['link']): ?><?php echo $block2['link']['url']; ?><?php endif; ?>" class="grid-item">
			<?php if($block2['title']): ?><h4><strong><?php echo $block2['title']; ?></strong></h4><?php endif; ?>
			<?php if($block2['content']): ?><p><?php echo $block2['content']; ?></p><?php endif; ?>
			<?php if($block2['image']): ?><img src="<?php echo $block2['image']['url']; ?>" alt="<?php echo $block2['image']['alt']; ?>" /><?php endif; ?>
			<div class="arrow"><svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-9, -9)" fill="currentColor" fill-rule="nonzero">
						<path d="M11.2071,9.79289 C10.8166,9.40237 10.1834,9.40237 9.79289,9.79289 C9.40237,10.1834 9.40237,10.8166 9.79289,11.2071 L11.2071,9.79289 Z M25.5,26.5 C26.0523,26.5 26.5,26.0523 26.5,25.5 L26.5,16.5 C26.5,15.9477 26.0523,15.5 25.5,15.5 C24.9477,15.5 24.5,15.9477 24.5,16.5 L24.5,24.5 L16.5,24.5 C15.9477,24.5 15.5,24.9477 15.5,25.5 C15.5,26.0523 15.9477,26.5 16.5,26.5 L25.5,26.5 Z M9.79289,11.2071 L24.79289,26.2071 L26.2071,24.79289 L11.2071,9.79289 L9.79289,11.2071 Z"></path>
					</g>
				</g>
			</svg></div>
		</a>
		<a href="<?php if($block3['link']): ?><?php echo $block3['link']['url']; ?><?php endif; ?>" class="grid-item">
			<?php if($block3['title']): ?><h4><strong><?php echo $block3['title']; ?></strong></h4><?php endif; ?>
			<?php if($block3['content']): ?><p><?php echo $block3['content']; ?></p><?php endif; ?>
			<?php if($block3['image']): ?><img src="<?php echo $block3['image']['url']; ?>" alt="<?php echo $block3['image']['alt']; ?>" /><?php endif; ?>
			<div class="arrow"><svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-9, -9)" fill="currentColor" fill-rule="nonzero">
						<path d="M11.2071,9.79289 C10.8166,9.40237 10.1834,9.40237 9.79289,9.79289 C9.40237,10.1834 9.40237,10.8166 9.79289,11.2071 L11.2071,9.79289 Z M25.5,26.5 C26.0523,26.5 26.5,26.0523 26.5,25.5 L26.5,16.5 C26.5,15.9477 26.0523,15.5 25.5,15.5 C24.9477,15.5 24.5,15.9477 24.5,16.5 L24.5,24.5 L16.5,24.5 C15.9477,24.5 15.5,24.9477 15.5,25.5 C15.5,26.0523 15.9477,26.5 16.5,26.5 L25.5,26.5 Z M9.79289,11.2071 L24.79289,26.2071 L26.2071,24.79289 L11.2071,9.79289 L9.79289,11.2071 Z"></path>
					</g>
				</g>
			</svg></div>
		</a>
		<a href="<?php if($block4['link']): ?><?php echo $block4['link']['url']; ?><?php endif; ?>" class="grid-item">
			<?php if($block4['title']): ?><h4><strong><?php echo $block4['title']; ?></strong></h4><?php endif; ?>
			<?php if($block4['content']): ?><p><?php echo $block4['content']; ?></p><?php endif; ?>
			<?php if($block4['image']): ?><img src="<?php echo $block4['image']['url']; ?>" alt="<?php echo $block4['image']['alt']; ?>" /><?php endif; ?>
			<div class="arrow"><svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-9, -9)" fill="currentColor" fill-rule="nonzero">
						<path d="M11.2071,9.79289 C10.8166,9.40237 10.1834,9.40237 9.79289,9.79289 C9.40237,10.1834 9.40237,10.8166 9.79289,11.2071 L11.2071,9.79289 Z M25.5,26.5 C26.0523,26.5 26.5,26.0523 26.5,25.5 L26.5,16.5 C26.5,15.9477 26.0523,15.5 25.5,15.5 C24.9477,15.5 24.5,15.9477 24.5,16.5 L24.5,24.5 L16.5,24.5 C15.9477,24.5 15.5,24.9477 15.5,25.5 C15.5,26.0523 15.9477,26.5 16.5,26.5 L25.5,26.5 Z M9.79289,11.2071 L24.79289,26.2071 L26.2071,24.79289 L11.2071,9.79289 L9.79289,11.2071 Z"></path>
					</g>
				</g>
			</svg></div>
		</a>
	</div>
</section>
