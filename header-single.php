<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo('description', 'display');
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | Página ' . max($paged, $page);

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/jquery-ui/css/custom-theme/jquery-ui-1.10.3.custom.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">


<script src="<?php bloginfo('template_directory'); ?>/lib/jquery-ui/js/jquery-1.9.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints.js"></script>


<?php wp_head(); ?>
</head>
<body <?php body_class(get_bloginfo('language')); ?>>
