<?php
	$posts = new WP_Query( array(
		'post_type' => 'work',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>
<?php if ($posts->have_posts()): ?>
<section class="work">
	<?php while($posts->have_posts()) : $posts->the_post();
		$specs = get_field('specs', get_the_ID());
		$metrics = get_field('metrics', get_the_ID());
		$details = get_field('list_details', get_the_id());
	?>
	<div class="work-item container">
		<h3><strong><?php the_title(); ?></strong></h3>
		<?php if ($details['description']): ?><div class="width--half"><p><?php echo $details['description']; ?></p></div><?php endif; ?>

		<div class="animated work-item__details<?php if('Left' == $details['image_position']): ?> work-item__image--left<?php endif; ?>">
			<div class="work-item__stats <?php echo $details['image_size']; ?> animate">
				<?php if ($details['image_1']): ?><img loading="lazy" src="<?php echo $details['image_1']['url']; ?>" alt="<?php echo $details['image_1']['alt']; ?>" /><?php endif; ?>
				<div><p><?php echo $specs['country']; ?> | <?php echo $specs['category']; ?> | <?php echo $specs['type']; ?></p></div>
				<ul class="work-details__metrics">
					<li><p><?php echo $metrics['metric_1']; ?></p></li>
					<li class="angle"><div class="angle-inner"></div></li>
					<li><p><?php echo $metrics['metric_2']; ?></p></li>
					<li class="angle"><div class="angle-inner"></div></li>
					<li><p><?php echo $metrics['metric_3']; ?></p></li>
				</ul>
			</div>

			<?php if ($details['other_image']): ?>
			<div class="work-item__image animate">
				<img loading="lazy" src="<?php echo $details['other_image']['url']; ?>" alt="<?php echo $details['other_image']['alt']; ?>" />
			</div>
			<?php endif; ?>
		</div>
			<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="btn animate">learn more</a>

	</div>
	<hr class="wp-block-separator has-alpha-channel-opacity across--visible">
	<?php endwhile; wp_reset_query(); ?>
</section>

<?php endif; ?>
