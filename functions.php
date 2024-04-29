<?php 

add_action( 'wp_enqueue_scripts', 'elsaforcongress_enqueue_styles' );

function elsaforcongress_enqueue_styles() {
	wp_enqueue_style( 
		'elsaforcongress-style', 
		get_stylesheet_uri()
	);
}
