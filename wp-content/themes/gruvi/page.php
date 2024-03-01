<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<main class="main" id="content">
	<?php the_content(); ?>

	<section class="container animate hide">
		<h1><strong>Our technology</strong></h1>
		<h2>Entertainment<br /> with <strong>data-driven</strong><br /> Audience insights</h2>

		<p class="lead">We are experts using <strong>data application</strong> to fill gaps unoccupied by traditional media and research agencies.</p>
		<p class="lead"><strong>HOW DO WE CUT THROUGH THE NOISE AND GET PEOPLE TO WATCH OUR ADS?<br />
		How do we cut through the noise and get people to watch our ads?</strong></p>

		<div class="animated">
			<div class="animate">Test</div>
			<div class="animate">Test</div>
			<div class="animate">Test</div>
		</div>

		<p>Growing up in post-World War II era Arizona, young <strong>Sammy Fabelman</strong> aspires to become a filmmaker as he reaches adolescence, but soon discovers a shattering family secret and explores how the power of films can help him see the truth.</p>
		<div class="animate">
			<a href="" class="btn">learn more</a>
			<a href="" class="btn btn--border">learn more</a>
			<a href="" class="btn btn--large">Connect with us</a>
			<a href="" class="btn btn--border btn--large">Connect with us</a>
		</div>
		<div class="btn__group animate">
			<a href="" class="btn--circle">sales lead</a>
			<a href="" class="btn--circle btn--circle-large">account management lead</a>
		</div>

		<h2>Case studies</h2>
		<h2><strong>Case studies</strong></h2>
		<p>The start of the Swedish Swimrun season and a tribute to the origin of the sport. Utö and its surrounding islands will provide the scene for great races along magical trails and protected open-water swims.</p>

		<h3>The Solution <strong>Topgun: Maverick</strong></h3>
		<h3><strong>Check out our recent successes in film distribution, movie production, cinema and video on demand.</strong></h3>

		<div class="animated animate">
			<div class="animate">Test</div>
			<div class="animate">Test</div>
			<div class="animate">Test</div>
		</div>

		<h4><strong>Account Management</strong></h4>
		<p>The French Riviera presented itself at its best for this year's ÖTILLÖ Swimrun Cannes. Very warm and sunny weather, the biggest field in ÖTILLÖ history with almost 800 participants from 38 nations and a challenging and varied course through and around the beautiful City of Cannes made for the perfect finale to the 2023 ÖTILLÖ Swimrun World Series season.</p>

		<div class="spacer size-1 animate animate--visible"><p class="small">Spacer size 1</p></div>
		<div class="spacer size-2 animate animate--visible"><p class="small">Spacer size 2</p></div>
		<div class="spacer size-3 animate animate--visible"><p class="small">Spacer size 3</p></div>
		<div class="spacer size-4 animate animate--visible"><p class="small">Spacer size 4</p></div>
		<div class="spacer size-5 animate animate--visible"><p class="small">Spacer size 5</p></div>
		<div class="spacer size-6 animate animate--visible"><p class="small">Spacer size 6</p></div>
	</section>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>
