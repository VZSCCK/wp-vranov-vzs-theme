<!DOCTYPE html>
<html lang="cs">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" type="text/css">
	<script src="<?php echo BASE_URL; ?>/js/jquery-1.11.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/favicon.ico">
	<link rel="icon" type="image/svg+xml" href="<?php echo BASE_URL; ?>/favicon.svg" sizes="any">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('blockname'); ?></title>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- HEADER -->
	<div class="header">
		<nav class="topmenu"">
			<ul>
				<li><a id="menu-button">☰ Menu</a></li>
			</ul>
		<?php wp_nav_menu(['menu_id' => 'menu-top', 'container' => '', 'theme_location'=>'top']);?>
		</nav>

		<div class="line white">
			<div class="wrap">
				<a href="<?php bloginfo('url')?>" class="logo"><img src="<?php echo BASE_URL; ?>/images/logo.svg"></a>
				<strong class="supertitle">Vodní záchranná služba ČČK</strong>
			</div>
		</div>

		<div class="line blue">
			<div class="wrap">
				<strong class="subtitle">Jablonec nad Nisou</strong>
			</div>
		</div>
	</div>
	<!-- / HEADER -->

  <!-- PAGE -->
	<div class="content">
	<div class="line red"></div>
	<div class="wrap">
		<div class="cpage">
			<div class="main">
		  		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
				</div>
		  	<div class="main-inner">