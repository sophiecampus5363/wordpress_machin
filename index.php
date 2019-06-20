<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="lorem ipsum gna gna gna" />

    <?php wp_head(); ?>
      
  </head>



  <body>

  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <a class="nav-item nav-link" href="#">Menu 1 </a>
      <a class="nav-item nav-link" href="#">Menu 2</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Menu 3</a>  -->

    <?php
    wp_nav_menu( array(
        'menu'                => 'top-menu',
        'theme_location'      => 'primary',
        'depth'               => 2,
        'container'           => 'div',
        'container_class'     => 'collapse navbar-collapse',
        'container_id'        => 'navbarNavAltMarkup',
        'menu_class'          => 'nav navbar-nav',
        'fallback_cb'         => 'wp_bootstrap_navwalker::fallback',
        'walker'              => new wp_bootstrap_navwalker()
      )
    ); ?>



    </div>
  </div>
</nav>

  </header>

<div class="container"><!-- container -->
    <div class="jumbotron">
        <h1>coucou c'est nous</h1>
    </div>
</div> <!-- container -->



    <section>
      <?php if (have_posts()): ?>
        <div class="container"><!-- container -->
            <?php  while(have_posts()): the_post(); ?>

        <div class="row m-dw-30">
                <div class="col-2">
                   <?php the_post_thumbnail('thumbnail'); ?>
                </div> 
                <div class="col-10">
                        <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1> 
                            <?php the_excerpt(); ?>

                            
                </div>                
        </div> <!-- row -->

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

    <?php wp_footer(); ?>

  </body>
</html>