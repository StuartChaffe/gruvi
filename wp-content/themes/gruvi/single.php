<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="content">
		<div class="post-content">
			<p class="small"><a href="/blog">Blog</a> > <?php the_title(); ?></p>
			<h1 class="wp-block-heading has-small-font-size heading-4"><strong><?php the_title(); ?></strong></h1>
			Updated on <?php the_time( 'd/m/Y' ); ?>
			<br />
			Author: <?php the_author(); ?>

			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
