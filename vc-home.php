<?php /* Template name: VC Home Page*/ ?>
<?php get_header(); ?>

<body class="site-wrapper">
	<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

	<!-- Slide Revolution Featured Banner -->
  	<?php vc_render_theme_slider( 'video-slider', array( 'class' =>  '' ) ); ?>
	

	<!-- WP Dev About Section -->
	<section class="content-wrap nopadding bottommargin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="heading-block topmargin">
						<h2>WordPress development can be a costly endeavor!</h2>
					</div>

					<div class="section-text">
						<p class="lead">This is especially true for projects that suffer from constant budget overruns and missed deadlines.</p>
						<p class="lead">Smart companies understand that in order to seamlessly launch a WordPress project on-time and under budget, it is critical that the project be planned correctly from the start.</p>
						<p class="lead">That’s where we come in…</p>
						<a href="<?php echo site_url(); ?>/about/" class="button button-desc button-border button-rounded site-color center">
							<span>Get to Know Us</span>
						</a>
					</div>

				</div>

				<div class="col-lg-6">
					<div class="section-image" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
						<img id="si-wplogo" src="<?php bloginfo('template_directory'); ?>/includes/images/logos/wordpress-logo.png" data-animate="fadeInUp" data-delay="100" alt="Chrome">
						
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Parallax Section - Stats Counter -->
	<section class="content-wrap bottommargin">
		<div class="section parallax" style="background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/code-screen.jpg'); background-size:cover; color: #FFF;" data-stellar-background-ratio="0.3">

		<div class="parallax-overlay grid-overlay"></div>

			<div class="container clearfix">
				<div class="row center">
					<div class="col-md-12 heading-block white-border topmargin-sm nobottommargin">
						<h2 class="white-color">Custom WordPress Solutions Done Right!</h2>
						<span class="white-color">Successful Projects are Nothing New for Us...</span>
					</div>
				</div>
				<div class="row center">
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-users2" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #1abc9c;"><span data-from="100" data-to="216" data-refresh-interval="50" data-speed="2000"></span></div>
						<h5 class="white-color">Clients Served</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-briefcase" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #3498db;"><span data-from="325" data-to="467" data-refresh-interval="50" data-speed="2250"></span></div>
						<h5 class="white-color">No. of Projects</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-code" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #e74c3c;"><span data-from="55000" data-to="71703" data-refresh-interval="50" data-speed="2500"></span></div>
						<h5 class="white-color">Lines of Code</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-coffee" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #9b59b6;"><span data-from="300" data-to="576" data-refresh-interval="30" data-speed="2750"></span></div>
						<h5 class="white-color">Cups of Coffee</h5>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Services Section -->
	<section class="content-wrap bottommargin">
		<div class="container clearfix">
			<div class="row">
				<div class="heading-block center">
					<h2>Our Expertise</h2>
					<span class="divcenter">Quickly engage your target audience, while encouraging faster growth and higher profits for your company.</span>
				</div>

				<div class="col-md-4 col-sm-6 bottommargin">
					<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/responsive-design.png" /></a>
						</div>
						<h3>Responsive Web Design</h3>
						<p>We create custom Wordpress themes that are fully responsive and easy to manage.</p>
					</div>

					<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/web-design.png" /></a>
						</div>
						<h3>Custom Theme Development</h3>
						<p>Having an effective website is the result of much more than simply an awesome design.</p>
					</div>

					<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/plugin-development.png" /></a>
						</div>
						<h3>Plugin Development</h3>
						<p>Increase the functionality of your website with the creation of your own custom plugins.</p>
					</div>
				</div>

				<div class="col-md-4 hidden-sm topmargin center">
					<img src="<?php bloginfo('template_directory'); ?>/includes/images/imac.png">
				</div>

				<div class="col-md-4 col-sm-6 bottommargin">
					<div class="feature-box topmargin" data-animate="fadeIn">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/web-analytics.png" /></a>
						</div>
						<h3>Dashboards &amp; Analytics</h3>
						<p>Gain instant access to tangible business data directly from your admin panel. </p>


					</div>

					<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/conversion-funnel.png" /></a>
						</div>
						<h3>Marketing Automation</h3>
						<p>Leverage the power of technology to generate more leads and new customers.</p>
					</div>

					<div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
						<div class="fbox-icon">
							<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/support-team.png" /></a>
						</div>
						<h3>Support &amp; Maintenance</h3>
						<p>Focus on growing your business and leave the on-going support of your website to the experts.</p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Parallax Promo Section -->
	<section class="content-wrap nopadding">
		<div class="section parallax dark nomargin noborder" style="padding: 100px 0; background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/coder-desk.jpg');" data-stellar-background-ratio="0.4">
			<div class="parallax-overlay black-overlay"></div>
			<div class="container center clearfix">
				<div class="row emphasis-title">
					<div class="col-md-12">
						<h2>Ready to Get Started?</h2>
						<p class="lead topmargin-sm">Supercharge Your Underperforming Website and Build an Automated Sales Machine.<br /> Discover How Your Business Can Leverage the Power of WordPress To Quickly Grow Sales and Maximize Profits!</p>
					</div>
				</div>

				<a href="<?php echo site_url(); ?>/contact/" class="button button-border button-rounded button-light button-large">Yes, I Want to Get Started Now</a>

			</div>
		</div>
	</section>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

<?php get_footer(); ?>
