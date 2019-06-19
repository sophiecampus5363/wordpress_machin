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
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>

  </header>

<div class="container">
    <div class="jumbotron">
        <h1>coucou c'est nous</h1>
    </div>
</div> <!-- container -->

    <section>
        <div class="container">

        <div class="row m-dw-30">
                <div class="col-xs-2">
                    <img src="" alt="" class="img-responsive">
                </div> 
                <div class="clos-xs-10">
                        <h1> Titre de l'article </h1> 
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat nisi modi 
                                quibusdam quisquam. Esse, sunt. Iusto tenetur excepturi autem officia. Consequuntur nisi 
                                sed quidem ad ipsa praesentium nihil veritatis.
                            </p>  
                </div>                
        </div> <!-- row -->

        <div class="row m-dw-30">
                <div class="col-xs-2">
                    <img src="" alt="" class="img-responsive">
                </div> 
                <div class="clos-xs-10">
                        <h1> Titre de l'article </h1> 
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat nisi modi 
                                quibusdam quisquam. Esse, sunt. Iusto tenetur excepturi autem officia. Consequuntur nisi 
                                sed quidem ad ipsa praesentium nihil veritatis.
                            </p>  
                </div>                
        </div> <!-- row -->

        <div class="row m-dw-30">
                <div class="col-xs-2">
                    <img src="" alt="" class="img-responsive">
                </div> 
                <div class="clos-xs-10">
                        <h1> Titre de l'article </h1> 
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat nisi modi 
                                quibusdam quisquam. Esse, sunt. Iusto tenetur excepturi autem officia. Consequuntur nisi 
                                sed quidem ad ipsa praesentium nihil veritatis.
                            </p>  
                </div>                
        </div> <!-- row -->

        <div class="row m-dw-30">
                <div class="col-xs-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/fragile-yes.jpg" alt="" class="img-responsive">
                </div> 
                <div class="clos-xs-10">
                        <h1> Titre de l'article </h1> 
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat nisi modi 
                                quibusdam quisquam. Esse, sunt. Iusto tenetur excepturi autem officia. Consequuntur nisi 
                                sed quidem ad ipsa praesentium nihil veritatis.
                            </p>  
                </div>                
        </div> <!-- row -->
    
</div> <!-- container -->

    </section>    


    <div> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptate sapiente animi ad quam. Eius, rerum quasi magni iste rem possimus molestias deserunt amet dignissimos, impedit explicabo quos at numquam?
    </div>

    <?php wp_footer(); ?>

  </body>
</html>