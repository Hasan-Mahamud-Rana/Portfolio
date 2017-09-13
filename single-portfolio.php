<?php
/**
* The template for displaying all single portfolio and attachments
*
* @package bvportfolio
* @since bvportfolio 1.0.0
*/
get_header();
global $post;
$postID = get_the_ID();
$singleCategory = array();
foreach (get_the_category($postID) as $c) {
  $cat = get_category($c);
  array_push($singleCategory, $cat->slug);
}
if (sizeOf($singleCategory) > 0) {
  $post_categories = implode(', ', $singleCategory);
} else {
  $post_categories = 'Not Assigned';
}
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="title">
  <div class="row">
    <div class="large-12 columns">
      <h1 class="project-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<div class="projectDetails">
  <div class="row">
    <div class="large-7 columns">

      <?php
      if ( has_post_thumbnail() ) :
	      $url = "url";
	      $url = get_field_object($url);
	      if( get_field('url')):
		      echo '<a href="' . $url['value'] .'"  target="_blank">';
		      the_post_thumbnail();
		      echo '</a>';
	      endif;
      endif;
      ?>
      <?php
      $images = get_field('gallery');
      if( $images ): ?>
      <ul class="imageGallery">
        <?php foreach( $images as $image ): ?>
        <li>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div><!--Image thumb -->
    <div class="large-5 columns">
      <?php
      $what_bv_did = "what_bv_did";
      $what_bv_did = get_field_object($what_bv_did);
      if( get_field('what_bv_did') ):
      echo '<div class="whatBvDid"><strong>' . $what_bv_did['label'] . ' </strong>' . $what_bv_did['value'] . '</div>';
      endif;
      echo '<strong>About the Business</strong>';
      the_content();
      ?>
      <ul class="additionalInfo">
        <?php
        $framework = "framework";
        $framework = get_field_object($framework);
        if( get_field('framework') ):
        echo '<li class="clearfix"><strong>' . $framework['label'] . ' </strong>' . $framework['value'] . '</li>';
        endif;
        $technology = "technology";
        $technology = get_field_object($technology);
        if( get_field('technology') ):
        echo '<li class="clearfix"><strong>' . $technology['label'] . ' </strong>' . $technology['value'] . '</li>';
        endif;
        $target_platforms = "target_platforms";
        $target_platforms = get_field_object($target_platforms);
        if( get_field('target_platforms') ):
        echo '<li class="clearfix"><strong>' . $target_platforms['label'] . ' </strong>' . $target_platforms['value'] . '</li>';
        endif;
        $tested_for = "tested_for";
        $tested_for = get_field_object($tested_for);
        if( get_field('tested_for') ):
        echo '<li class="clearfix"><strong>' . $tested_for['label'] . ' </strong>' . $tested_for['value'] . '</li>';
        endif;
        ?>
      </ul>
      <?php
      echo '<div class="quickContactText"><hr>';
        the_excerpt();
      echo '<hr></div>';
      ?>
      <ul class="more">
        <?php
        $client = "client";
        $client = get_field_object($client);
        if( get_field('client') ):
        echo '<li class="clearfix"><strong>' . $client['label'] . ' </strong>' . $client['value'] . '</li>';
        endif;
        echo '<li class="clearfix"><strong>Date </strong>';
          the_time('F j, Y');
        echo '</li>';
        $post_tags = get_the_tags();
        if ( $post_tags ) :
        echo '<li class="clearfix"><strong>Tags </strong>';
          foreach( $post_tags as $tag ) {
          echo $tag->name . ', ';
          }
        echo '</li>';
        endif;
        $url = "url";
        $url = get_field_object($url);
        if( get_field('url')):
        echo '<li class="clearfix"><strong>URL </strong><a href="' . $url['value'] .'"  target="_blank"><u>See more here</u></a></li>';
        endif;
        ?>
      </ul>
    </div>
    <div class="post-navigation">
      <?php
      previous_post_link('<div class="next" style="right: -25px;">%link</div>');
      next_post_link('<div class="prev" style="left: -25px;">%link</div>');
      ?>
    </div>
  </div>
  <?php endwhile;?>
    <?php $query = new WP_Query( array( 'post__not_in' => array($postID),'order' => 'ASC', 'category_name' => $post_categories, 'post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => -1 ));
        if($query -> have_posts()){
        ?>
  <div class="relevant-portfolio-panel portfolios-page">
        <div class="row">
          <div class="large-12 columns">
            <h3>Related Projects</h3>
          </div>
          <div class="large-12 text-center">
            <div class="portfolio grid">
              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="small-12 medium-4 large-4 columns cc">
                <a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
                  <h3><?php the_title(); ?></h3>
                </a>
                <div class="small-12 medium-12 large-12 columns text-left portfolio-link">
                </div>
              </div>
              <?php endwhile;  wp_reset_postdata(); else : ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
  <?php get_footer();