<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content/themes/Theme/style.css">
    <title><?php bloginfo('name'); ?></title>
</head><?php wp_head(); ?>


<body <?php body_class(); ?>>

  <div class="header">
      <h2><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
      <h5><?php bloginfo('description'); ?></h5>

        <?php if(is_page('gallery')) { ?> 
            -Thank you for view our page!
        <?php } ?>

      <div class="nav-menu">

        <?php
         
             $args = array(
                 'theme_location' => 'Primary'
             );

        ?>
        
        <?php wp_nav_menu($args); ?>

      </div>

  </div>



    
