<?php
/*
 * Template Name: HOME
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 */
get_header(); ?>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="row">
        <div class="span12 hidden-phone">
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item">
                <?php if ( of_get_option('homeslideimg1') ) { ?>
                    <img src="<?php echo of_get_option('homeslideimg1'); ?>" />
                  <?php } ?>
              </div>
              <div class="item">
                 <?php if ( of_get_option('homeslideimg2') ) { ?>
                    <img src="<?php echo of_get_option('homeslideimg2'); ?>" />
                  <?php } ?>
              </div>
              <div class="item active">
                <?php if ( of_get_option('homeslideimg3') ) { ?>
                    <img src="<?php echo of_get_option('homeslideimg3'); ?>" />
                  <?php } ?>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          </div>
        </div>
        
     </div>
     <!-- <div class="row landingSlogan">
        <div class="span12">
          <h2>Put your slogan here. This is the perfect place to put some eye catching text. It is also great for SEO!</h2>
        </div>
     </div> -->
      <!-- Portfolio row of columns -->
      <div class="row">
       <div class="span1">
        <?php if ( of_get_option('home_featureimage1') ) { ?>
          <img src="<?php echo of_get_option('home_featureimage1'); ?>" />
        <?php } ?>
       </div>
       <div class="span3">
        <h3><?php echo of_get_option('home_featuretitle', 'no entry'); ?></h3>
        <p><?php echo of_get_option('home_featurecontent', 'no entry' ); ?></p>
        </div>
        <div class="span1">
         <?php if ( of_get_option('home_featureimage2') ) { ?>
          <img src="<?php echo of_get_option('home_featureimage2'); ?>" />
        <?php } ?>
        </div>
        <div class="span3">
        <h3><?php echo of_get_option('home_featuretitle2', 'no entry'); ?></h3>
        <p><?php echo of_get_option('home_featurecontent2', 'no entry' ); ?></p>
        </div>
        <div class="span1">
          <?php if ( of_get_option('home_featureimage3') ) { ?>
          <img src="<?php echo of_get_option('home_featureimage3'); ?>" />
        <?php } ?>
        </div>
        <div class="span3">
        <h3><?php echo of_get_option('home_featuretitle3', 'no entry'); ?></h3>
        <p><?php echo of_get_option('home_featurecontent3', 'no entry' ); ?></p>  
        </div>
    </div>
        </div>
<?php get_footer(); ?> 