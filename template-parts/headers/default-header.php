<?php
$default_menu_args = array(
    
                        'menu'              => 'primary',
                        'container'         => 'nav',
                        'container_id'      => 'primary-menu',
                        'container_class'   => 'nav-custom',
                        'depth'             => 3,
                        'fallback_cb'       => '',
                    );

$menu_args = wp_parse_args( $menu_args, $default_menu_args );

$default_params = array(
    'class' => 'dark',
);
$params = wp_parse_args( $extra_params, $default_params );

 ?>

 <!-- Header
        ============================================= -->
<header id="header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="<?php echo get_site_url(); ?>" class="standard-logo"><img src="<?php $logo = _gop('logo'); echo $logo['url'];  ?>" /></a>
                    <a href="<?php echo get_site_url(); ?>" class="retina-logo"><img src="<?php $logo = _gop('logo'); echo $logo['url'];  ?>" /></a>
                </div><!-- #logo end -->

                <?php wp_nav_menu( $menu_args ); ?>

        </div>
    </div>
</header><!-- #header end -->