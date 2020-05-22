<?php
/**
 * Header Template
 */

global $nkp_client_info;

?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Chris O'Brien - UI / UX Designer</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/sass/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/sass/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/sass/unsemantic-grid.css">
	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"> -->
	<link rel="stylesheet" href="https://use.typekit.net/aiq4fdu.css">

	<?php wp_head(); ?>

</head>

<body>

	<?php get_template_part( 'content', 'header' ); ?>

	<?php if (is_front_page()) { ?>

			<?php get_template_part( 'content', 'homepage' ); ?>

	<?php } ?>
