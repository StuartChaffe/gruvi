<?php
if (!isset($args)) {
	$args = null;
}

$defaults = [
	'specs' => get_field('specs', get_the_ID()),
	'cover' => get_field('cover_image', get_the_ID()),
	'description' => get_field('description', get_the_ID()),
	'metrics' => get_field('metrics', get_the_ID()),
	'buttons' => get_field('buttons', get_the_ID()),
];

$args = wp_parse_args($args, $defaults);
?>
<div class="work-details animate">
	<div class="work-details__inner">
		<div class="work-details__specs">
			<div><p><?php echo $args['specs']['category']; ?></p></div>
			<div><p><?php echo $args['specs']['date']; ?></p></div>
			<div><p><?php echo $args['specs']['type']; ?></p></div>
			<div><p><?php echo $args['specs']['country']; ?></p> <img loading="lazy" src="<?php echo $args['specs']['country_flag']['url']; ?>" alt="<?php echo $args['specs']['country_flag']['alt']; ?>" /></div>
		</div>
		<div class="work-details__info animate">
			<div class="work-details__cover">
				<img loading="lazy" src="<?php echo $args['cover']['url']; ?>" alt="<?php echo $args['cover']['alt']; ?>" />
			</div>
			<div class="work-details__desc">
				<p class="small"><?php echo $args['description']; ?></p>
				<ul class="work-details__metrics">
					<li><p><?php echo $args['metrics']['metric_1']; ?></p></li>
					<li class="angle"><div class="angle-inner"></div></li>
					<li><p><?php echo $args['metrics']['metric_2']; ?></p></li>
					<li class="angle"><div class="angle-inner"></div></li>
					<li><p><?php echo $args['metrics']['metric_3']; ?></p></li>
				</ul>
			</div>
			<div class="work-details__team">
				<?php if ($args['buttons']['title']): ?><h4><strong><?php echo $args['buttons']['title']; ?></strong></h4><?php endif; ?>
				<div class="work-details__buttons">
					<?php if ($args['buttons']['small_button']['url']): ?><a href="<?php echo $args['buttons']['small_button']['url']; ?>" class="btn--circle"><?php echo $args['buttons']['small_button']['title']; ?></a><?php endif; ?>
					<?php if ($args['buttons']['large_button']['url']): ?><a href="<?php echo $args['buttons']['large_button']['url']; ?>" class="btn--circle btn--circle-large"><?php echo $args['buttons']['large_button']['title']; ?></a><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
