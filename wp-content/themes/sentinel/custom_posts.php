<?php

function clients_custom_post() {

	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'client' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'client' ),
		'menu_name'           => __( 'Clients', 'client' ),
		'parent_item_colon'   => __( 'Parent Client:', 'client' ),
		'all_items'           => __( 'All Clients', 'client' ),
		'view_item'           => __( 'View Client', 'client' ),
		'add_new_item'        => __( 'Add New Client', 'client' ),
		'add_new'             => __( 'Add New', 'client' ),
		'edit_item'           => __( 'Edit Client', 'client' ),
		'update_item'         => __( 'Update Item', 'client' ),
		'search_items'        => __( 'Search Clients', 'client' ),
		'not_found'           => __( 'Not found', 'client' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'client' ),
	);
	$args = array(
		'label'               => __( 'client', 'client' ),
		'description'         => __( 'Client Description', 'client' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
		//'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 4,
		//'menu_icon'           => get_bloginfo('template_url').'/images/client-icon.png',
		'menu_icon'           => 'dashicons-universal-access',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'client', $args );

}
add_action( 'init', 'clients_custom_post' );

function projects_custom_post() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'project' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'project' ),
		'menu_name'           => __( 'Projects', 'project' ),
		'parent_item_colon'   => __( 'Parent Project:', 'project' ),
		'all_items'           => __( 'All Projects', 'project' ),
		'view_item'           => __( 'View Projects', 'project' ),
		'add_new_item'        => __( 'Add New Project', 'project' ),
		'add_new'             => __( 'Add New', 'project' ),
		'edit_item'           => __( 'Edit Project', 'project' ),
		'update_item'         => __( 'Update Item', 'project' ),
		'search_items'        => __( 'Search Projects', 'project' ),
		'not_found'           => __( 'Not found', 'project' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project' ),
	);
	$args = array(
		'label'               => __( 'project', 'project' ),
		'description'         => __( 'Project Description', 'project' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt','editor', 'thumbnail' ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'projects_custom_post' );


function testimonials_custom_post() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'testimonial' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'testimonial' ),
		'menu_name'           => __( 'Testimonials', 'testimonial' ),
		'parent_item_colon'   => __( 'Parent Testimonial:', 'testimonial' ),
		'all_items'           => __( 'All Testimonials', 'testimonial' ),
		'view_item'           => __( 'View Testimonial', 'testimonial' ),
		'add_new_item'        => __( 'Add New Testimonial', 'testimonial' ),
		'add_new'             => __( 'Add New', 'testimonial' ),
		'edit_item'           => __( 'Edit Testimonial', 'testimonial' ),
		'update_item'         => __( 'Update Item', 'testimonial' ),
		'search_items'        => __( 'Search Testimonials', 'testimonial' ),
		'not_found'           => __( 'Not found', 'testimonial' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'testimonial' ),
	);
	$args = array(
		'label'               => __( 'testimonial', 'testimonial' ),
		'description'         => __( 'Testimonial Description', 'testimonial' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
		//'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-format-quote',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonials_custom_post' );

function team_custom_post() {

	$labels = array(
		'name'                => _x( 'Team', 'Post Type General Name', 'team' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'team' ),
		'menu_name'           => __( 'Team', 'team' ),
		'parent_item_colon'   => __( 'Parent Team Member:', 'team' ),
		'all_items'           => __( 'All Members', 'team' ),
		'view_item'           => __( 'View Member', 'team' ),
		'add_new_item'        => __( 'Add New Team member', 'team' ),
		'add_new'             => __( 'Add New', 'team' ),
		'edit_item'           => __( 'Edit Team member', 'team' ),
		'update_item'         => __( 'Update Item', 'team' ),
		'search_items'        => __( 'Search Team', 'team' ),
		'not_found'           => __( 'Not found', 'team' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'team' ),
	);
	$args = array(
		'label'               => __( 'team', 'team' ),
		'description'         => __( 'Testimonial Description', 'team' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
		//'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_custom_post' );