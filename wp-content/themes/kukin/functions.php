<?php
/**
 * Template functions and definitions
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

add_filter('upload_mimes', function($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
});

function register_header_menu() {
	register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

function header_nav_class( $classes, $item ) {
	$classes[] = 'header__menu-item';
	return $classes;
}
add_filter('nav_menu_css_class' , 'header_nav_class' , 10 , 2);

function walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    $menu_locations = get_nav_menu_locations();

    if ( has_term($menu_locations['header-menu'], 'nav_menu', $item) ) {
       $item_output = preg_replace('/<a /', '<a class="header__menu-link" ', $item_output, 1);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'walker_nav_menu_start_el', 10, 4);