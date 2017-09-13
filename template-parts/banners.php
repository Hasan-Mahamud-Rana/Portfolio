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
<div class="banners-page">
  <div class="row">
      <?php $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'banner' , 'post_status' => 'publish', 'posts_per_page' => -1  ) ); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="small-12 columns banners-panel ">
        <?php the_title('<h3>', '</h3>'); ?>
        <iframe width="930" height="180" src="<?php echo(get_the_excerpt()); ?>"></iframe>
        <p class="text-right"><a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">See all</a></p>
      </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      <?php endif; ?>
  </div>
</div>