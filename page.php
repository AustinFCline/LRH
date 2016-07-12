<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">

    <div class="ftr-image" style="width:100%;">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large', array('class'=>'img-fluid fullimg'  )); ?>
    </a>
        <?php endif; ?>
    </div>

    <?php 
    if ( is_page('22')) { 
        echo '<div class="subnav">
            <ul>
                <li><a href="#">First</a></li>
                <li><a href="#">Second</a></li>
                <li><a href="#">Third</a></li>
            </ul>
        </div>'; 
    } 
?>
    
    <div  id="content" class="container">

        <div class="row">
        
    	   <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
           
                 <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
               
    	    </div><!-- #primary -->

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
