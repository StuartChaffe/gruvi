<?php
$video = get_field('video');
$poster = get_field('poster');
$options = get_field('options');
$id = get_field('id');
?>
<?php if($id): ?><a id="<?php echo $id; ?>"></a><?php endif; ?>
<section class="video <?php echo $options['size']; ?> <?php if(true == $options['contain']): ?> video__contain<?php endif; ?> animate">
	<?php if ( $video ): ?>
	<video muted preload loop autoplay <?php if ( $poster ): ?>poster="<?php echo $poster['url']; ?>"<?php endif; ?>>
		<source src="<?php echo $video['url']; ?>" type="video/mp4">
		<p>Your user agent does not support the HTML5 Video element.</p>
	</video>
	<?php endif; ?>
</section>
