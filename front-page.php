<?php get_header(); ?>

    <section>
      <?php if (have_posts()): ?>
        <div class="container"><!-- container -->
            <?php  while(have_posts()): the_post();  ?>  
            <div class="row">
              <div class="col-12">
                <?php the_content(); ?>
            </div>
          </div>
          
            <?php endwhile; ?>
                 
    <?php else: ?>       
          <div class="row">
              <div class="col-12">
                <p>pas de résultat</p>
              </div>
          </div>
      </div> <!-- container -->
    <?php endif; ?>
  </div> <!-- container -->
</section>    

    <?php get_footer(); ?>

   