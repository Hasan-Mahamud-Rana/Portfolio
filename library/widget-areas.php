<?php
/**
* Register widget areas
*
* @package bvportfolio
* @since bvportfolio 1.0.0
*/
if ( ! function_exists( 'bvportfolio_sidebar_widgets' ) ) :
function bvportfolio_sidebar_widgets() {
	register_sidebar(array(
	'id' => 'sidebar-widgets',
	'name' => __( 'Sidebar widgets', 'bvportfolio' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'bvportfolio' ),
	'before_widget' => '<article id="%1$s" class="widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
	register_sidebar(array(
	'id' => 'footer-widgets',
	'name' => __( 'Footer widgets', 'bvportfolio' ),
	'description' => __( 'Drag widgets to this footer container', 'bvportfolio' ),
	'before_widget' => '<article id="%1$s" class="small-12 medium-3 large-3 columns widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
	/* copyright widget area */
	register_sidebar(array(
	'id' => 'copyright-widgets',
	'name' => __( 'Copyright widgets', 'bvportfolio' ),
	'description' => __( 'Drag widgets to this Copyright container', 'bvportfolio' ),
	'before_widget' => '<div id="%1$s" class="large-6 columns widget %2$s">',
	'after_widget' => '</div>',
		'before_title' => '<h6 style="display:none;">',
	'after_title' => '</h6>',
	));

}
add_action( 'widgets_init', 'bvportfolio_sidebar_widgets' );
endif;