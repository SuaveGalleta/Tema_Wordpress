<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mi Blog</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/responsive.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <script src="<?php bloginfo('template_url')?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
    <script>
      $(function() {
        $("#slideshow").slidesjs({
          height: 300,
          navigation: false
        });
      });
    </script>
    <?php wp_head(); ?>
    
  </head>
  <body>
    <header>
      <div id="logo">
        <p>Mi Blog</p>
        <span>by Eric Suarez</span>
      </div>
      <nav>
        <?php wp_nav_menu(array(
             'container' => 'false',
             'items_wrap' => '<ul>%3$s</ul>',
             'theme_location' =>'menu'
        ));?>
      </nav>
    </header>