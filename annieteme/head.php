<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>annieページ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title('|', true, 'right'); ?><?php  bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css"/ >
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link href="favicon.ico" rel="shortcut icon">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/infinite-scroll.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tubular.1.0.js"></script>

</head>

<script>

jQuery(document).ready(function($) {
     $('.youtube').tubular({
           videoId: 'HFUreAm3Kt8'
     });
});

</script>

