<?php
/**
 * Figma User Journey Map Theme Functions
 */

// Theme setup
function figma_journey_setup() {
    // Add theme support for various features
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'figma-journey' ),
    ) );
}
add_action( 'after_setup_theme', 'figma_journey_setup' );

// Enqueue scripts and styles
function figma_journey_scripts() {
    wp_enqueue_style( 'figma-journey-style', get_stylesheet_uri(), array(), '2.0' );
    
    // Add Google Fonts
    wp_enqueue_style( 'figma-journey-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'figma_journey_scripts' );

// Customizer settings
function figma_journey_customize_register( $wp_customize ) {
    // Site title and description
    $wp_customize->add_section( 'figma_journey_options', array(
        'title'    => __( 'Journey Map Options', 'figma-journey' ),
        'priority' => 30,
    ) );
}
add_action( 'customize_register', 'figma_journey_customize_register' );
