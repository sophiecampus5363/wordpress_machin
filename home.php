<?php get_header(); ?>

    <section>
      
        <div class="container"><!-- container -->

  <?php // var_dump($wp_query); ?>

    <?php if (have_posts()): ?>
            <?php  while(have_posts()): the_post();  ?>  

  <?php echo $post->post_title; ?>          
            
            <?php get_template_part('content'); ?>
     
            <?php endwhile; ?>
                 
    <?php else: ?>       
          <div class="row">
              <div class="col-xs-12">
                <p>pas de résultat</p>
              </div>
          </div>
      </div> <!-- container -->
    <?php endif; ?>
  </div> <!-- container -->
</section>    

    <?php get_footer(); ?>

   