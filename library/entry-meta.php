<?php
/**
* Entry meta information for posts
*
* @package bvportfolio
* @since bvportfolio 1.0.0
*/
if ( ! function_exists( 'bvportfolio_entry_meta' ) ) :
	function bvportfolio_entry_meta() {
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'bvportfolio' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Written by', 'bvportfolio' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;