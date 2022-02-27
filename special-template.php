<?php 

// Template Name: Special Layout //

  get_header();

   if(have_posts()) :
    while(have_posts()) : the_post(); ?>

    <div class="post">
       <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

       <div class="info-box">
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, excepturi?</p>
       </div>
       <?php the_content(); ?>
    </div>

<?php

   endwhile;

else:

    echo  "No content found!";

   endif;

   get_footer();

?>
