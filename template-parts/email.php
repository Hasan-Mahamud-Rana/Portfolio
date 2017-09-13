<div class="emails-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 text-center columns emails-artilce-headline">
        <?php
        the_title('<h2>','</h2>');
        the_content();
        ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>