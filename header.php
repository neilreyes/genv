<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genv
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300,300italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php the_field('site_favicon', 'option'); ?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<?php if( get_field('floating_button_linkr', 'option') || get_field('floating_button_label', 'option') || get_field('floating_button_icon', 'option') ): ?>
	<a id="hp-fixed-link" href="<?php the_field('floating_button_link', 'option'); ?>" target="_blank" title="<?php the_field('floating_button_tool_tip', 'option'); ?>">
		<?php the_field('floating_button_label', 'option'); ?>
		<img src="<?php the_field('floating_button_icon', 'option'); ?>" />
		<?php the_field('floating_button_label_2', 'option'); ?>
	</a>
<?php endif; ?>

	<div id="wrapper">

	  <header id="main-header">
	    <nav class="navbar navbar-default">
	      <div class="container-fluid">
	        
	        	<div class="navbar-header">

	            		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	              			<img src="<?php the_field('site_logo', 'option'); ?>" alt="" class="img-responsive">
	           		</a>
	        
	         		 <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#main-navigation-offcanvas" data-canvas="body">
	            			<span class="sr-only">Toggle navigation</span>
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	          		</button>
	        	</div>
	        

	        	<div class="pull-right col col-md-4 contact-block-wrapper">
	          
	            		<ul class="contact-block clearfix">
	              			<li class="contact-number">
						<span class="icon entypo-phone"></span>
						<?php the_field('header_phone_number', 'option'); ?>
					</li>
	              			<li class="appointment-btn">
						<a href="<?php the_field('header_appointment_button_link', 'option'); ?>" class="btn btn-block btn-xs btn-primary">
							<?php the_field('header_appointment_button_label', 'option'); ?>
						</a>
					</li>
	            		</ul>
	          
	        	</div>

			<div id="my-navi">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav> <!-- #site-navigation -->
			</div>
		</div>
	   </nav>


		<div id="mob-head-links">
	            	<ul>
	              		<li class="mob-phone">
					<a href="tel:<?php the_field('header_phone_number', 'option'); ?>">
						<span class="icon entypo-phone"></span>
						<?php the_field('header_phone_number', 'option'); ?>
					</a>
				</li>
	              		<li class="appt-btn">
					<a href="<?php the_field('header_appointment_button_link', 'option'); ?>">
						<span class="icon entypo-calendar"></span>
						<?php the_field('header_appointment_button_label', 'option'); ?>
					</a>
				</li>
				<div class="clear"></div>
	            	</ul>
		</div> <!-- #mob-head-links -->

	</header>
