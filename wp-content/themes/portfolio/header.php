<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
       
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="site-container">

			<!-- header -->
			<header class="header d-none">

					<!-- logo -->
					<!-- <div class="logo">
						<a href="<?php// echo home_url(); ?>">
							svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script 
							<img src="<?php //echo get_template_directory_uri(); ?>/assets/img/logo-nav.svg" alt="Logo" class="logo-img">
						</a>
					</div>-->
					<!-- /logo -->

					<!-- nav -->
					<nav id="menu-theme" class="navbar navbar-expand-lg navbar-dark">
							<div class="container-fluid">
								
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
								aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
									
										
									
										<!--menu dinamico-->
										<?php wp_nav_menu(array(
										'theme_location' => 'superior',
										'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
										'container' =>'div',
										'container_class' => 'collapse navbar-collapse',
										'container_id' => 'navbarTogglerDemo02',
										'menu_class' => 'navbar-nav mt-2 mt-lg-0',
										'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
										'walker' =>  new WP_Bootstrap_Navwalker(),
										) ); ?>
										<!--menu dinamico-->
										<!--
										<?php //if ( is_active_sidebar( 'zonabuscador' ) ) : ?>
										<div id="zonabuscador" class="d-block d-md-none wc-search">
											<?php //dynamic_sidebar( 'zonabuscador' ); ?>
										</div>
										<?php //endif; ?>
										-->

									
									
								</div>
								<!--<?php //if ( is_active_sidebar( 'zonabuscador' ) ) : ?>
								<div id="zonabuscador" class="d-none d-md-block wc-search">
									<?php //dynamic_sidebar( 'zonabuscador' ); ?>
								</div>
								<?php //endif; ?>-->
							</div>
					
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
