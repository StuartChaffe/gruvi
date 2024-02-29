<footer class="site-footer fade">
	<a href="<?php echo home_url(); ?>" class="site-footer__logo">
		<img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Gruvi logo" />
	</a>
	<div class="site-footer__inner">
		<nav class="site-footer__nav">
			<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => false, ) ); ?>
		</nav>

		<p class="heading-3 caps u-center"><strong>Partner with us<br /> to solve<br /> your audience challenges</strong></p>

		<a href="" class="btn btn--large">Connect with us</a>

		<ul class="social-links">
		<?php if(get_field('twitter', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('facebook', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('instagram', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('youtube', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('linkedin', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
		<?php endif; ?>
		</ul>
	</div>
</footer>
