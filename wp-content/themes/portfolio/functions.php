<?php

//nav menu and thumbnails
if (function_exists('register_nav_menus')){
	register_nav_menus (array('superior'=>'Menu Principal Superior'));
	register_nav_menus (array('footer-a'=>'Menu footer a'));
	register_nav_menus (array('footer-b'=>'Menu footer b'));

}
function add_link_atts($atts) {
$atts['class'] = "nav-link";
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
//navlink
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
//
if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
}
//mostrar barra admin
if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if
//abajo carga shortcodes

// Adding Shortcodes to the_excerpt() function
add_filter('the_excerpt', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value', 'do_shortcode');
// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
//abao carga estilos
function theme_scripts(){
    wp_enqueue_style('theme-style-base', get_stylesheet_directory_uri() .'/assets/scss/portfolio-base.min.css');
    wp_enqueue_style('owl-style', get_stylesheet_directory_uri() .'/assets/scss/owl.carousel.min.css');
    wp_enqueue_style('portfolio-style', get_stylesheet_directory_uri() .'/assets/scss/portfolio.css');
    wp_enqueue_script('theme-js-base', get_stylesheet_directory_uri() .'/assets/js/portfolio-base.min.js');
     wp_enqueue_script('owl-js', get_stylesheet_directory_uri() .'/assets/js/owl.carousel.min.js');
    wp_enqueue_script('theme-js', get_stylesheet_directory_uri() .'/assets/js/portfolio.js');

}
add_action('wp_enqueue_scripts','theme_scripts');
//subir svg
function custom_mimes( $mimes = array() ) {
	// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mimes' );
//fin subir svg

