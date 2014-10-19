<?php

/**
* Load CSS and Javascript
*/
function load_styles_and_scripts(){
	//load styles
	wp_enqueue_style(
		'bootstrap-style',
		get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style(
		'main-style',
		get_template_directory_uri() . '/style.css'	); 

	//load scripts
	wp_enqueue_script('jquery');

	wp_enqueue_script(
		'bootstrap-scripts',
		get_template_directory_uri() . '/js/bootstrap.min.js' );
}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/* Rejestrujemy nasze menu */
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
}
add_action( 'init', 'register_my_menu' );


/* Rejestracja sidebaru o nazwie "Primary"*/
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Powtórz register_sidebar() jeżeli chcesz dodać kolejne. */
}

/**
// Rejestracja wp_bootstrap_navwalker */
    require_once('wp_bootstrap_navwalker.php');

/* sprawdzanie ilosci kolumn */

function wplodz_bootstrap_class($sidebar_id, $max_columns) {
  $sidebars = wp_get_sidebars_widgets();
  $count = count((array) $sidebars[$sidebar_id]); 
  
  if($count > $max_columns) {
    $count = $max_columns;
  }
  	
  return 'md-col-' . floor((12 / $count));
}
?>
