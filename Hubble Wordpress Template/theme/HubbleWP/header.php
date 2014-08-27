<?php
/**
 * @package WordPress
 */
?><xml version="1.0" encoding="UTF-8"/>
<!DOCTYPE html 

	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/custom.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/responsive.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/animate.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-transition.js"></script>
<script type="text/javascript">
      $(document).ready(function () {
         $('.carousel').carousel();
      });
    </script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="navbar animated fadeIn">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <p class="brand">
          	<?php if ( of_get_option('logo') ) { ?>
                    <img src="<?php echo of_get_option('logo'); ?>" />
            <?php } ?>
          </p>
          <div class="nav-collapse">
          	<nav id="access" role="navigation">
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		  