<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <?php global $options; global $woocommerce; ?>
  
  <body <?php body_class(); ?>>

  <header>
    <div class="main-header">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row ">
                <div class="col-4 text-start">
                    <a href="./" class="logo">
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                        Peak <br>
                        Growth <br>
                        Media 
                    </a>
                </div>
                <div class="col-8 text-end">
                    <div class="menuWrap">
                        <!-- <ul class="menu">
                            <li><a href="#services">Service</a></li>
                            <li><a href="#cases">Case Studies</a></li>
                            <li><a href="#faqs">FAQs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li class="hdr-btn"><a href="#">Start a Project?</a></li>
                        </ul> -->
                        <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="wrapper">