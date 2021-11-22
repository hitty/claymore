<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>
<div id="app">
  <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>
</div>
<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
