<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WordUp Łódź Rocks</title>
      
  <?php wp_head() ?>
      
  </head>  
  <body>

    <!-- Menu -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-lg-8">
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.ewelinamuc.com/screencast/">WordUp Łódź</a>
        </div>
          
        <?php wp_nav_menu( array( 
            'theme_location' 	  => 'Main menu',
            'menu' 	  => 'Main menu',
            'container' 		    => 'div',
            'container_class' 	=> 'collapse navbar-collapse',
            'menu_class'      	=> 'nav navbar-nav',
            'depth'           	=> 0,
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
            ); ?>          
        </div>  
        <!-- Statyczne menu z Bootstrapa

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Strona główna</a></li>
            <li><a href="#">Spotkania</a></li>
            <li><a href="#">Kontakt</a></li>
          </ul>
         -->
        <div class="col-lg-4">
          <?php get_search_form(true); ?>
        </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- /Menu -->
