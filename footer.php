<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                        
                       
   <?php if( get_theme_mod( 'footer_text_block') != "" ): ?>
            <p class="footer-text">
                <?php echo get_theme_mod( 'footer_text_block'); endif ?>
            </p>  
                        
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<script>
  jQuery(document).ready(function($) {
    $("#page").fitVids();
  });
</script>

<?php wp_footer(); ?>

</body>

</html>
