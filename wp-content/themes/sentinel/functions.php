<?php
require_once('custom_posts.php');

add_theme_support('post-thumbnails');
add_image_size( 'project-size', 970, 450, true );


// hide admin bar for non-user
if (!current_user_can('edit_posts')) {
	show_admin_bar(false);
}

/**
 * Enqueue scripts and styles
 */
function sentinel_scripts_styles() {
	global $wp_styles;
	wp_deregister_script('jquery');
	wp_register_script('sentinel-jquery', (get_template_directory_uri() . '/js/jquery-1.12.3.min.js'), false, '1.12.3');

	/* JS */
	wp_enqueue_script( 'sentinel-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), false, false );
	wp_enqueue_script( 'sentinel-visibility', (get_template_directory_uri() . '/dist/components/visibility.js'), array(), false, false );
	wp_enqueue_script( 'sentinel-tab', get_template_directory_uri() . '/dist/components/tab.js', array(), false, false );
	wp_enqueue_script( 'sentinel-transition', get_template_directory_uri() . '/dist/components/transition.js', array(), false, false );
	wp_enqueue_script( 'sentinel-slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, false );
	wp_enqueue_script( 'sentinel-custom', get_template_directory_uri() . '/js/custom.js', array(), false, false );

	/* CSS */
	wp_enqueue_style( 'sentinel-semantic-base', get_template_directory_uri() . '/css/semantic-base.css', array(), false, "screen, projection" );
	wp_enqueue_style( 'sentinel-slick', get_template_directory_uri() . '/css/slick.css', array(), false, "screen, projection" );
	wp_enqueue_style( 'sentinel-style', get_template_directory_uri() . '/css/style.css', array(), false, "screen, projection" );
	wp_enqueue_style( 'sentinel-mobile', get_template_directory_uri() . '/css/mobile.css', array(), false, "only screen and (max-width: 1200px)" );

}
add_action( 'wp_enqueue_scripts', 'sentinel_scripts_styles' );

function register_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' )
		)
	);
}
add_action( 'init', 'register_menus' );


class main_walker extends Walker_Nav_Menu {

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'item';
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '';
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'.$class_names." ". $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "\n";
	}
}

