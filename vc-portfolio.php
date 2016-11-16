<?php /* Template name: VC Portfolio */ ?>
<?php get_header(); ?>

<body class="site-wrapper">
	<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>
	

	<!-- Page Title -->
	<section id="page-title" class="page-title page-title-parallax page-title-dark" style="background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/web-dev-banner.png'); padding: 120px 0;" data-stellar-background-ratio="0.3">
		<div id="portfolio-page" class="parallax-overlay grid-overlay"></div>

		<div class="container clearfix">
			<h1>Portfolio</h1>
			<span>Generating Measurable Results for Your Company</span>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Portfolio</li>
			</ol>
		</div>
	</section>


	<!-- Content
		============================================= -->
		<section class="content-wrap topmargin-lg bottommargin">
			<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".pf-icons">Icons</a></li>
						<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
						<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
						<li><a href="#" data-filter=".pf-media">Media</a></li>
						<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

					</ul><!-- #portfolio-filter end -->

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/agencyslider.jpg" alt="Premium Agency Template">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Apartment Rental Business</a></h3>
								<span><a href="#">Real Estate</a>, <a href="#">Payments</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/app_landing_grid.jpg" alt="Premium App Landing">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Real Estate Property Listing</a></h3>
								<span><a href="#">Real Estate</a>, <a href="#">Landing Page</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/comingsoon.jpg" alt="Premium Coming Soon Template">
								</a>
								<div class="portfolio-overlay">
									<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/deskscene.jpg" alt="Premium Desk-Scene Template"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/agencyslider.jpg" alt="Premium Agency Template">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Open Imagination</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/app_landing_grid.jpg" alt="Premium App Landing">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
								<span><a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/comingsoon.jpg" alt="Premium Coming Soon Template">
								</a>
								<div class="portfolio-overlay">
									<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/deskscene.jpg" alt="Premium Desk-Scene Template"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/agencyslider.jpg" alt="Premium Agency Template">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Open Imagination</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/app_landing_grid.jpg" alt="Premium App Landing">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
								<span><a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/comingsoon.jpg" alt="Premium Coming Soon Template">
								</a>
								<div class="portfolio-overlay">
									<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="<?php bloginfo('template_directory'); ?>/includes/rs-plugin/demos/images/deskscene.jpg" alt="Premium Desk-Scene Template"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="<?php bloginfo('template_directory'); ?>/includes/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</article>

					</div><!-- #portfolio end -->

				</div>


		</section><!-- #content end -->

	
	


	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

<?php get_footer(); ?>
