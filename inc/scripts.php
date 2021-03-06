<?php
/**
 * Enqueue scripts and styles.
 */
function tetcom_scripts() {
	wp_enqueue_style( 'tetcom-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro::bold,bolditalic,light,lightitalic,regular,regularitalic', false ); 

	wp_enqueue_script( 'tetcom-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tetcom_scripts' );

