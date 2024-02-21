<!-- <header class="site-header">
	<div class="site-header__inner">
		<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<button class="site-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Mobile Menu</button>
		<nav class="site-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>
	</div>
</header>

<div class="mobile-menu" id="mobile-menu">
	<nav class="mobile-menu__nav">
		<button class="mobile-menu__close-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Close Menu</button>
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
	</nav>
</div> -->


<header class="site-header">
	<div class="site-header__inner">
		<a href="<?php echo home_url(); ?>" class="site-header__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Gruvi logo" />
		</a>
		<button class="site-header__menu-btn hamburger" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>

		<nav class="site-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, ) ); ?>
		</nav>

		<a href="" class="btn">Let's talk</a>
	</div>

</header>

<div class="mobile-menu" id="mobile-menu">
	<nav class="mobile-menu__nav">
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
	</nav>
</div>
