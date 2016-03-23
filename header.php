<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=1024, user-scalable=yes">
	<title><?php bloginfo('name'); ?></title>
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<meta name="viewport" content="width=1080, user-scalable=yes">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_enqueue_script("jquery"); ?>
	
	<?php wp_head(); ?>
	
	<script src="<?php bloginfo("template_url"); ?>/js/jquery.royalslider.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/jquery.fancybox.pack.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- Royal Slider CSS -->
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/royalslider.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/rs-minimal-white.css" type="text/css">
	
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/fancybox.css" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Raleway:500,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			
			
		});
	
	</script>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<div id="header">		
		<div class="container">
			<?php 
				$cart_not_empty = cart_not_empty();
				if (!is_page('Shopping Cart') && $cart_not_empty ) { ?>
				<a id="shopping-cart-link" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Shopping Cart' ) ) ); ?>"><?php echo wpusc_cart_item_qty(); ?></a>
			<?php } ?>
			
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
						
		</div>
		
	</div>
	<div id="content">
		<div class="container">
			
			<div id="main_nav">

				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => false, 'depth' => 0 ) ); ?>
				
				<ul id="social-networking">
					<li id="instagram"><a href="http://instagram.com/totallysuperdeluxe" target="_blank">Instagram</a></li>
					<li id="pinterest"><a href="http://pinterest.com/tsuperdeluxe/" target="_blank">Pinterest</a></li>
					<li id="twitter"><a href="http://twitter.com/TotallySuperDee" target="_blank">Twitter</a></li>
					<li id="facebook"><a href="https://www.facebook.com/pages/Totallysuperdeluxe/234117816733245" target="_blank">Facebook</a></li>
					
					
				</ul>
			</div>
			
			<div class="inner">
	
