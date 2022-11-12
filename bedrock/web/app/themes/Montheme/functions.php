<?php


/* =========Garder le title dans l'onglet======== */

function wpc_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
 }
 add_action( 'after_setup_theme', 'wpc_theme_support' );


/* ======================== Ajout Boostrap ================*/

function montheme_register_styles() {
    
	wp_register_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
	wp_register_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", [], false, true );
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" );
    wp_enqueue_script('bootstraps-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");
    
}

add_action( 'wp_enqueue_scripts', 'montheme_register_styles');


/* ======================== Ajoout titre ================*/

function montheme_title($title) {

    return 'Mon site - top du top';
}

add_filter('wp_title', 'montheme_title');

/* ======================== Ajout séparateur onglet ================*/

function montheme_title_separator($sep) {
    return '->';
}

add_filter('document_title_separator', 'montheme_title_separator');