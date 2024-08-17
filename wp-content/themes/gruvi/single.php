<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
			// $terms = get_the_terms(get_the_id(), 'category');
			$categories = get_the_category();
		?>
	<article id="content">
		<div class="post-content">
			<p class="small mb"><a href="/blog">Blog</a> > <?php the_title(); ?></p>
			<h1 class="wp-block-heading has-small-font-size heading-4 mb"><strong><?php the_title(); ?></strong></h1>
			<?php if(has_post_thumbnail()) { ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'Banner' ); ?>
			</div>
			<?php } ?>

			<div class="post-meta">
				<div class="card__meta--author"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></div>
				<div class="card__meta small">
					<p><?php echo get_the_author(); ?> / <?php the_date(); ?></p>
					<div class="card__meta--categories">
						<?php foreach($categories as $category) {
							echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
						} ?>
					</div>
				</div>
			</div>
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
