<?php 

function add_theme_scripts() {
    // Haupt CSS Datei einbinden (style.css)
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Eigene CSS-Dateien einbinden
    //                 |-ID der Datei     |-gibt den Pfad zum Theme-Root aus                |- abhängigkeiten, Version (1.1), Media: all
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3', 'all' );
	wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/main.css', array(), '0.1', 'all' );

    // Eigene JS-Dateien einbinden
    //                 |-ID der Datei     |-gibt den Pfad zum Theme-Root aus                        |- abhängigkeiten, Version (1.1), weitere dinge wie "async" möglich
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), false, false);
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), false, false);

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>