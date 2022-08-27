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