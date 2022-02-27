<?php 

  get_header();

   if(have_posts()) :
    while(have_posts()) : the_post(); ?>

    <div class="post">
      <h1><?php the_title(); ?></h1>
       <h5><?php the_content(); ?></h5>
    </div>

<?php

   endwhile;

else:

    echo  "No content found!";

   endif;

   get_footer();

?>