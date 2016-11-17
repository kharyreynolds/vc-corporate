<?php /* Template name: VC Services Page*/ ?>
<?php get_header(); ?>

<body class="site-wrapper">
	<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

	<!-- Page Title -->
	<section id="page-title" class="page-title page-title-parallax page-title-dark" style="background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/web-dev-services.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">
		<div id="services-page" class="parallax-overlay grid-overlay"></div>

		<div class="container clearfix">
			<h1>Services</h1>
			<span>Custom WordPress Solutions for Growth Focused Companies</span>
			<ol class="breadcrumb">
				<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
				<li class="active">Services</li>
			</ol>
		</div>
	</section>

	<section class="content-wrap topmargin-lg bottommargin-lg">
		<div class="container clearfix">
			<div class="heading-block center bottommargin">
				<h3>Our Specialties</h3>
				<span>We offer a variety of services that effectively work together to deliver extraordinary value and maximize the return on your development costs.</span>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/responsive-design.png" /></a>
					</div>
					<h3>Theme Development</h3>
					<p>Having an effective website is the result of much more than simply an awesome design. We create custom Wordpress themes that are built to meet the strategic objectives of your company.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/web-design.png" /></a>
					</div>
					<h3>Theme Customization</h3>
					<p>Whether you need to tweak the design or functionality of your website, we can assist you in customizing your existing Wordpress theme, while ensuring responsiveness and compatibility across multiple platforms.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/plugin-development.png" /></a>
					</div>
					<h3>Plugin Development</h3>
					<p>We are up-to-date with the latest wordpress plugins and can even assist you in creating custom plugins to increase the functionality of your website and position your company for uninterrupted growth.</p>
				</div>
			</div>

			<div class="clear"></div>

			<div class="col_one_third nobottommargin">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/web-analytics.png" /></a>
					</div>
					<h3>Dashboards &amp; Analytics</h3>
					<p>Create strategic dashboards for your company and gain instant access to tangible business data directly from your WordPress admin panel.</p>
				</div>
			</div>

			<div class="col_one_third nobottommargin">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/conversion-funnel.png" /></a>
					</div>
					<h3>Marketing Automation</h3>
					<p>Leverage the power of the technology to streamline your marketing systems and empower your sales team to close more business with ease.</p>
				</div>
			</div>

			<div class="col_one_third nobottommargin col_last">
				<div class="feature-box fbox-effect">
					<div class="fbox-icon">
						<a href="#"><img class="nobgcolor noradius" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/support-team.png" /></a>
					</div>
					<h3>Support &amp; Maintenance</h3>
					<p>Your time should be spent focusing on the growth of your business, not worrying about on-going Wordpress support. Leave the on-going support of your website to the experts.</p>
				</div>
			</div>
		</div>
	</section>

		
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

<?php get_footer(); ?>
