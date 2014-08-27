<?php
/*
 * @package WordPress
 */
get_header(); ?>

	<div class="row">
		<div class="span12">
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>
<?php get_footer(); ?> 