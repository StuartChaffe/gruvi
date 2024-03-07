<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<?php $bkg = get_field('bkg__image'); ?>

<?php wp_head(); ?>
<?php get_template_part('partials/global', 'analytics'); ?>
</head>
<body <?php body_class(); ?>>
<!-- <body <?php body_class(); ?> <?php if($bkg): ?>style="background-image: url(<?php echo $bkg['url']; ?>)"<?php endif; ?>> -->

<?php get_template_part('partials/global', 'browser-notice'); ?>

<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<a id="skip-nav" class="skip-nav screen-reader-text" href="#content">Skip to main content</a>

<div class="global-container">
<?php get_template_part('partials/global', 'alert'); ?>
<?php get_template_part('partials/site', 'header'); ?>
