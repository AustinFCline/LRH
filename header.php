<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            

                <div class="container" style="position:relative;">


                            <div class="navbar-header">

                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                  <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Your site title as branding in the menu -->
                                <a id="logo" href="index.php" title="Barcelona 226 Center Exclusive - Official site"><img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/logo2.png" style="max-width:325px; height:120px;" alt="Barcelona226"></a>

                            </div>

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                            <div class="callout">
                                    <div class="top-search">
                                <?php echo do_shortcode("[wp_google_searchbox]");?>
                                    </div>
                            <div class="top-icons">
                                <ul>
                                    <li><img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/health-icon.svg"><a href="#">LRH</br> Physicians</a></li>
                                    <li><img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/patient-portal-icon.svg"><a href="#">Patient</br> Portal</a></li>
                                    <li><img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/give-icon.svg"><a href="#">Giving</a></li>
                                    <li><img src="http://localhost:8888/LRH/wp-content/uploads/2016/07/careers-icon.svg"><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            </div><!--end callout-->

                </div> <!-- .container -->
                
            
        </nav><!-- .site-navigation -->
        
    </div><!-- .wrapper-navbar end -->






