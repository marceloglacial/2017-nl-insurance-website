<?php
/*
* Template Name: Home Template
*/

get_header(); ?>
<section id="Hero" class="hero">
  <?php
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US"):
    echo do_shortcode('  [sx-carousel category=”home”]');
  else:
    echo do_shortcode('  [sx-carousel category=”inicial”]');
  endif;
  ?>
  <span class="goldenbar"></span>
</section>
<!-- NOTE: /hero -->


<section id="Services">
  <?php
  // query for the about page
  $currentlang = get_bloginfo('language');
  if($currentlang=="en-US"):
    $your_query = new WP_Query( 'pagename=home/services' );
  else:
    $your_query = new WP_Query( 'pagename=inicial/servicos' );
  endif;
  // "loop" through query (even though it's just one page)
  while ( $your_query->have_posts() ) : $your_query->the_post();
  the_content();
endwhile;
// reset post data (important!)
wp_reset_postdata();
?>
</section>
<!-- NOTE: /Services -->

<section id="Video">
  <?php
  // query for the about page
  if($currentlang=="en-US"):
    $your_query = new WP_Query( 'pagename=home/video' );
  else:
    $your_query = new WP_Query( 'pagename=inicial/videos' );
  endif;
  // "loop" through query (even though it's just one page)
  while ( $your_query->have_posts() ) : $your_query->the_post();
  the_content();
endwhile;
// reset post data (important!)
wp_reset_postdata();
?>
<span class="goldenbar"></span>
</section>
<!-- NOTE: /Video -->

<section id="Visit">
  <?php
  if($currentlang=="en-US"):
    $menu = get_page_by_title( 'Visit Us');
  else:
    $menu = get_page_by_title( 'Visite Nos');
  endif;
  ?>
  <?php $the_query = new WP_Query( array('page_id'=> $menu->ID) ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
    <div class="visit-box">
      <?php the_content(); ?>
    </div>
  <?php endwhile;?>

</section>
<!-- NOTE: /Visit -->

<section id="Social">
  <?php
  // query for the about page
  if($currentlang=="en-US"):
    $your_query = new WP_Query( 'pagename=home/social' );
  else:
    $your_query = new WP_Query( 'pagename=inicial/sociais' );
  endif;
  // "loop" through query (even though it's just one page)
  while ( $your_query->have_posts() ) : $your_query->the_post();
  the_content();
endwhile;
// reset post data (important!)
wp_reset_postdata();
?>
</section>
<!-- NOTE: /Social -->

<?php get_footer(); ?>
