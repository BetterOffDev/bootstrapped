<?php
/**
 * header.php
 *
 * Includes <head> section, start of <body> and primary navigation
 *
 * @package bootstrapped
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/apple-touch-icon.png">
		<?php wp_head(); ?>
		<!-- html5.js -->
			<!--[if lt IE 9]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->	
			
				<!-- respond.js -->
			<!--[if lt IE 9]>
			          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
			<![endif]-->	
	</head>

	<body <?php body_class(); ?>>
		<div id="wrap">
			<!-- navigation -->
			<nav id="primary-nav" class="navbar navbar-inverse" role="navigation">
	  			<div class="container">
	    			<div class="navbar-header">
	      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav-collapse">
		        			<span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-navicon" style="color: white; font-size: 24px;"></i>
	      				</button>
	      				<a class="navbar-brand" href="#">
	      					Bootstrapped
	      				</a>
	    			</div>
	    			<div class="collapse navbar-collapse" id="primary-nav-collapse">
	      				<ul class="nav navbar-nav navbar-right">
	      					<!--<li class="visible-xs visible-sm"><?php get_search_form(); ?></li>-->
					        <li><a href="#">Sample</a></li>
					        <li><a href="#">Test</a></li>
					        <li class="dropdown">
	          					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          					<ul class="dropdown-menu" role="menu">
						            <li><a href="#">Action</a></li>
						            <li><a href="#">Another action</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li class="divider"></li>
						            <li><a href="#">Separated link</a></li>
	          					</ul>
	        				</li>
	      				</ul>
	    			</div><!-- /.navbar-collapse -->
	  			</div><!-- /.container-fluid -->
			</nav>	
			<!-- start content area -->
			<div id="main-content" class="container">	