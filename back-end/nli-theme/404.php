<?php
/*
* Template Name: 404 Template
*/
get_header(); ?>

<section id="Content">
  <div class="pages-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
    <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/assets/img/page-header.png" alt="Feature image" class="img-responsive">
    <?php endif; ?>

    <h2><?php wp_title(''); ?></h2>
  </div>
  <span class="goldenbar"></span>
  <article class="pages-content <?php echo basename(get_permalink()); ?>">

</article>
</section>
<!-- NOTE: /Content -->

<?php get_footer(); ?>
