<?php 

  get_header();

   if(have_posts()) :
    while(have_posts()) : the_post(); ?>

    <div class="post">
       <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
       <p class="post-info">
          <?php echo the_date('Y/m,h:i:sa'); ?> | by
           <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
           <?php the_author(); ?></a> Posted in 

           <?php 
           
              $categories = get_the_category();
              $seperator = ",";
              $output = '';

              if($categories) {
                 foreach($categories as $category) {
                    $output .=  $category->cat_name . $seperator;
                 }

                 echo trim($output, $seperator);
              }
           
           
           ?>
        </p>
       <?php the_content(); ?>
    </div>

<?php

   endwhile;

else:

    echo  "No content found!";

   endif;

   get_footer();

?>





