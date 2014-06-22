<!--this file is The Loop for the archive page.-->

<?php get_header(); ?>
<section id="social_hashtags">


	<?php if(have_posts()): ?>

		<div class="the-social-posts">
		<?php while(have_posts()): the_post(); ?>
			<div class="a-social-post">
				<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
				<ul>
					<li>
						<?echo get_post_meta(get_the_ID(), 'social_hashtag_userhandle', true);?> 
					</li>
					<li>
						<?echo get_post_meta(get_the_ID(), 'social_hashtag_platform', true);?> 
					</li>
					<li>
						<?echo get_post_meta(get_the_ID(), 'social_hashtag_timestamp', true);?> 
					</li>
					<li>
						<?echo get_post_meta(get_the_ID(), 'social_hashtag_post_link', true);?> 
					</li>
				</ul>
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