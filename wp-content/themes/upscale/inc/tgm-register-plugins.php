<?php
/*	
*	---------------------------------------------------------------------
*	MNKY Register the required plugins for this theme
*	--------------------------------------------------------------------- 
*/

add_action( 'tgmpa_register', 'mnky_theme_required_plugins' );

function mnky_theme_required_plugins() {

    
    // Array of plugin arrays.
    $plugins = array(

        array(
            'name'               => esc_html__('WPBakery Visual Composer', 'upscale'), // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => MNKY_PLUGINS . '/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '5.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),        
		array(
            'name'               => esc_html__('UpScale | Theme Core Extend', 'upscale'), // The plugin name.
            'slug'               => 'core-extend', // The plugin slug (typically the folder name).
            'source'             => MNKY_PLUGINS . '/core-extend.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),	
		array(
            'name'               => esc_html__('Revolution Slider', 'upscale'), // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => MNKY_PLUGINS . '/revslider.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '5.4.8.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		array(
            'name'               => esc_html__('Essential Grid', 'upscale'), // The plugin name.
            'slug'               => 'essential-grid', // The plugin slug (typically the folder name).
            'source'             => MNKY_PLUGINS . '/essential-grid.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '2.3.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		array(
            'name'               => esc_html__('Contact Form 7', 'upscale'), // The plugin name.
            'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '5.0'
        ),
		array(
            'name'               => esc_html__('Breadcrumb NavXT', 'upscale'), // The plugin name.
            'slug'               => 'breadcrumb-navxt', // The plugin slug (typically the folder name).
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '6.0.4'
        ),
		array(
            'name'               => esc_html__('Envato Market', 'upscale'), // The plugin name.
            'slug'               => 'envato-market', // The plugin slug (typically the folder name).
            'source'             => MNKY_PLUGINS . '/envato-market.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '2.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        )
    );

    
    // Array of configuration settings.
    $config = array(
        'id'           => 'upscale',				// Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                    // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
