<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	
	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php home_url(); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/img/logo-s.png" />
    <meta property="og:image:alt" content="Image" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@smtwebinar">
    <meta name="twitter:creator" content="@smtwebinar">
    <meta property="twitter:url" content="<?php home_url(); ?>" />
    <meta property="twitter:title" content="<?php bloginfo('name'); ?>" />
    <meta property="twitter:description" content="<?php bloginfo('description'); ?>" />
    <meta property="twitter:image" content="<?php echo get_template_directory_uri() ?>/assets/img/logo-s.png" />


	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>

	<!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style-default.css" media="all"/>
    <link id="lgx-master-style" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
	
</head>
<?php $current_user = wp_get_current_user(); ?>
<body <?php body_class(); ?>>

	<!-- Header -->
	
	
	<div class="lgx-container">

		<!--HEADER-->
		<header>
		    <div id="lgx-header" class="lgx-header">
		        <div class="top-bg"></div>
		        <div class="lgx-header-position header-custom">
		            <div class="lgx-container"> <!--lgx-container-fluid-->
		                <nav class="navbar navbar-default lgx-navbar">
		                    <div class="navbar-header">
		                        <div class="lgx-logo">
		                            <a href="<?php echo home_url() ?>" class="lgx-scroll">
		                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-s.png"/>
		                            </a>
		                        </div>
		                    </div>
		                    <div id="navbar" class="navbar-collapse collapse">
		                        <div class="lgx-nav-right navbar-right">
		                            <div class="lgx-cart-area">
		                            	<?php if ($current_user->ID) : ?>
			                                <a class="lgx-btn lgx-btn-green" href="<?php echo wp_logout_url(get_permalink()); ?>">
			                                Logout</a>
		                                <?php else: ?>
		                                	<a class="lgx-btn lgx-btn-red" href="<?php echo home_url() ?>/login">Login</a>
		                                	<a class="lgx-btn lgx-btn-green" href="<?php echo home_url() ?>/registration">Registration</a>
		                            	<?php endif; ?>
		                            </div>
		                        </div>
		                    </div><!--/.nav-collapse -->
		                </nav>
		            </div>
		            <!-- //.CONTAINER -->
		        </div>
		    </div>
		</header>
		<!--HEADER END-->