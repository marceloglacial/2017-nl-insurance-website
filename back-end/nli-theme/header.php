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

  <!-- Facebook Tags -->
  <?php
  // Get current page url
  global $wp;
  $current_url = home_url(add_query_arg(array(),$wp->request));
  ?>

  <meta property="og:url"                content="<?php echo $current_url; ?>">
  <meta property="og:type"               content="article">

  <meta property="og:title"              content="<?php the_title(); ?>">
  <meta property="og:site_name"          content="<?php bloginfo('name'); ?>">

  <meta property="og:image"              content="<?php bloginfo('template_url'); ?>/tile-wide.png">
  <meta property="og:image:width"        content="800">
  <meta property="og:image:height"       content="600">

  <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo('name'); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,900" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/master.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body id="Pages-Home" class="<?php if (is_user_logged_in()) { echo "logged"; } ?>">
  <div id="Main" class="container-fluid">
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sandwich"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav navbar-right navbar-border">
              <?php $menu = get_page_by_title( 'Pages'); ?>
              <?php wp_list_pages( array( 'child_of' => $menu->ID, 'title_li' => '','sort_column'  => 'post_name' ) ); ?>

              <?php // NOTE: PT_br Menu ?>
              <?php $menu = get_page_by_title( 'Paginas'); ?>
              <?php wp_list_pages( array( 'child_of' => $menu->ID, 'title_li' => '','sort_column'  => 'post_name' ) ); ?>

              <?php // NOTE: Flags Menu ?>
              <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>
