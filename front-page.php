<?php get_header(); ?>

<?php $args_blog = array(
    'post_type' => 'post',
    'posts_per_page' => 2
    );
$req_blog = new WP_Query($args_blog); ?>

<?php if ($req_blog->have_posts()):  ?>
  <section id="blog-front">
      <div class="container"><!-- container -->
        <div class="row">
          <?php while($req_blog->have_posts() ): $req_blog->the_post(); ?>
            <div class="col-xs-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                     <h2> <?php the_title(); ?></h2>
                  </div>
                  <div class="panel-body">    
                    
                  <?php the_post_thumbnail( 'medium',
                  array( 'class' => 'img-responsive aligncenter' ) ); ?>
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="panel-footer">
                        <p>  
                        <?php echo lgmac_give_me_meta_01(
                                      esc_attr( get_the_date ( 'c') ), 
                                      esc_html( get_the_date()), 
                                      get_the_category_list('', ', '), 
                                      get_the_tag_list('', ', ')
                        ); ?></small>
                        </p>
                  </div>
                </div>  
            </div> <!-- col-6--> 
          <?php endwhile; wp_reset_postdata(); ?> 
        </div> <!-- row --> 
      </div>  <!-- container --> 
      
  </section>         
    
<?php endif ?>


    <?php get_footer(); ?>

   