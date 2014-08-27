<?php
/**
 * @package WordPress
 */

get_header(); ?>
	<div class="row">

		<div class="span9">

			<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>">
				
				<div class="span8">
					<h2>
						<a href="<?php the_permalink() ?>" title="" rel="bookmark">
						<?php the_title() ?>
						</a>
					</h2>
				<?php the_content() ?>
			</div>

<br class="clr"/>

<?php comments_template() ?>

</div>
<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>