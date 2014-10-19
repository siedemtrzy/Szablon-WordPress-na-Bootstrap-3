<?php	/*	Template Name: Strona glowna	*/ ?> <!-- Dodanie nazwy strony (atrybut strony) -->

<?php get_header(); ?> <!-- Dodanie nagłówka z header.php -->

<!-- Tytuł, opis i button na 8 kolumn -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="jumbotron">
                <h1>Idę na WordCamp</h1>
                <p class="lead">Oł jee, już niedługo największa w Polsce konferencja o WordPressie, czyli WordCamp. Dwa dni ciągłego gadania o                  WordPressie. Czy można chcieć czegoś więcej...?</p>
                
                <p class="lead">Prelegenci z Polski i całego świata (w tym z Automattic). </p>
                
                <p><strong>15-16 listopada 2014 r. Warszawa</strong></p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Idę na WordCamp!</a></p>
            </div>
        </div>
    <!-- / Koniec tytuł, opisu i button -->
          
<!-- Sidebar na 4 kolumny -->
        <div class="col-lg-4">
            <div id="sidebar-primary" class="sidebar">
                <?php dynamic_sidebar( 'primary' ); ?>
            </div>
        </div><!-- / Sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?> <!-- Dodanie stopki z footer.php -->

