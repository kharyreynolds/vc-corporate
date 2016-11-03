<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "vc_base";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'vc_base',
        'use_cdn' => TRUE,
        'display_name' => 'VC Theme Options',
        'display_version' => '1.0.0',
        'page_slug' => 'vc_base',
        'page_title' => 'Theme Options',
        'update_notice' => false,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'dev_mode' => false,
        
        // 'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Settings', 'redux-framework-demo' ),
        'id'     => 'general-settings',
        'desc'   => __( 'Description of the General Settings.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'title'    => __( 'Favicon', 'redux-framework-demo' ),
                'subtitle' => __( 'Please upload your favicon here.', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => __( 'Main Logo', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload the main logo for your website.', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'header_dimensions',
                'type'     => 'dimensions',
                'units'    => array('px','em', '%'),
                'title'    => __('Adjust Menu Bar Height) Option', 'redux-framework-demo'),
                'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
                'desc'     => __('Enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
                'width'    => false,
                'default'  => array('Height' => '150'),
            ),

            array(
                'id'       => 'min-logo',
                'type'     => 'media',
                'title'    => __( 'Minimized Menu Logo', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload smaller logo for minimized menu bar.', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'min_header_dimensions',
                'type'     => 'dimensions',
                'units'    => array('px','em', '%'),
                'title'    => __('Adjust Minimized Menu Bar Height', 'redux-framework-demo'),
                'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
                'desc'     => __('Enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
                'width'    => false,
                'default'  => array('Height' => '75'),
            ),
            array(
                'id'          => 'header-font',
                'type'        => 'typography', 
                'title'       => __('Heading Font', 'redux-framework-demo'),
                'google'      => true, 
                'font-backup' => true,
                'units'       =>'px',
                'subtitle'    => __('Select the Heading font type.', 'redux-framework-demo'),
                'default'     => array(
                        'color'       => '#333', 
                        'font-style'  => '700', 
                        'font-family' => 'Abel', 
                        'google'      => true,
                        'font-size'   => '33px', 
                        'line-height' => '40'
                    ),
            ),

            array(
                'id'       => 'site-color',
                'type'     => 'color',
                'title'    => __('Select Main Site Color', 'redux-framework-demo'), 
                'subtitle' => __('Pick the main color for the website.', 'redux-framework-demo'),
                'default'  => '#FFFFFF',
                'validate' => 'color',
            ),














        )
    ) );


























    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
    //     'id'         => 'opt-text-subsection',
    //     // 'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'text-example',
    //             'type'     => 'text',
    //             'title'    => __( 'Text Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text Area', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
    //     'id'         => 'opt-textarea-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'textarea-example',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

    /*
     * <--- END SECTIONS
     */
