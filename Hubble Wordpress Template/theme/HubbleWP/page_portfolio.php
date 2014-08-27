<?php
/**
* @package WordPress
* @subpackage Your Theme Name
*/
/*
Template Name: Portfolio
*/
?>

<?php get_header(); query_posts('post_type=portfolio&showposts=-1') ?>

<div <?php post_class('portfolio-page taxonomy-portfolio') ?>>

<h1><?php the_title(); ?></h1>

      
<!-- Portfolio row of columns -->
 <div class="row" id="portfolio">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<div class="span3 portthumb">
		<?php if (has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink() ?>" rel="nofollow" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('portfolio-image', array( 'title' => ''.get_the_title().'' ) ); ?>
		</a>
			<?php } ?>
	</div>

<?php endwhile; endif; // End Portfolio ?>
<!-- Portfolio Container -->

</div>
</div>
</div>

<?php get_footer(); ?>