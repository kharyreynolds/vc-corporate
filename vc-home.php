<?php /* Template name: VC Home Page*/ ?>
<?php get_header(); ?>

<body class="site-wrapper">
	<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

	<!-- Slide Revolution Featured Banner -->
  <section id="slider" class="clearfix">
		<!-- Featured Banner -->
		<div class="tp-banner-container rev_slider_wrapper fullscreen-container">
			<div class="tp-banner" >
					<ul>    <!-- SLIDE  -->
				<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php bloginfo('template_directory'); ?>/includes/images/slider/rev/main/s1-binary-thumb.png"  data-saveperformance="off"  data-title="Welcome to Canvas">
					<!-- MAIN IMAGE -->
					<img src="<?php bloginfo('template_directory'); ?>/includes/images/videos/binary-code-side.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<div class="featured-overlay"></div>
					<!-- LAYER NR. 1 -->
					<div class="tp-fade fadeout fullscreenvideo rs-background-video-layer"
						data-forcerewind="on"
						data-volume="mute"
						data-videowidth="100%"
						data-videoheight="100%"
						data-videomp4="<?php bloginfo('template_directory'); ?>/includes/images/videos/binary-code-side.mp4"
						data-videopreload="preload"
						data-videoloop="none"
						data-forceCover="1"
						data-aspectratio="16:9"
						data-autoplay="true"
						data-autoplayonlyfirsttime="false"
						data-nextslideatend="true"
						>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="revo-slider-prehead tp-caption customin ltl tp-resizeme uppercase bottommargin-sm"
					data-x="center"
					data-y="170"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
					data-speed="800"
					data-start="1000"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">Custom Wordpress Solutions for Growth Focused Companies</div>

					<div class="revo-slider-headline tp-caption customin ltl tp-resizeme nopadding noborder"
					data-x="center"
					data-y="center"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
					data-speed="800"
					data-start="1200"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">Discover How You Can Quickly<br/>Revamp an Underperforming Website<br/>and Build a Well-Designed Sales Machine!</div>

					<div class="revo-slider-subhead tp-caption customin ltl tp-resizeme"
					data-x="center"
					data-y="400"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
					data-speed="800"
					data-start="1400"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal;">Create a website that will provide you with predictable results designed to meet the strategic objectives of your company.</div>

					<div class="tp-caption customin ltl tp-resizeme"
					data-x="center"
					data-y="490"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
					data-speed="800"
					data-start="1550"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><a href="<?php echo site_url(); ?>/contact/" class="button button-border button-white button-light button-large button-rounded tright nomargin"><span>Schedule a Strategy Session</span> <i class="icon-angle-right"></i></a></div>



				</li>
			</ul>

			</div>
		</div>

		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

				var apiRevoSlider = tpj('.tp-banner').show().revolution(
				{
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					responsiveLevels:[1200,992,768,480,320],
					startwidth:1140,
					startheight:600,
					hideThumbs:200,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:3,

					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
                            style: "hermes",
                            enable: false,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
					},

					touchenabled:"on",
					onHoverStop:"on",

					swipe_velocity: 0.7,
					swipe_min_touches: 1,
					swipe_max_touches: 1,
					drag_block_vertical: false,


					parallax:"mouse",
					parallaxBgFreeze:"on",
					parallaxLevels:[8,7,6,5,4,3,2,1],
					parallaxDisableOnMobile:"on",

					keyboardNavigation:"on",

					shadow:0,
					fullWidth:"off",
					fullScreen:"on",

					spinner:"spinner0",

					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,

					shuffle:"off",


					forceFullWidth:"off",
					fullScreenAlignForce:"off",
					minFullScreenHeight:"400",

					hideThumbsOnMobile:"off",
					hideNavDelayOnMobile:1500,
					hideBulletsOnMobile:"off",
					hideArrowsOnMobile:"off",
					hideThumbsUnderResolution:0,

					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					fullScreenOffset:"0px"
				});

				apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
					if( $(window).width() > 992 ) {
						if( $('#slider ul > li').eq(data.slideIndex-1).hasClass('dark') ){
							$('#header.transparent-header:not(.sticky-header,.semi-transparent)').addClass('dark');
							$('#header.transparent-header.sticky-header,#header.transparent-header.semi-transparent.sticky-header').removeClass('dark');
							$('#header-wrap').removeClass('not-dark');
						} else {
							if( $('body').hasClass('dark') ) {
								$('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
								$('#header.transparent-header:not(.sticky-header,.semi-transparent)').find('#header-wrap').addClass('not-dark');
							} else {
								$('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
								$('#header-wrap').removeClass('not-dark');
							}
						}
						SEMICOLON.header.logo();
					}
				});

			}); //ready

		</script>
		<!-- END REVOLUTION SLIDER -->
	</section>
	

	<!-- WP Dev About Section -->
	<section class="content-wrap bottommargin">
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
	<section class="content-wrap">
		<div class="promo parallax white-text promo-full " style="background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/code-screen.jpg'); background-size:cover;" data-stellar-background-ratio="0.3">
			
			<div class="parallax-overlay grid-overlay"></div>
			<div class="container clearfix">
				<div class="row center">
					<div class="col-md-12 heading-block white-border topmargin-sm nobottommargin">
						<h2>Custom WordPress Solutions Done Right!</h2>
						<span>Successful Projects are Nothing New for Us...</span>
					</div>
				</div>

				<div class="row center">
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-users2" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #1abc9c;"><span data-from="100" data-to="216" data-refresh-interval="50" data-speed="2000"></span></div>
						<h5>Clients Served</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-briefcase" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #3498db;"><span data-from="325" data-to="467" data-refresh-interval="50" data-speed="2250"></span></div>
						<h5>No. of Projects</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-code" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #e74c3c;"><span data-from="55000" data-to="71703" data-refresh-interval="50" data-speed="2500"></span></div>
						<h5>Lines of Code</h5>
					</div>
					<div class="col-md-3" style="padding-top: 55px !important;">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-coffee" style="color: #dadada;"></i>
						<div class="counter counter-large counter-wlined" style="color: #9b59b6;"><span data-from="300" data-to="576" data-refresh-interval="30" data-speed="2750"></span></div>
						<h5>Cups of Coffee</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="content-wrap topmargin bottommargin-lg">
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
					<img src="<?php bloginfo('template_directory'); ?>/includes/images/services/imac-2.png">
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
	<section class="content-wrap">
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
