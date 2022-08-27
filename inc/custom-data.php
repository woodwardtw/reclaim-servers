<?php
/**
 * Custom data
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//server custom post type

// Register Custom Post Type server
// Post Type Key: server

function reclaim_create_server_cpt() {

  $labels = array(
    'name' => __( 'Servers', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Server', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Server', 'textdomain' ),
    'name_admin_bar' => __( 'Server', 'textdomain' ),
    'archives' => __( 'Server Archives', 'textdomain' ),
    'attributes' => __( 'Server Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Server:', 'textdomain' ),
    'all_items' => __( 'All Servers', 'textdomain' ),
    'add_new_item' => __( 'Add New Server', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Server', 'textdomain' ),
    'edit_item' => __( 'Edit Server', 'textdomain' ),
    'update_item' => __( 'Update Server', 'textdomain' ),
    'view_item' => __( 'View Server', 'textdomain' ),
    'view_items' => __( 'View Servers', 'textdomain' ),
    'search_items' => __( 'Search Servers', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into server', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this server', 'textdomain' ),
    'items_list' => __( 'Server list', 'textdomain' ),
    'items_list_navigation' => __( 'Server list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Server list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'server', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-server',
  );
  register_post_type( 'server', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'reclaim_create_server_cpt', 0 );


//update custom post type

// Register Custom Post Type update
// Post Type Key: update

function reclaim_create_update_cpt() {

  $labels = array(
    'name' => __( 'Updates', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Update', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Update', 'textdomain' ),
    'name_admin_bar' => __( 'Update', 'textdomain' ),
    'archives' => __( 'Update Archives', 'textdomain' ),
    'attributes' => __( 'Update Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Update:', 'textdomain' ),
    'all_items' => __( 'All Updates', 'textdomain' ),
    'add_new_item' => __( 'Add New Update', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Update', 'textdomain' ),
    'edit_item' => __( 'Edit Update', 'textdomain' ),
    'update_item' => __( 'Update Update', 'textdomain' ),
    'view_item' => __( 'View Update', 'textdomain' ),
    'view_items' => __( 'View Updates', 'textdomain' ),
    'search_items' => __( 'Search Updates', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into update', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this update', 'textdomain' ),
    'items_list' => __( 'Update list', 'textdomain' ),
    'items_list_navigation' => __( 'Update list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Update list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'update', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-update',
  );
  register_post_type( 'update', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'reclaim_create_update_cpt', 0 );


add_action( 'init', 'create_institution_taxonomies', 0 );
function create_institution_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Institutions', 'taxonomy general name' ),
    'singular_name' => _x( 'institution', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Institutions' ),
    'popular_items' => __( 'Popular Institutions' ),
    'all_items' => __( 'All Institutions' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Institutions' ),
    'update_item' => __( 'Update institution' ),
    'add_new_item' => __( 'Add New institution' ),
    'new_item_name' => __( 'New institution' ),
    'add_or_remove_items' => __( 'Add or remove Institutions' ),
    'choose_from_most_used' => __( 'Choose from the most used Institutions' ),
    'menu_name' => __( 'Institutions' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('institutions',array('server'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'institution' ),
    'show_in_rest'          => true,
    'rest_base'             => 'institution',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_data_center_taxonomies', 0 );
function create_data_center_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Data centers', 'taxonomy general name' ),
    'singular_name' => _x( 'Data center', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Data centers' ),
    'popular_items' => __( 'Popular Data centers' ),
    'all_items' => __( 'All Data centers' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Data centers' ),
    'update_item' => __( 'Update data center' ),
    'add_new_item' => __( 'Add New data center' ),
    'new_item_name' => __( 'New data center' ),
    'add_or_remove_items' => __( 'Add or remove Data centers' ),
    'choose_from_most_used' => __( 'Choose from the most used Data_centers' ),
    'menu_name' => __( 'Data centers' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('datacenters',array('server'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'data_center' ),
    'show_in_rest'          => true,
    'rest_base'             => 'data_center',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

add_action( 'init', 'create_backup_taxonomies', 0 );
function create_backup_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Backups', 'taxonomy general name' ),
    'singular_name' => _x( 'backup', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Backups' ),
    'popular_items' => __( 'Popular Backups' ),
    'all_items' => __( 'All Backups' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Backups' ),
    'update_item' => __( 'Update backup' ),
    'add_new_item' => __( 'Add New backup' ),
    'new_item_name' => __( 'New backup' ),
    'add_or_remove_items' => __( 'Add or remove Backups' ),
    'choose_from_most_used' => __( 'Choose from the most used Backups' ),
    'menu_name' => __( 'Backups' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('backups',array('server'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'backup' ),
    'show_in_rest'          => true,
    'rest_base'             => 'backup',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

add_action( 'init', 'create_setup_taxonomies', 0 );
function create_setup_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Setups', 'taxonomy general name' ),
    'singular_name' => _x( 'Setup', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Setups' ),
    'popular_items' => __( 'Popular Setups' ),
    'all_items' => __( 'All Setups' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Setups' ),
    'update_item' => __( 'Update setup' ),
    'add_new_item' => __( 'Add New setup' ),
    'new_item_name' => __( 'New setup' ),
    'add_or_remove_items' => __( 'Add or remove Setups' ),
    'choose_from_most_used' => __( 'Choose from the most used Setups' ),
    'menu_name' => __( 'Setups' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('setups',array('server'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'setup' ),
    'show_in_rest'          => true,
    'rest_base'             => 'setup',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_variable_taxonomies', 0 );
function create_variable_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Variables', 'taxonomy general name' ),
    'singular_name' => _x( 'variable', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Variables' ),
    'popular_items' => __( 'Popular Variables' ),
    'all_items' => __( 'All Variables' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Variables' ),
    'update_item' => __( 'Update variable' ),
    'add_new_item' => __( 'Add New variable' ),
    'new_item_name' => __( 'New variable' ),
    'add_or_remove_items' => __( 'Add or remove Variables' ),
    'choose_from_most_used' => __( 'Choose from the most used Variables' ),
    'menu_name' => __( 'Variables' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('variables',array('server'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'variable' ),
    'show_in_rest'          => true,
    'rest_base'             => 'variable',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

