<?php
/**
 * Template Name: Pricing
 *@package WordPress
 */
get_header(); ?>
<div class="content">
	<div class="row">
		<div class="span12">
			<h1><?php the_title(); ?></h1>
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page_pricing' );
			?>
		</div>
		<p></p>
	</div>
 <div class="row">
        <div class="span2 pricewell pricehover <?php echo of_get_option('featured_pricing', 'no entry' ); ?>">
          <div class="price"><h2><?php echo of_get_option('pricing1_name', 'no entry'); ?></h2></div>
          <ul class="unstyled pricing animated fadeIn ">
            <li><?php echo of_get_option('pricing1_structure', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing1_option1', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing1_option2', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing1_option3', 'no entry'); ?></li>
          </ul>
          <h3><?php echo of_get_option('pricing1_price', 'no entry'); ?></h3>
          <a class="btn btn-success" href="<?php echo of_get_option('pricing1_link'); ?>">Subscribe</a>
        </div>

        <div class="span2 pricewell pricehover <?php echo of_get_option('featured_pricing2', 'no entry' ); ?>">
          <div class="price"><h2><?php echo of_get_option('pricing2_name', 'no entry'); ?></h2></div>
          <ul class="unstyled pricing animated fadeIn ">
            <li><?php echo of_get_option('pricing2_structure', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing2_option1', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing2_option2', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing2_option3', 'no entry'); ?></li>
          </ul>
          <h3><?php echo of_get_option('pricing2_price', 'no entry'); ?></h3>
          <a class="btn btn-success subscribe" href="<?php echo of_get_option('pricing2_link'); ?>">Subscribe</a>
        </div>

        <div class="span2 pricewell pricehover <?php echo of_get_option('featured_pricing3', 'no entry' ); ?>">
          <div class="price"><h2><?php echo of_get_option('pricing3_name', 'no entry'); ?></h2></div>
          <ul class="unstyled pricing animated fadeIn">
            <li><?php echo of_get_option('pricing3_structure', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing3_option1', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing3_option2', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing3_option3', 'no entry'); ?></li>
          </ul>
          <h3><?php echo of_get_option('pricing3_price', 'no entry'); ?></h3>
          <a class="btn btn-success" href="<?php echo of_get_option('pricing3_link'); ?>">Subscribe</a>
        </div>

        <div class="span2 pricewell pricehover <?php echo of_get_option('featured_pricing4', 'no entry' ); ?>">
          <div class="price"><h2><?php echo of_get_option('pricing4_name', 'no entry'); ?></h2></div>
          <ul class="unstyled pricing animated fadeIn">
            <li><?php echo of_get_option('pricing4_structure', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing4_option1', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing4_option2', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing4_option3', 'no entry'); ?></li>
          </ul>
          <h3><?php echo of_get_option('pricing4_price', 'no entry'); ?></h3>
          <a class="btn btn-success" href="<?php echo of_get_option('pricing4_link'); ?>">Subscribe</a>
        </div>

        <div class="span2 pricewell pricehover <?php echo of_get_option('featured_pricing5', 'no entry' ); ?>">
          <div class="price"><h2><?php echo of_get_option('pricing5_name', 'no entry'); ?></h2></div>
          <ul class="unstyled pricing animated fadeIn">
            <li><?php echo of_get_option('pricing5_structure', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing5_option1', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing5_option2', 'no entry'); ?></li>
            <li><?php echo of_get_option('pricing5_option3', 'no entry'); ?></li>
          </ul>
          <h3><?php echo of_get_option('pricing5_price', 'no entry'); ?></h3>
          <a class="btn btn-success" href="<?php echo of_get_option('pricing5_link'); ?>">Subscribe</a>
        </div>
      </div>
      </div>
</div>
<?php get_footer(); ?> 