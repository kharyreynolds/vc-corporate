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
					data-y="40"
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
					data-y="100"
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
					data-y="290"
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
					data-y="390"
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