<?php


/**
 * Proper way to enqueue scripts and styles
 */
function mr_enqueue_scripts() {
    // Versions
    $css_ver = date("m.y", filemtime(get_stylesheet_directory() .'/dist/app.css' ));
    $js_ver = date("m.y", filemtime( get_stylesheet_directory() . '/dist/app.js' ));

	wp_enqueue_style( 'main-style', get_template_directory_uri().'/dist/app.css', null, $css_ver );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/dist/app.js', null, $js_ver, true );
}

add_action( 'wp_enqueue_scripts', 'ax_enqueue_scripts' );

