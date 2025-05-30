<?php
/**
 * Figma WordPress Example functions and definitions
 *
 * @package Figma_WordPress_Example
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function figma_wp_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'figma-wp-example' ),
            'footer'  => esc_html__( 'Footer Menu', 'figma-wp-example' ),
        )
    );

    // Switch default core markup to output valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for core custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'figma_wp_setup' );

/**
 * Enqueue scripts and styles.
 */
function figma_wp_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'figma-wp-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Enqueue additional CSS files
    wp_enqueue_style( 'figma-wp-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
    
    // Enqueue JavaScript
    wp_enqueue_script( 'figma-wp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'figma_wp_scripts' );

/**
 * Register widget area.
 */
function figma_wp_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'figma-wp-example' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'figma-wp-example' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    // Footer widget areas
    for ( $i = 1; $i <= 3; $i++ ) {
        register_sidebar(
            array(
                'name'          => sprintf( esc_html__( 'Footer %d', 'figma-wp-example' ), $i ),
                'id'            => 'footer-' . $i,
                'description'   => esc_html__( 'Add widgets here.', 'figma-wp-example' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
add_action( 'widgets_init', 'figma_wp_widgets_init' );