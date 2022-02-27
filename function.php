<?php 
 
  function LearningWebsite_resources() {
      wp_enqueue_style('style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_style', 'LearningWebsite_resources');

    //Navigation Menus//

register_nav_menu(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));