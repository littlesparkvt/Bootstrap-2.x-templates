<?php
/*
 * Template Name: Blog
 *
 * @package WordPress
 */?>

	<div class="row">
		<div class="span12">
<h1><?php the_title(); ?></h1>
		</div>
		<div class="row">
			<div class="span6">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?> 