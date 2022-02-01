<div id="hero-wrapper">
	<div id="hero-home" class="add-active" style="background:url(<?php the_field('hero_bg'); ?>); background-size:cover; background-repeat:no-repeat; background-position:top center;">
		<div class="left-hand-hero animated fadeInDown" data-delay="400">
			<div>
				&nbsp;
			</div>
			<p class="text-animation add-active p-0">
				<?= get_bloginfo('name'); ?>
			</p>
			<div class="social-icons">
				<a href="https://www.facebook.com/AdachiRestaurant/" target="_blank" rel="noopener noreferrer">
					<span class="screen-reader-text">Facebook Page Link</span>
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/adachirestaurant/" target="_blank" rel="noopener noreferrer">
					<span class="screen-reader-text">Instagram Profile Link</span>
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
		<div class="container">
			<?php if (get_field('hero_sub_title')) : ?>
				<p class="animated text-animation add-active fadeInUp" data-delay="200"><?php the_field('hero_sub_title'); ?></p>
			<?php endif; ?>
			<?php if (get_field('hero_title')) : ?>
				<h1 class="animated text-animation add-active fadeInUp" data-delay="400"><?php the_field('hero_title'); ?></h1>
			<?php endif; ?>

		</div>
	</div>
</div>