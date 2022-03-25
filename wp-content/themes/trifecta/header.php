<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/menu.css?v=<?php echo microtime();?>"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css?v=<?php echo microtime();?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css?v=<?php echo microtime();?>"> -->
        <link rel="icon" type="image/png" href="<?php echo wp_get_attachment_url(get_option('favicon_upload'),'full');?>" />
        <title><?php echo get_bloginfo( 'name' ); ?> <?php echo get_bloginfo( 'description' ); ?><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        
        <!-- <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->
        <main>
            <!--================Header==================-->
            <nav>
                <div class="navbar">
                    <i class='bx bx-menu'></i>
                    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo wp_get_attachment_url(get_option('logo_upload'),'full');?>" class="img-fluid" alt=""></a></div>
                    <div class="menu-container d-flex align-items-center">
                        <div class="nav-links">
                            <div class="sidebar-logo">
                                <span class="logo-name"><img src="<?php echo wp_get_attachment_url(get_option('logo_upload'),'full');?>" class="img-fluid" alt=""></span>
                                <i class='bx bx-x'></i>
                            </div>
                            <?php
                            wp_nav_menu( [
                                            'menu' => 'header-menu',
                                            'menu_class' => 'links'
                                        ] );
                            ?>
                            <!-- <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Contact</a></li>
                                
                            </ul> -->
                            <div class="invest-btn-box d-block d-lg-none">
                            <a href="<?php echo home_url('contact-us'); ?>" class="lnvest-btn">Invest With Us</a>
                        </div>
                        </div>
                        <div class="invest-btn-box d-none d-lg-block">
                            
                            <a href="<?php echo home_url('contact-us'); ?>" class="lnvest-btn">Invest With Us</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
            
            <!--================End Header===================-->