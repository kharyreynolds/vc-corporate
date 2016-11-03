<?php get_header(); ?>

<body>
<?php vc_render_theme_header( 'bootstrap-header', array( 'class' =>  '' ) ); ?>

<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="main-content">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); endwhile; endif;
				$author_info = get_userdata( $post->post_author ); ?>
					<!-- Breadcrumbs -->
					<div class="menu-crumbs">
						<a href="<?php echo get_site_url(); ?>">Home</a>&nbsp;<i class="icon-angle-right"></i>&nbsp;<?php vc_breadcrum_category($post); ?>&nbsp;<i class="icon-angle-right"></i>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<!-- .breadcrumbs -->
					<!-- Article -->
					<article>
						<h1 class="post-title" style="font-family: 'Oswald', Arial;"><?php the_title(); ?></h1>
						<div class="i-category">
							<?php vc_post_categories($post); ?>
						</div>
						

						<div class="bold-divider"></div>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

						<div class="entry-footer">
							<div class="meta-tags">
								<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
							</div>
							
							<div class="line-divider"></div>
							<div class="social meta-share">
								<div class="row">
									<div class="col-sm-2"></div>
								 	<div class="col-sm-2">
								 	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php echo "Share on Facebook"; ?>" target="_blank"><i class="icon-facebook"></i></a>
									</div>
									<div class="col-sm-2">
										<a href="https://www.twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="icon-twitter"></i></a>
									</div>
									<div class="col-sm-2">
										<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="icon-google-plus"></i></a>
									</div>
									<div class="col-sm-2">
										<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source="><i class="icon-linkedin"></i></a>
									</div>
									<div class="col-sm-2"></div>
								</div>
							</div>

						

							<div class="line-divider"></div>
							
							
							<div class="next-prev">	
								<?php
										$prev_post = get_previous_post();
										$next_post = get_next_post();

										if ( !empty( $prev_post ) ){
											echo '<a href="' . esc_attr( get_permalink( $prev_post->ID ) ) . '" class="prev col-sm-6" rel="prev"><span class="col-sm-4"><i class="icon-angle-left"></i></span><span class="col-sm-8"><span class="np-caption">Previous Article</span><span class="np-title">' . get_the_title( $prev_post->ID ) . '</span></span></a>'; 
										}
										if ( !empty( $next_post ) ){
											echo '<a href="' . esc_attr( get_permalink( $next_post->ID ) ) . '" class="next col-sm-6" rel="next"><span class="col-sm-8"><span class="np-caption">Next Article</span><span class="np-title">' . get_the_title( $next_post->ID ) . '</span></span><span class="col-sm-4"><i class="icon-angle-right"></i></span></a>'; 
										}
								?>							                  
							</div>
							<div class="meta-author">
								<div class="row">
									<div class="col-sm-2">
										<div class="author-avatar alignleft">
											<?php echo get_avatar( $author_info->ID, 80 ); ?>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="np-caption">Author</div>
										<div class="author-name">
											<?php if ( $author_info->user_url ) : ?>
												<a href="<?php echo esc_url( $author_info->user_url ); ?>">
											<?php endif; ?>
											<?php echo esc_html( $author_info->display_name ); ?>
											<?php if ( $author_info->user_url ) : ?>
												</a>
											<?php endif; ?>
										</div>
										<div class="author-desc">
												<?php echo wpautop( $author_info->description ); ?>
										</div>
									</div>
								</div>
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
</body>