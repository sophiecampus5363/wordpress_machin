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
  <a class="navbar-brand" href="/wordpress">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

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
        <h1>Portfolio Soh Landra</h1>
    </div>
</div> <!-- container -->