<footer id="Contact" class="col-md-12">
  <div class="contact">
    <?php
    // query for the about page
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-US"):
      $your_query = new WP_Query( 'pagename=home/contact' );
    else:
      $your_query = new WP_Query( 'pagename=inicial/contato' );
    endif;

    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
    the_content();
  endwhile;
  // reset post data (important!)
  wp_reset_postdata();
  ?>
  <div class="creator">
    <a href="http://www.marceloglacial.com">Design and Code by Marcelo Glacial</a> - <a href="https://unsplash.com">Photos by Unplash</a> 
  </div>
</div>
</footer>
</div> <!-- NOTE: /main -->

<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/master.js"></script>
<?php wp_footer(); ?>
</body>
</html>
