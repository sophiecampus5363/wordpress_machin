<?php get_header(); ?>

    <section>
   



      <?php if (have_posts()): ?>
        <div class="container"><!-- container -->
       
        <div class="row ">
              <div class="col-xs-12">
                    <p class="lead">Liste des articles avec l'étiquette <?php single_tag_title(); ?></p>
              </div>                
        </div> <!-- row -->


            <?php  while(have_posts()): the_post(); ?>
     
           <?php get_template_part('content'); ?>

        <?php endwhile; ?>

        <div class="row">
            <div class = "col-xs-12">
                 <nav>
                    <ul class = "machin-pager">
                            <li class='pull-left'><?php previous_post_link(); ?></li>
                        <li class='pull-right'><?php next_post_link(); ?><li>
                    </ul>
                 </nav> <!-- col-12 -->
             </div> <!-- /row -->
        </div>

                 
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

   