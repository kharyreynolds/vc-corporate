<?php
$default_menu_args = array(
	
						'menu'              => 'primary',
                        'depth'             => 3,
                        'fallback_cb'     	=> '',
						'container'       	=> 'div',
						'container_class'   => 'navbar ',
						'menu_class'        => 'nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()

						// 'link_before'     	=> '<div>',
						// 'link_after'      	=> '</div>',
					);

$menu_args = wp_parse_args( $menu_args, $default_menu_args );

$default_params = array(
	'class' => 'dark',
);
$params = wp_parse_args( $extra_params, $default_params );

 ?>

<div class="container news-header-wrap">
	<!-- Static navbar -->
    <nav class="navbar navbar-default static">
      <div class="container-inner">
        <div id="header-branding">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <?php $logo_collapsed = _gop( 'min-logo' ); ?>
        <a class="navbar-brand" href="#">
            <img src="<?php $logo = _gop('logo'); echo $logo['url'];  ?>" />
            <img class="logo-collapsed" src="<?php echo ! empty( $logo_collapsed ) ? esc_url( $logo_collapsed['url'] ) : esc_url( $logo['url'] ); ?>" />
        </a>
        <p class="header-tagline">Black America vs the Hip Hop Industry</p>
                
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<?php wp_nav_menu( $menu_args ); ?>
      
    </div>
    <!-- /.navbar-collapse -->
    </div>
    </nav>
</div>
