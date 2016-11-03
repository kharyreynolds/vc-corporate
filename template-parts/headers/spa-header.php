<?php
$default_menu_args = array(
	'fallback_cb'     => '',
	'container'       => '',
	'link_before'     => '<div>',
	'link_after'      => '</div>',
);
$menu_args = wp_parse_args( $menu_args, $default_menu_args );

$default_params = array(
	'class' => 'dark',
);
$params = wp_parse_args( $extra_params, $default_params );

 ?>

	<!-- Header
	============================================= -->
	<header id="header" class="no-sticky transparent-header dark" data-responsive-class="dark">
		<div id="header-wrap">
			<div class="container clearfix">
				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo"><img src="<?php bloginfo('template_directory'); ?>/includes/portfolio/spa/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo"><img src="<?php bloginfo('template_directory'); ?>/includes/portfolio/spa/images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="not-dark">
						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
							<li class="current"><a href="#" data-href="#slider"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-price"><div>Price</div></a></li>
							<li><a href="#" data-href="#section-testimonials"><div>Testimonials</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>
					</nav>
			</div>
		</div>
	</header><!-- #header end -->