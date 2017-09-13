<?php
/**
* The sidebar containing the main widget area
*
* @package bvportfolio
* @since bvportfolio 1.0.0
*/
?>
<aside class="sidebar">
	<?php do_action( 'bvportfolio_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'bvportfolio_after_sidebar' ); ?>
</aside>