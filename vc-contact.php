<?php /* Template name: VC Contact Page*/ ?>
<?php get_header(); ?>

<body class="site-wrapper">
	<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

	<!-- Page Title -->
	<section id="page-title" class="page-title page-title-parallax page-title-dark" style="background-image: url('<?php bloginfo('template_directory'); ?>/includes/images/parallax/52.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">
		<div class="parallax-overlay grid-overlay"></div>

		<div class="container clearfix">
			<h1>Contact Us</h1>
			<span>Get in Touch with Us</span>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Contact Us</li>
			</ol>
		</div>
	</section>

	<section class="content-wrap topmargin">
		<div class="container clearfix">
			<!-- Contact Form -->
			<div class="col_half">

				<div class="fancy-title title-dotted-border">
					<h3>Send us an Email</h3>
				</div>

				<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

				<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?php bloginfo('template_directory'); ?>/includes/mail/sendemail.php" method="post">

					<div class="form-process"></div>

					<div class="col_one_third">
						<label for="template-contactform-name">Name <small>*</small></label>
						<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
					</div>

					<div class="col_one_third">
						<label for="template-contactform-email">Email <small>*</small></label>
						<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
					</div>

					<div class="col_one_third col_last">
						<label for="template-contactform-phone">Phone</label>
						<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col_two_third">
						<label for="template-contactform-subject">Subject <small>*</small></label>
						<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
					</div>

					<div class="col_one_third col_last">
						<label for="template-contactform-service">Services</label>
						<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
							<option value="">-- Select One --</option>
							<option value="Wordpress">Wordpress</option>
							<option value="PHP / MySQL">PHP / MySQL</option>
							<option value="HTML5 / CSS3">HTML5 / CSS3</option>
							<option value="Graphic Design">Graphic Design</option>
						</select>
					</div>

					<div class="clear"></div>

					<div class="col_full">
						<label for="template-contactform-message">Message <small>*</small></label>
						<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
					</div>

					<div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>

					<div class="col_full">
						<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d site-bgcolor nomargin">Submit Comment</button>
					</div>

				</form>

				<script type="text/javascript">

					$("#template-contactform").validate({
						submitHandler: function(form) {
							$('.form-process').fadeIn();
							$(form).ajaxSubmit({
								target: '#contact-form-result',
								success: function() {
									$('.form-process').fadeOut();
									$('#template-contactform').find('.sm-form-control').val('');
									$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
									SEMICOLON.widget.notifications($('#contact-form-result'));
								}
							});
						}
					});

				</script>

			</div><!-- Contact Form End -->

			<!-- Contact Us Image -->
			<div class="col_half col_last">
				<div class="leftmargin-lg" >
					<img class="img-responsive allpadding" src="<?php bloginfo('template_directory'); ?>/includes/images/icons/support-team.png" data-animate="fadeInUp" data-delay="100" alt="Chrome">
				</div>
			</div>
	</section>
			


	<?php get_footer(); ?> 