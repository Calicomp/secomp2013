<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<?php
	$posts = get_posts(array(
		'category' => get_term_by("name", "PaginaInicial", "category")->term_id
	));
?>
<html class="js no-flexbox flexboxlegacy canvas canvastext postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="UTF-8" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title><?php bloginfo(); ?></title>
		<meta name="viewport" content="initial-scale=1, width=device-width, minimum-scale=1" />
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('wpurl'); ?>/favicon.png" />
		<link rel="shortcut icon" href="<?php echo get_bloginfo('wpurl'); ?>/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.min.css" type="text/css" media="all" />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/check.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive_screen_and_max-width1023px.min.css" type="text/css" media="only screen and (max-width:1023px), (max-device-width:1023px)" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive_screen_and_max-width1140px.min.css" type="text/css" media="only screen and (max-width:1140px), (max-device-width:1140px)" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive_screen_and_max-width720px.min.css" type="text/css" media="only screen and (max-width:720px), (max-device-width:720px)" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive_screen_and_max-width530px.min.css" type="text/css" media="only screen and (max-width:530px), (max-device-width:530px)" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<!-- Códigos Gerados pelo WordPress -->
		<?php if (is_singular() && get_option('thread_comments'))
				wp_enqueue_script('comment-reply'); wp_head(); ?>
	</head>
	<body class="home page page-id-529 page-template-default">
		<div id="mobile-nav">
			<?php
				$mobile = true;
				include 'includes/headermenu.php';
			?>
		</div>
		<header id="top">
			<div class="shell">
				<h1 id="logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo(); ?></a></h1>
				<nav>
					<?php
						$mobile = false;
						include 'includes/headermenu.php';
					?>
				</nav>
				<div class="account-nav">
					<a href="<?php echo get_option('home'); ?>/wp-admin/">Logar</a>
				</div>
				<div class="toggle-shell"><a href="#" class="mobile-nav-toggle">+</a></div>
			</div>	
		</header>
		<section id="banner">
			<div class="shell">
				<h2><?php echo get_bloginfo ('description'); ?></h2>
			</div>
		</section>
		