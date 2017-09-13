<?php
/**
* The template for displaying all single banner and attachments
*
* @package bvbanners
* @since bvbanners 1.0.0
*/
get_header(); ?>
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
    <div class="small-12 columns">
      <?php the_content(); ?>
      <!--iframe width="930" height="180" src="<?php //echo(get_the_excerpt()); ?>"></iframe-->
      <?php if( have_rows('banner') ): ?>
      <ul class="banners">
        <?php while( have_rows('banner') ): the_row();
        // vars
        $bannerWidth = get_sub_field('banner_width');
        $bannerHeight = get_sub_field('banner_height');
        $bannerUrl = get_sub_field('banner_url');
        ?>
        <li class="banner">
          <?php
          if( $bannerUrl ):
            echo '<h4>Banner ' .$bannerWidth . 'X' . $bannerHeight. '</h4>';
          endif;
          ?>
          <iframe width="<?php echo $bannerWidth ?>" height="<?php echo $bannerHeight ?>" src="<?php echo $bannerUrl ?>"></iframe>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
    <div class="post-navigation">
      <?php
      previous_post_link('<div class="next" style="right: -25px;">%link</div>');
      next_post_link('<div class="prev" style="left: -25px;">%link</div>');
      ?>
    </div>
  </div>
  <?php endwhile;?>
  <?php $query = new WP_Query( array( 'post__not_in' => array($postID),'order' => 'ASC', 'category_name' => $post_categories, 'post_type' => 'banner', 'post_status' => 'publish', 'posts_per_page' => -1 ));
  if($query -> have_posts()){
  ?>
  <div class="relevant-banners-panel bannerss-page">
    <div class="row">
      <div class="large-12 columns">
        <h3>Related Projects</h3>
      </div>
      <div class="large-12 text-center">
        <div class="banners grid">
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="small-12 medium-4 large-4 columns">
            <a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" >
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php get_footer();