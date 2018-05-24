<?php
function wp_shabuna_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',array( ), '', true  );
	wp_enqueue_script( 'googleMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDaT38cUp83O6mntSXf3blJWWx5BlCEUOs&callback=initMap', array(), '' ,true );	 
	wp_enqueue_script( 'cdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',array( ), '', true  );
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri().'/vendor/scrollreveal/scrollreveal.min.js',array(), '', true   );
	wp_enqueue_script( 'popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js',array(  ), '', true  );
	wp_enqueue_script( 'creative', get_template_directory_uri() . '/assets/js/creative.min.js',array(  ), '', true  );
	wp_enqueue_script( 'slickJs', get_template_directory_uri() . '/vendor/slick/slick.min.js',array(  ), '', true  );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js',array(  ), '', true  );
}

add_action( 'wp_enqueue_scripts', 'wp_shabuna_scripts' );

?>
