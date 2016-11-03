<?php get_header(); ?>

<body>
<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="main-content">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); endwhile; endif;
				 ?>
					
					<!-- Article -->
					<article>
						<h1 class="post-title"><?php the_title(); ?></h1>
		
						<div class="bold-divider"></div>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

						<div class="entry-footer">
							<div class="meta-tags">
								<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
							</div>
							
					


						<?php comments_template(); ?> <!-- need comments php file -->
					</article>
				</div>
			</div>
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 footer-divider"></div>
		</div>

	</div>
</section>

<?php get_footer(); ?>