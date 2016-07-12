<?php
/**
 * This template renders the homepage of the website
 *
 *
 * @package understrap
 */

get_header(); ?>

    <div class="wrapper" id="wrapper-index">

        <div class="slider">
            <img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/home_slider1.png" style="width:100%;"/>
            </div>
        
	   <div id="content" class="container">

            <div class="row">
           
    	       <div id="primary" class="content-area">
                   
                     <main id="main" class="site-main" role="main">
                    
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            
                            <section class="feature">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                  <img src="<?php the_field('first_box_image');?>"/>
                                  <div class="caption caption-first">
                                  <h2><a href="<?php the_field('first_box_url');?>"><?php the_field ('first_box_text');?></a></h2>
                                  <p><?php the_field('first_box_text_reveal');?></p>
                                  </div>     
                                </div>

                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <img src="<?php the_field('second_box_image');?>"/>
                                    <div class="caption caption-second">
                                  <h2><a href="<?php the_field('second_box_url');?>"><?php the_field ('second_box_text');?></a></h2>
                                  </div>
                                </div>

                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <img src="<?php the_field('third_box_image');?>"/>
                                    <div class="caption caption-third">
                                  <h2><a href="<?php the_field('third_box_url');?>"><?php the_field ('third_box_text');?></a></h2>
                                  </div>
                                </div>

                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <img src="<?php the_field('fourth_box_image');?>"/>
                                    <div class="caption caption-fourth">
                                  <h2><a href="<?php the_field('fourth_box_url');?>"><?php the_field ('fourth_box_text');?></a></h2>
                                  </div>
                                </div>


                            </section>

                        <?php endwhile; ?>
                        
                        <?php the_posts_navigation(); ?>
                        
                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?> 
                        
                    <?php endif; ?>
                        
                    </main><!-- #main -->
                   
    	       </div><!-- #primary -->
        
           

            </div><!-- .row -->
           
       </div><!-- Container end -->
        
    </div><!-- Wrapper end -->

<?php get_footer(); ?>
