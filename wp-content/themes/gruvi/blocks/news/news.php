<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
	$id = get_field('id');

?>
<?php if($id) { ?><a id="<?php echo $id; ?>"></a><?php } ?>
<?php if ($posts->have_posts()) { ?>
	<section class="news-grid mixitup" data-ref="mixitup" >
		<?php while($posts->have_posts()) : $posts->the_post();
			// $terms = get_the_terms(get_the_id(), 'category');
			$categories = get_the_category();
			$slugs = wp_list_pluck($categories, 'slug');
			$class_names = join(' ', $slugs);
		?>
		<a href="<?php the_permalink($id); ?>" title="Article: <?php the_title(); ?>" class="card animate mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
			<div class="card__media">
				<figure>
				<?php if(has_post_thumbnail()) { ?>
					<?php the_post_thumbnail( 'Post' ); ?>
					<!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"> -->
					<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/noimage.png" alt="No image" />
				<?php } ?>
				</figure>
			</div>
			<div class="card__content">
				<div class="card__title title"><p><strong><?php the_title(); ?></strong></p></div>
				<div class="card__excerpt"><?php the_excerpt(); ?></div>
				<div class="post-meta">
					<div class="card__meta--author"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></div>
					<div class="card__meta">
						<div class="card__meta small"><p><?php echo get_the_author(); ?><br /><?php the_date(); ?></p></div>
					</div>
				</div>
			</div>
		</a>
	<?php endwhile; wp_reset_query(); ?>
	</section>
	<div class="container wp-block-buttons u-center"><button class="btn btn--black news-grid--more" id="load-more">Load more</button></div>
	<div class="mixitup-page-list container hide"></div>
<?php } ?>

