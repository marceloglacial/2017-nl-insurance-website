<?php
/*
* Template Name: Blog Template
*/
get_header(); ?>

<section id="Content">
  <div class="pages-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
    <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/assets/img/page-header.png" alt="Feature image" class="img-responsive">
    <?php endif; ?>

    <h2><?php the_title(); ?></h2>
  </div>
  <span class="goldenbar"></span>
  <article class="pages-content <?php echo basename(get_permalink()); ?>">
    <?php
    while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php
  endwhile;
  wp_reset_query();
  ?>

  <ul class="blog-list">
    <?php
    // Source: http://callmenick.com/post/custom-wordpress-loop-with-pagination
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $query_args = array(
      'post_type' => 'post',
      'posts_per_page' => 10,
      'paged' => $paged
    );
    // create a new instance of WP_Query
    $the_query = new WP_Query( $query_args );
    ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
      <li><a href="<?php the_permalink(); ?>"><b><?php echo get_the_date(); ?></b> - <?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul
  >
  <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
    <nav class="prev-next-posts">
      <div class="prev-posts-link">
        <?php echo get_next_posts_link( '< Older', $the_query->max_num_pages ); // display older posts link ?>
      </div>
      <div class="next-posts-link">
        <?php echo get_previous_posts_link( 'Newer >' ); // display newer posts link ?>
      </div>
    </nav>
    <?php } ?>

  <?php else: ?>
    <article>
      <h4>Sorry...</h4>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </article>
  <?php endif; ?>


</article>
</section>
<!-- NOTE: /Content -->

<?php get_footer(); ?>
