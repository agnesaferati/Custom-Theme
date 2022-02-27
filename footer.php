
<div class="footer">

  <div class="nav-menu">
      <?php
         
         $args = array(
             'theme_location' => 'Footer'
         );

    ?>
    
    <?php wp_nav_menu($args); ?>
  </div>

    <h3><?php bloginfo('name');  ?> -&copy; <?php echo date('Y'); ?></h3>

</div>

<?php wp_footer(); ?>


</body>
</html>

