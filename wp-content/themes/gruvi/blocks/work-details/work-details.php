<?php
if (!isset($args)) {
	$args = null;
}

$defaults = [
	'specs' => get_field('specs', get_the_ID()),
	'cover' => get_field('cover_image', get_the_ID()),
	'description' => get_field('description', get_the_ID()),
	'metrics' => get_field('metrics', get_the_ID()),
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

		<img loading="lazy" src="<?php echo $args['cover']['url']; ?>" alt="<?php echo $args['cover']['alt']; ?>" />

		<p><?php echo $args['description']; ?></p>
		<p><?php echo $args['metrics']['metric_1']; ?></p>
		<p><?php echo $args['metrics']['metric_2']; ?></p>
		<p><?php echo $args['metrics']['metric_3']; ?></p>
	</div>
</div>
