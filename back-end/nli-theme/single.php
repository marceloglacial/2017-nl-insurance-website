<?php
/*
* Template Name: Single Template
*/
get_header(); ?>

<section id="Content">
  <div class="pages-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
    <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/assets/img/page-header.png" alt="Feature image" class="img-responsive">
    <?php endif; ?>

    <h2>Blog</h2>
  </div>
  <span class="goldenbar"></span>
  <article class="pages-content blog-content <?php echo basename(get_permalink()); ?>">

    <?php
    while ( have_posts() ) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <h4><?php the_time('l, F jS, Y') ?></h4>
    <?php
  endwhile;
  wp_reset_query();
  ?>

  <?php // NOTE: IF Get a Code Page ?>
  <div class="cote-list">
    <ul>
      <?php wp_list_pages( array( 'title_li' => '','sort_column'  => 'menu_order', 'child_of' => $post->ID, 'depth' => '1' ) ); ?>
    </ul>
  </div>

</article>
</section>
<!-- NOTE: /Content -->

<?php get_footer(); ?>
