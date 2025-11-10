<?php
/**
 * Theme setup and asset loading for MEXA Theme.
 */

define( 'MEXA_THEME_VERSION', '1.0.0' );

define( 'MEXA_THEME_URI', get_template_directory_uri() );

define( 'MEXA_THEME_PATH', get_template_directory() );

/**
 * Enqueue theme styles and scripts.
 */
function mexa_enqueue_assets() {
    wp_enqueue_style( 'mexa-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap', array(), null );
    wp_enqueue_style( 'mexa-style', get_stylesheet_uri(), array( 'mexa-fonts' ), MEXA_THEME_VERSION );

    wp_enqueue_script( 'mexa-main-js', MEXA_THEME_URI . '/assets/js/main.js', array( 'jquery' ), MEXA_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'mexa_enqueue_assets' );

/**
 * Register theme supports.
 */
function mexa_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 40,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'post-formats', array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    register_nav_menus( array(
        'primary' => esc_html__( 'Головне меню', 'mexa' ),
        'footer'  => esc_html__( 'Меню у футері', 'mexa' ),
    ) );
}
add_action( 'after_setup_theme', 'mexa_theme_setup' );
