<?php
/**
* The template for displaying the footer
*
* Contains the closing of the "off-canvas-wrap" div and all content after.
*
* @package bvportfolio
* @since bvportfolio 1.0.0
*/
?>
</section>
<div id="footer-container">
<div class="footer-panel">
<footer id="footer">
  <?php do_action( 'bvportfolio_before_footer' ); ?>
  <?php dynamic_sidebar( 'footer-widgets' ); ?>
  <?php do_action( 'bvportfolio_after_footer' ); ?>
</footer>
	<div class="copyrights">
	<div class="row">
	   <?php dynamic_sidebar( 'copyright-widgets' ); ?>
	</div>
	</div>
</div>
</div>
<?php do_action( 'bvportfolio_layout_end' ); ?>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div>
</div>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
<?php do_action( 'bvportfolio_before_closing_body' ); ?>
<script type="text/javascript">
var filterFns = {
ium: function() {
var name = $(this).find('.name').text();
return name.match( /ium$/ );
}
};
function getHashFilter() {
var matches = location.hash.match( /filter=([^&]+)/i );
var hashFilter = matches && matches[1];
return hashFilter && decodeURIComponent( hashFilter );
}
var $grid = $('.grid');
var $filterButtonGroup = $('.filter-button-group');
$filterButtonGroup.on( 'click', 'button', function() {
var filterAttr = $( this ).attr('data-filter');
location.hash = 'filter=' + encodeURIComponent( filterAttr );
});
var isIsotopeInit = false;
function onHashchange() {
var hashFilter = getHashFilter();
if ( !hashFilter && isIsotopeInit ) {
return;
}
isIsotopeInit = true;
$grid.isotope({
itemSelector: '.element-item',
layoutMode: 'fitRows',
filter: filterFns[ hashFilter ] || hashFilter
});
if ( hashFilter ) {
$filterButtonGroup.find('.is-checked').removeClass('is-checked');
$filterButtonGroup.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
}
}
$(window).on( 'hashchange', onHashchange );
onHashchange();
</script>
</body>
</html>