<!--this file is The Loop for the archive page.-->
<?php get_header(); ?>
<section id="social_hashtags">


	<?php if(have_posts()): ?>

		<div class="the-social-posts">
		<?php while(have_posts()): the_post(); ?>
			<div class="a-social-post">
				<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
				<span class="social-description"><?php the_title(); ?></span>
			</div>
		<?php endwhile; ?>
		</div>

<!--		<ul>

		<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
				<span class="social-description"><?php the_title(); ?></span>
			</li>
		<?php endwhile; ?>
		
		</ul>
-->
	<?php else: ?>
		<h4>No Content was found</h4>
	<?php endif; ?>
		<p class="clear"> &nbsp; </p>
</section>
<?php get_footer(); ?>