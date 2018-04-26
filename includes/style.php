<?php 

function shabuna_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'fontsGoogleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style( 'fontsGoogleapis2', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
	wp_enqueue_style( 'popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	

}

add_action( 'wp_enqueue_scripts', 'shabuna_style' );



?>