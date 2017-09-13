<?php
add_action( 'init', 'create_custom_portfolio_post_type' );
/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_portfolio_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'portfolio', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Portfolio', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'portfolio', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New portfolio', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New portfolio', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit portfolio', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View portfolio', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All portfolio', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search portfolio', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent portfolio:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No portfolios found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No portfolios found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'portfolio' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
 );

 register_post_type( 'portfolio', $args );
}