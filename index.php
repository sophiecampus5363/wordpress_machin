<?php get_header(); ?>


    <section>
      <?php if (have_posts()): ?>
        <div class="container"><!-- container -->
          >
            <?php  while(have_posts()): the_post();  ?>  
            
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

   