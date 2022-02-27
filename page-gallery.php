<?php 

  get_header();

   if(have_posts()) :
    while(have_posts()) : the_post(); ?>

    <div class="post page">
         
         <div class="container">
             <div class="title-container">
                  <h1><?php the_title(); ?></h1>
             </div>
             <div class="container-container">
                  <h5><?php the_content(); ?></h5>
             </div>
         </div>
       
    </div>

<?php

   endwhile;

else:

    echo  "No content found!";

   endif;

   get_footer();

?>
