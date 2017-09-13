<div class="portfolio-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 columns portfolio-artilce-headline">
        <?php the_title('<h2>','</h2>'); ?>
      </div>
      <div class="small-12 columns portfolio-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="portfolio-panel portfolios-page">
  <div class="row">
    <div class="large-12 text-center">
<div class="button-group filter-button-group">
  <button class="small button is-checked" data-filter="*">Show all</button>
    <?php
      $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
      ) );
      foreach( $categories as $category ) {
          $categoryName = $category->name;
          $categorySlug = $category->slug;
          $categoryCount = $category->count;

      echo '<button class="button" data-filter=".' . $categorySlug . '">' . sprintf( $categoryName, $categoryCount) . '</button>';
        }
      ?>
</div>
      <div class="portfolio grid">
      <?php $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'portfolio' , 'post_status' => 'publish', 'posts_per_page' => -1  ) ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php
        $cats = array();
        foreach (get_the_category($post_id) as $c) {
          $cat = get_category($c);
          array_push($cats, $cat->slug);
        }
        if (sizeOf($cats) > 0) {
          $post_categories = implode(' ', $cats);
        } else {
          $post_categories = 'Not Assigned';
        }
        ?>
        <div class="small-12 medium-4 large-4 columns cc element-item transition <?php echo $post_categories; ?>" data-category="transition">

        <a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
        <h3><?php the_title(); ?></h3>
        </a>
        <div class="small-12 medium-12 large-12 columns text-left portfolio-link">
        </div>
        </div>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
