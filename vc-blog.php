<?php /* Template name: VC Blog - Home Page */
get_header(); ?>

<body>
<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="main-content">
					<!-- Breadcrumbs -->
					<div class="menu-crumbs">
						<a href="<?php echo get_site_url(); ?>">Home</a>&nbsp;<i class="icon-angle-right"></i>&nbsp;<?php the_title(); ?></a>
					</div>
					<!-- .breadcrumbs -->
					<h1 class="post-title"><?php the_title(); ?></h1>
					<div class="bold-divider"></div>

					<div class="entry-content">
						<?php 

							$current_page = ! empty( $_GET['pg'] ) ? intval( $_GET['pg'] ) : 1;

							//WP_Query arguments
							$args = array(
							  'posts_per_page' => 9,
							  'paged' => max( 1, $current_page ),
							  'orderby' => 'post_date',
							  'order' => 'DESC',
							);

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();

									$author_info = get_userdata( $post->post_author ); 
						?>


									<div <?php post_class( 'row' ); ?>>
										<div class="col-md-4">
											<div class="featured-image">
												<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="<?php echo esc_attr( get_the_title() ); ?>">
													<?php if ( has_post_thumbnail() ) : ?>
														<?php the_post_thumbnail( 'vc-blog-thumbnail' ); ?>
													<?php else : ?>
														<img width="200" height="200" src="<?php echo esc_url( get_bloginfo( 'template_directory' ) . '/includes/img/default-post-thumbnail.jpg' ); ?>" alt="default-thumbnail" />
													<?php endif; ?>
												</a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="post-feed">
												<div class="meta-info">
													<span class="ava-auth">
														<?php echo get_avatar( $author_info->ID, 22 ); ?>
													</span>
													<span itemprop="author" class="entry-author">
														<a href="<?php echo esc_url( $post->post_author ); ?>"><?php echo esc_html( $author_info->display_name ); ?></a>
													</span>
													<span class="coma">,</span>
													<time itemprop="dateCreated" class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_date(); ?></time>
												</div>
												<div class="entry-title">
													<a itemprop="url" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title( '<h3>', '</h3>' ); ?></a>
												</div>
												<div class="meta-count">
													<div class="i-category">
														<?php vc_post_categories($post); ?>
													</div>
												</div>
												<div class="post-excerpt">
													<?php the_excerpt(); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="line-divider"></div>

									<?php 
									
									
								}
							} else {
								// no posts found
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
					</div>
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

</body>