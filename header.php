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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


<script src="<?php bloginfo('template_directory'); ?>/lib/jquery-ui/js/jquery-1.9.1.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/lib/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>


<?php wp_head(); ?>
</head>
<body <?php body_class(get_bloginfo('language')); ?>>
	<header id="masthead">
		<div class="container">
			<div class="site_title">
				<div class="site-meta">
					<h1>
						<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</h1>
					<h2><?php bloginfo('description'); ?></h2>
				</div>
			</div>
			<div class="menuzin">
				<div id="page-nav">
					<div class="clearfix">
						<nav id="main-nav">
							<!-- <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?> -->
						<div id="page-load"> Sobre </div>
						<div id="page-content">
						<div class="close-sobre"> <span class="glyphicon glyphicon-remove-circle"></span></div> 
						<?php
							$id = 2;
							$p = get_page($id);
							echo apply_filters('the_content', $p->post_content);
						?>
						</div>
						<div id="page-contato"> Fale Conosco </div>
						<div id="page-content-contato"> 
						<div class="close-contato"> <span class="glyphicon glyphicon-remove-circle"></span></div>
						<?php
							$id = 335;
							$p = get_page($id);
							echo apply_filters('the_content', $p->post_content);
						?>
						</div>
						<?php
							if ( is_user_logged_in() ) {
    								echo '<div id="forum"><a href="http://saneamentobahia.org/foruns"> Fórum </a>';
							} else {
    								echo '';
							}
						?>

						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>