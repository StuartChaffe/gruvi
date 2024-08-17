<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<main class="main" id="content">
	<div class="mega-title animate">
		<div class="mega-title__content">
			<div class="acf-innerblocks-container">
				<h1 class="wp-block-heading has-text-align-center animate"><strong><?php echo single_cat_title( '', false ); ?></strong></h1>
			</div>
		</div>
	</div>

	<section class="news-grid bkg--white mixitup" data-ref="mixitup" >
		<?php while ( have_posts() ) : the_post();
			// $terms = get_the_terms(get_the_id(), 'category');
			$categories = get_the_category();
			$slugs = wp_list_pluck($categories, 'slug');
			$class_names = join(' ', $slugs);
			// $excerpt = strip_tags(get_the_excerpt());
			$author = get_the_author_meta($id);
		?>
		<a href="<?php the_permalink(); ?>" title="Article: <?php the_title(); ?>" class="card animate">
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
				<div class="card__meta small"><p><?php echo get_the_author(); ?><br /><?php the_date(); ?></p></div>
			</div>
		</a>
		<?php endwhile; ?>
	</section>
</main>
<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>

<?php get_footer(); ?>
