<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="article">



		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<div class="meta">
			<span class="author"><?php the_author_posts_link(); ?></span> |
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		</div>
		<!-- /post details -->


		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
