<!--this file is The Loop for the archive page.-->

<?php get_header(); ?>
<section id="social_hashtags">


	<?php if(have_posts()): ?>

		<div class="the-social-posts">
		<?php while(have_posts()): the_post(); ?>
			<div class="a-social-post">
				<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
				<p><?php the_title(); ?></p>
			</div>
		<?php endwhile; ?>
		</div>
		

	<?php else: ?>
		<h4>No Content was found</h4>
	<?php endif; ?>
		<p class="clear"> &nbsp; </p>
		 <?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 
</section>
<?php get_footer(); ?>