<?php
$type = get_field('bkg_type');
// $size = get_field('size');
$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'acf/spacer');
$image = get_field('image');
$mobile_image = get_field('mobile_image');
$video = get_field('video');
$poster = get_field('poster');
$place = get_field('content_bottom');
?>
<section class="page-header fade <?php echo $type; ?> <?php if(true == $place): ?> page-header__content-bottom<?php endif; ?>" <?php if($image): ?>style="background-image: url(<?php echo $image['url'] ?>);"<?php endif; ?>>
	<?php if($mobile_image): ?>
		<img loading="lazy" class="page-header__image--small" src="<?php echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt']; ?>" />
	<?php endif; ?>
		<?php if($allowed_blocks): ?>
			<div class="container">
				<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
			</div>
		<?php endif; ?>
		<?php if ( $video ): ?>
		<div class="page-header__video">
			<video muted preload loop autoplay <?php if ( $poster ): ?>poster="<?php echo $poster['url']; ?>"<?php endif; ?>>
				<source src="<?php echo $video['url']; ?>" type="video/mp4">
				<p>Your user agent does not support the HTML5 Video element.</p>
			</video>
		</div>
		<?php endif; ?>
</section>
