<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <?php wp_head(); ?>
      
  </head>



  <body>

  <header>
  
<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">home</a>
      </div>
  
  
 

<?php
    wp_nav_menu( array(
        'menu'                => 'top-menu',
        'theme_location'      => 'primary',
        'depth'               => 2,
        'container'           => 'div',
        'container_class'     => 'navbar-collapse collapse',
        'container_id'        => 'navbar',
        'menu_class'          => 'nav navbar-nav navbar-right',
        'fallback_cb'         => 'wp_bootstrap_navwalker::fallback',
        'walker'              => new wp_bootstrap_navwalker()
      )
    ); ?>

</div>
</nav>

  </header>

<div class="container"><!-- container -->
    <div class="jumbotron">
        <h1>Portfolio Soh Landra</h1>
    </div>
</div> <!-- container -->