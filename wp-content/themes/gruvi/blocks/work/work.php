<?php
	$posts = new WP_Query( array(
		'post_type' => 'work',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>
<?php if ($posts->have_posts()) { ?>
<section class="work">
	<?php while($posts->have_posts()) : $posts->the_post();
		$when = get_field('when', get_the_id());
		$where = get_field('where', get_the_id());
		$dates = get_field('date', get_the_id());
		$price = get_field('price', get_the_id());
		$tickets = get_field('ticket', get_the_id());
		$terms = get_the_terms(get_the_id(), 'event_category');
		$tags = get_the_terms(get_the_id(), 'event_tags');

		$specs = get_field('specs', get_the_ID());
		$metrics = get_field('metrics', get_the_ID());
		$details = get_field('list_details', get_the_id());
	?>
	<div class="work-item">
		<?php if ($details['description']): ?><?php echo $details['description']; ?><?php endif; ?>
		<br />
		<?php echo $details['image_size']; ?>
		<?php if ($details['image_1']): ?><img loading="lazy" src="<?php echo $details['image_1']['url']; ?>" alt="<?php echo $details['image_1']['alt']; ?>" /><?php endif; ?>
		<div><p><?php echo $specs['country']; ?> | <?php echo $specs['category']; ?> | <?php echo $specs['type']; ?></p></div>
		<ul class="work-details__metrics">
			<li><p><?php echo $metrics['metric_1']; ?></p></li>
			<li class="angle"><div class="angle-inner"></div></li>
			<li><p><?php echo $metrics['metric_2']; ?></p></li>
			<li class="angle"><div class="angle-inner"></div></li>
			<li><p><?php echo $metrics['metric_3']; ?></p></li>
		</ul>

		<?php echo $details['image_position']; ?>
		<?php if ($details['other_image']): ?><img loading="lazy" src="<?php echo $details['other_image']['url']; ?>" alt="<?php echo $details['other_image']['alt']; ?>" /><?php endif; ?>


		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="btn">learn more</a>
	</div>
	<?php endwhile; wp_reset_query(); ?>

</section>

<?php } ?>
