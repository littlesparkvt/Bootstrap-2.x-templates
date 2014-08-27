<?php
/**
 * @package WordPress
 */
?>
<!-- FOOTER -->
      <footer>
        <div class="container">
        <div class="row">
          <div class="span3 footerpipe">
            <?php /* Widgetized sidebar */
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
            <?php endif; ?>
            </div>

          <div class="span3 footerpipe">
            <?php /* Widgetized sidebar */
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
            <?php endif; ?>
          </div>
          <div class="span3 footerpipe">
            <?php /* Widgetized sidebar 3 */
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
            <?php endif; ?>
          </div>
          <div class="span3">
            <?php /* Widgetized sidebar 4 */
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </footer>


<!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-collapse.js"></script>
    
</body></html>
	<?php wp_footer(); ?><!-- Keep this, plugins use it to hook and execute code -->
</body>
</html>