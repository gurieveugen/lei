<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--<title><?php wp_title( '|', true, 'right' ); ?></title>-->
	<title><?php echo (wp_title( ' ', false, 'right' ) == '') ? get_bloginfo('name') : wp_title( ' ', false, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
		wp_head(); ?>
	<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.main.js" ></script>
	<!--[if lt IE 9]>
		<script src="<?php echo TDU; ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<!--[if lte IE 9]>
		<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">
			<div class="center-wrap center-wrap_1000">
				<div class="header-top cf">
					<div class="center-wrap">
						<strong class="logo"><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo TDU; ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"></a></strong>
						<ul class="contact-list">
							<li>Phone 08 9240 6066</li>
							<li><a href="mailto:">Email</a></li>
						</ul>
					</div>
				</div>
				<nav class="main-navigation">
					<div class="center-wrap">
						<?php wp_nav_menu( array(
							'container' => false,
							'theme_location' => 'primary_nav',
							'menu_id' => 'nav',
							'menu_class' => 'main-nav'
							)); ?>
					</div>
				</nav>
			</div>
		</header>
		<div id="main">