<?php
/*
* Template Name: Temp Home Template
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="nl, insurance, accounting, business, auto, motorcycle, rentals, life, health"/>
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
  <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo('name'); ?></title>

  <style media="screen">
  body {
    background: #09294D;
    text-align: center;
    color:#FFF;
  }
  a {
    color:#FFF;
    font-family: sans-serif;
    text-decoration: none;
  }
  a:hover {
    color: #D2AB68;
  }
  img {
    padding-top: 50px;
    max-width:100%;

  }
  </style>

</head>
<body <?php body_class(); ?>>

  <img src="<?php bloginfo('template_url'); ?>/tile-wide.png" alt="">
  <br>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php
endwhile;
wp_reset_query();
?>

</body>
</html>
