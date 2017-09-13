<?php
add_action( 'init', 'create_custom_banner_post_type' );
/**
 * Register a banner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_banner_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Banners', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'banner', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Banners', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'banner', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'banner', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New banner', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New banner', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit banner', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View banner', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All banner', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search banner', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent banner:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No banners found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No banners found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'banners' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
 );

 register_post_type( 'banner', $args );
}