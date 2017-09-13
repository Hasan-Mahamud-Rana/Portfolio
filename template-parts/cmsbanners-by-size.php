<div class="banners-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 text-center columns banners-artilce-headline">
        <?php
        the_title('<h2>','</h2>');
        the_content();
        ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="b300x250">
  <div class="row small-up-1 medium-up-2 large-up-3 banners-panel  columns text-center">
    <?php
      $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'banner' , 'post_status' => 'publish', 'tag' => 'cms-banner-300x250' , 'posts_per_page' => -1  ) );
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        the_title('<h3>', '</h3>');
      if( have_rows('banner') ):
        while( have_rows('banner') ): the_row();
      // vars
      $bannerWidth = get_sub_field('banner_width');
      $bannerHeight = get_sub_field('banner_height');
      $bannerUrl = get_sub_field('banner_url');
    ?>
    <div class="column banner">
      <?php
      if( $bannerUrl ):
      //echo '<h4>Banner ' .$bannerWidth . 'X' . $bannerHeight. '</h4>';
      endif;
      ?>
      <iframe width="<?php echo $bannerWidth ?>" height="<?php echo $bannerHeight ?>" src="<?php echo $bannerUrl ?>"></iframe>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <p class="text-right"><a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">See all</a></p>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>

<div class="b160x600">
  <div class="row small-up-2 medium-up-4 large-up-5 banners-panel  columns text-center">
    <?php
      $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'banner' , 'post_status' => 'publish', 'tag' => 'cms-banner-160x600' , 'posts_per_page' => -1  ) );
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        the_title('<h3>', '</h3>');
      if( have_rows('banner') ):
        while( have_rows('banner') ): the_row();
      // vars
      $bannerWidth = get_sub_field('banner_width');
      $bannerHeight = get_sub_field('banner_height');
      $bannerUrl = get_sub_field('banner_url');
    ?>
    <div class="column banner">
      <?php
      if( $bannerUrl ):
      //echo '<h4>Banner ' .$bannerWidth . 'X' . $bannerHeight. '</h4>';
      endif;
      ?>
      <iframe width="<?php echo $bannerWidth ?>" height="<?php echo $bannerHeight ?>" src="<?php echo $bannerUrl ?>"></iframe>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <p class="text-right"><a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">See all</a></p>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>

<div class="b930x180">
  <div class="row small-up-1 medium-up-1 large-up-1 banners-panel  columns text-center">
    <?php
      $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'banner' , 'post_status' => 'publish', 'tag' => 'cms-banner-930x180' , 'posts_per_page' => -1  ) );
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        the_title('<h3>', '</h3>');
      if( have_rows('banner') ):
        while( have_rows('banner') ): the_row();
      // vars
      $bannerWidth = get_sub_field('banner_width');
      $bannerHeight = get_sub_field('banner_height');
      $bannerUrl = get_sub_field('banner_url');
    ?>
    <div class="column banner">
      <?php
      if( $bannerUrl ):
      //echo '<h4>Banner ' .$bannerWidth . 'X' . $bannerHeight. '</h4>';
      endif;
      ?>
      <iframe width="<?php echo $bannerWidth ?>" height="<?php echo $bannerHeight ?>" src="<?php echo $bannerUrl ?>"></iframe>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <p class="text-right"><a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">See all</a></p>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>

<div class="b930x180">
  <div class="row small-up-1 medium-up-1 large-up-1 banners-panel text-center">
    <?php
      $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'banner' , 'post_status' => 'publish', 'tag' => 'cms-banner-960x130' , 'posts_per_page' => -1  ) );
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        the_title('<h3 class="columns">', '</h3>');
      if( have_rows('banner') ):
        while( have_rows('banner') ): the_row();
      // vars
      $bannerWidth = get_sub_field('banner_width');
      $bannerHeight = get_sub_field('banner_height');
      $bannerUrl = get_sub_field('banner_url');
    ?>
    <div class="column banner">
      <?php
      if( $bannerUrl ):
      //echo '<h4>Banner ' .$bannerWidth . 'X' . $bannerHeight. '</h4>';
      endif;
      ?>
      <iframe width="<?php echo $bannerWidth ?>" height="<?php echo $bannerHeight ?>" src="<?php echo $bannerUrl ?>"></iframe>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <p class="text-right"><a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">See all</a></p>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>