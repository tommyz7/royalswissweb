<?php
/*	
*	---------------------------------------------------------------------
*	MNKY Custom meta boxes
*	--------------------------------------------------------------------- 
*/


add_action( 'admin_init', 'mnky_custom_meta_boxes' );

function mnky_custom_meta_boxes() {
	
	$mnky_meta_page = array(
		'id'          => 'mnky_page_options',
		'title'       => esc_html__( 'Page Options', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'page'),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'id'          => 'general_tab',
				'label'       => esc_html__( 'General', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'label'       => esc_html__( 'Custom theme accent color', 'upscale' ),
				'id'          => 'mnky_custom_accent_color',
				'desc'        => esc_html__( 'Set different accent color for this page. Leave blank for default color.', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			),
			array(
				'label'       => esc_html__( 'Custom theme secondary accent color', 'upscale' ),
				'id'          => 'mnky_custom_secondary_accent_color',
				'desc'        => esc_html__( 'Set different secondary accent color for this page. Leave blank for default color.', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			),
			array(
				'id'          => 'mnky_custom_layout_style',
				'label'       => esc_html__( 'Layout style', 'upscale' ),
				'desc'        => sprintf (esc_html_x( '1. Default layout %1$s 2. Full width layout %1$s 3. Boxed layout', '%1$s stands for line break' ,'upscale' ), '<br/>'),
				'std'         => '',
				'type'        => 'radio-image',
			),
			array(
				'id'          => 'mnky_custom_body_background',
				'label'       => esc_html__( 'Body background', 'upscale' ),
				'desc'        => esc_html__( 'Choose body background for boxed layout.', 'upscale' ),
				'std'         => '',
				'type'        => 'background',
				'condition'   => 'mnky_custom_layout_style:is(boxed)',
			),			 
			array(
				'id'          => 'mnky_custom_content_width',
				'label'       => esc_html__( 'Content width', 'upscale' ),
				'desc'        => esc_html__( 'This setting will apply selected layout width to your website. Leave empty for default.', 'upscale' ),
				'std'         => '',
				'type'        => 'text',
			),
			array(
				'id'          => 'header_tab',
				'label'       => esc_html__( 'Header', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'id'          => 'mnky_sticky_header',
				'label'       => esc_html__( 'Sticky header', 'upscale' ),
				'desc'        => esc_html__( 'Do you want a header to stick to top while you scroll?', 'upscale' ),
				'std'         => '',
				'type'        => 'radio',
				'condition'   => '',
				'operator'    => 'and',
				'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => esc_html__( 'Default (set in Theme Options)', 'upscale' ),
					'src'         => ''
				  ),				  
				  array(
					'value'       => 'sticky_header_smart',
					'label'       => esc_html__( 'Smart header (sticky only when scrolling up)', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'sticky_header',
					'label'       => esc_html__( 'Always sticky header', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'no_sticky',
					'label'       => esc_html__( 'Disable sticky header', 'upscale' ),
					'src'         => ''
				  )
				)
			  ),
			array(
				'label'       => esc_html__( 'Top bar', 'upscale' ),
				'id'          => 'mnky_top_bar',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Disable top bar on this page only. If top bar is not enabled in theme options, this setting has no effect.', 'upscale' ),
				'std'         => 'on'
			),	
			array(
				'label'       => esc_html__( 'Overlay header', 'upscale' ),
				'id'          => 'mnky_header_overlay',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enable overlay header on this page. Overlay header is configured in Theme Options/Header options/Overlay Header.', 'upscale' ),
				'std'         => 'off'
			),			
			array(
				'label'       => esc_html__( 'Page title', 'upscale' ),
				'id'          => 'mnky_page_title',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Display or hide page title.', 'upscale' ),
				'std'         => 'on'
			),
			array(
				'label'       => esc_html__( 'Custom page title styles', 'upscale' ),
				'id'          => 'mnky_custom_page_title_styles',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Use custom page title styles for this page.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_page_title:is(on)'
			),
			array(
				'label'       => esc_html__( 'Breadcrumbs position', 'upscale' ),
				'id'          => 'mnky_custom_page_title_breadcrumbs_position',
				'type'        => 'select',
				'desc'        => esc_html__( 'Choose display type for breadcrumbs. If your titles tend to be long, it is better to use stacked layout.', 'upscale' ),
				'std'         => '',
				'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => esc_html__( 'Inline', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'excerpt',
					'label'       => esc_html__( 'Stacked', 'upscale' ),
					'src'         => ''
				  )
				),
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Title area paddings', 'upscale' ),
				'id'          => 'mnky_custom_page_title_paddings',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x('Set custom paddings for title area. Use shorthand format and add size units, e.g., %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>40px 30px</code>'),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Title color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_text_color',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom title text color.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Background color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_color',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom background color for page title.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Enable gradient background', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables left to right gradient background for page title area.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Gradient start color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient_start',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom color at gradient start.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_gradient:is(on)'
			),
			array(
				'label'       => esc_html__( 'Gradient end color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient_end',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom color at gradient end.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_gradient:is(on)'
			),
			array(
				'label'       => esc_html__( 'Enable background image', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_image_switch',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables background image for title area.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Page title background image', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_image',
				'type'        => 'background',
				'desc'        => esc_html__( 'Set custom background image for title area.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_image_switch:is(on)'
			),
			array(
				'id'          => 'precontent_tab',
				'label'       => esc_html__( 'Pre-content', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),			
			array(
				'label'       => esc_html__( 'Pre-content area', 'upscale' ),
				'id'          => 'mnky_pre_content_activation',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Activates additional area before page title and main content.', 'upscale' ),
				'std'         => 'off'
			 ),
			array(
				'label'       => esc_html__( 'Height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area height. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>250px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-first'
			),
			array(
				'label'       => esc_html__( 'Responsive height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_responsive_height',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables auto height in responsive mode.', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'std'         => 'off',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Max width (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area max width. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>1200px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Paddings (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_paddings',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area paddings. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>40px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'id'          => 'mnky_pre_content_bg',
				'label'       => esc_html__( 'Background', 'upscale' ),
				'desc'        => esc_html__( 'Set custom background color or image.', 'upscale' ),
				'type'        => 'background',
				'rows'        => '',
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Custom HTML', 'upscale' ),
				'id'          => 'mnky_pre_content_html',
				'type'        => 'textarea',
				'rows'        => '4',
				'desc'        => esc_html__( 'Insert any custom code you wish. Shortcodes are allowed.', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-last'
			),
			array(
				'id'          => 'section_scroll_tab',
				'label'       => esc_html__( 'Section scroll', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'label'       => esc_html__( 'Enable section scroll', 'upscale' ),
				'id'          => 'mnky_section_scroll',
				'desc'        => esc_html( 'Advance full section on each scroll. <br/><br/><strong>Important Notes:</strong><br/> 1. Works best with overlay header.<br/>2. Choose page template with no vertical paddings.<br/>3. Elements preceding first section should be disabled (turn off page title and pre-content area).', 'upscale' ),
				'type'        => 'on-off',
				'std'         => 'off',
			),			
			array(
				'label'       => esc_html__( 'Animation', 'upscale' ),
				'id'          => 'mnky_section_animation',
				'desc'        => '',
				'type'        => 'on-off',
				'std'         => 'on',
				'condition'   => 'mnky_section_scroll:is(on)',
			),
			array(
				'label'       => esc_html__( 'Show Pagination?', 'upscale' ),
				'id'          => 'mnky_section_pagination',
				'desc'        => '',
				'type'        => 'on-off',
				'std'         => 'off',
				'condition'   => 'mnky_section_scroll:is(on)',
			),
			array(
				'label'       => esc_html__( 'Section pagination color', 'upscale' ),
				'id'          => 'mnky_section_pagination_color',
				'desc'        => '',
				'std'         => '#fff',
				'type'        => 'colorpicker_opacity',
				'condition'   => 'mnky_section_scroll:is(on),mnky_section_pagination:is(on)',
			),

		)
	);
	
	$mnky_meta_post = array(
		'id'          => 'mnky_post_options',
		'title'       => esc_html__( 'Post Options', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'post' ),
		'context'     => 'normal',
		'priority'    => 'core',
		'fields'      => array(
			array(
				'id'          => 'general_tab',
				'label'       => esc_html__( 'General', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'label'       => esc_html__( 'Custom theme accent color', 'upscale' ),
				'id'          => 'mnky_custom_accent_color',
				'desc'        => esc_html__( 'Set different accent color for this page. Leave blank for default color.', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			),
			array(
				'label'       => esc_html__( 'Custom theme secondary accent color', 'upscale' ),
				'id'          => 'mnky_custom_secondary_accent_color',
				'desc'        => esc_html__( 'Set different secondary accent color for this page. Leave blank for default color.', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			),
			array(
				'id'          => 'mnky_custom_layout_style',
				'label'       => esc_html__( 'Layout style', 'upscale' ),
				'desc'        => sprintf (esc_html_x( '1. Default layout %1$s Selected in Appearance / Theme Options / General Options %1$s%1$s 2. Full width layout %1$s3. Boxed layout', '%1$s stands for line break' ,'upscale' ), '<br/>'),
				'std'         => '',
				'type'        => 'radio-image',
				'section'     => 'general',
			),
			array(
				'id'          => 'mnky_custom_body_background',
				'label'       => esc_html__( 'Body background', 'upscale' ),
				'desc'        => esc_html__( 'Choose body background for boxed layout.', 'upscale' ), 
				'std'         => '',
				'type'        => 'background',
				'section'     => 'general',
				'condition'   => 'mnky_custom_layout_style:is(boxed)',
			),			 
			array(
				'id'          => 'mnky_custom_content_width',
				'label'       => esc_html__( 'Content width', 'upscale' ),
				'desc'        => esc_html__( 'This setting will apply selected layout width to your website. Leave empty for default.', 'upscale' ), 
				'std'         => '',
				'type'        => 'text',
				'section'     => 'general',
			),
			array(
				'label'       => esc_html__( 'Top bar', 'upscale' ),
				'id'          => 'mnky_top_bar',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Disable top bar on this page only. If top bar is not enabled in theme options, this setting has no effect.', 'upscale' ),
				'std'         => 'on'
			),	
			array(
				'id'          => 'post_options_tab',
				'label'       => esc_html__( 'Post settings', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'id'          => 'mnky_post_lead_content',
				'label'       => esc_html__( 'Lead content', 'upscale' ),
				'desc'        => esc_html__( 'Optional content displayed below the title. Shortcode enabled. It will not be included into post excerpt.', 'upscale' ),
				'std'         => '',
				'type'        => 'textarea',
				'rows'        => '4'
			),		
			array(
				'label'       => esc_html__( 'Post title area', 'upscale' ),
				'id'          => 'mnky_single_post_header',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enable default title area for this post.', 'upscale' ),
				'std'         => 'on'
			), 
			array(
				'label'       => esc_html__( 'Custom post title styles', 'upscale' ),
				'id'          => 'mnky_custom_page_title_styles',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Use custom post title styles for this page.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_single_post_header:is(on)'
			),
			array(
				'label'       => esc_html__( 'Breadcrumbs position', 'upscale' ),
				'id'          => 'mnky_custom_page_title_breadcrumbs_position',
				'type'        => 'select',
				'desc'        => esc_html__( 'Choose display type for breadcrumbs. If your titles tend to be long, it is better to use stacked layout.', 'upscale' ),
				'std'         => '',
				'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => esc_html__( 'Inline', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'excerpt',
					'label'       => esc_html__( 'Stacked', 'upscale' ),
					'src'         => ''
				  )
				),
				'condition'   => 'mnky_page_title:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Title area paddings', 'upscale' ),
				'id'          => 'mnky_custom_page_title_paddings',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x('Set custom paddings for title area. Use shorthand format and add size units, e.g., %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>40px 30px</code>'),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Title color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_text_color',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom title text color.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Background color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_color',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom background color for page title.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Enable gradient background', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables left to right gradient background for page title area.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Gradient start color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient_start',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom color at gradient start.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_gradient:is(on)'
			),
			array(
				'label'       => esc_html__( 'Gradient end color', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_gradient_end',
				'type'        => 'colorpicker_opacity',
				'desc'        => esc_html__( 'Choose custom color at gradient end.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_gradient:is(on)'
			),
			array(
				'label'       => esc_html__( 'Enable background image', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_image_switch',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables background image for title area.', 'upscale' ),
				'std'         => 'off',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on)'
			),
			array(
				'label'       => esc_html__( 'Page title background image', 'upscale' ),
				'id'          => 'mnky_custom_page_title_background_image',
				'type'        => 'background',
				'desc'        => esc_html__( 'Set custom background image for title area.', 'upscale' ),
				'std'         => '',
				'condition'   => 'mnky_single_post_header:is(on),mnky_custom_page_title_styles:is(on),mnky_custom_page_title_background_image_switch:is(on)'
			),
			array(
				'label'       => esc_html__( 'Featured image after title', 'upscale' ),
				'id'          => 'mnky_content_featured_img',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Do you want to display featured image after title in content?', 'upscale' ),
				'std'         => 'on'
			), 
			array(
				'id'          => 'mnky_custom_post_template',
				'label'       => esc_html__( 'Template', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'radio-image',
				'desc'        => '',
			),
			array(
				'id'          => 'mnky_custom_content_style',
				'label'       => esc_html__( 'Content style', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'select',
				'desc'        => sprintf (esc_html_x( '1. Standard one column %1$s 2. Divided with featured image on the left %1$s 3. Divided with featured image on the right', '%1$s stands for line break' ,'upscale' ), '<br/>'),
				'choices'     => array( 
				  array(
					'value'       => '1',
					'label'       => esc_html__( 'Standard one column', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => '2',
					'label'       => esc_html__( 'Divided with featured image on the left', 'upscale' ),
					'src'         => ''
				  ),
				  array(
					'value'       => '3',
					'label'       => esc_html__( 'Divided with featured image on the right', 'upscale' ),
					'src'         => ''
				  )  				  
				)
			),
						array(
				'label'       => esc_html__( 'Set different width for paragraphs', 'upscale' ),
				'id'          => 'mnky_post_width',
				'type'        => 'text',
				'std'         => '',
				'desc'        => esc_html__( 'Specify maximum width for text paragraphs without affecting other content , e.g., images.', 'upscale' ),
			),
			array(
				'label'       => esc_html__( 'Post labels', 'upscale' ),
				'id'          => 'mnky_post_labels',
				'type'        => 'list_item',
				'std'         => '',
				'desc'        => esc_html__( 'Add some labels to the post, e.g., "Sponsored Content"', 'upscale' ),
				'settings'    => array( 
				array(
					'id'          => 'mnky_post_label_text',
					'label'       => esc_html__( 'Label text', 'upscale' ),
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'operator'    => 'and'
				  ),
				array(
					'id'          => 'mnky_post_label_color',
					'label'       => esc_html__( 'Choose label color', 'upscale' ),
					'desc'        => '',
					'std'         => '',
					'type'        => 'colorpicker_opacity',
					'operator'    => 'and'
				  )
				)

			),
			array(
				'id'          => 'precontent_tab',
				'label'       => esc_html__( 'Pre-content', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'tab',
			),
			array(
				'label'       => esc_html__( 'Pre-content area', 'upscale' ),
				'id'          => 'mnky_pre_content_activation',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Activates additional area before page title and main content.', 'upscale' ),
				'std'         => 'off'
			),
			array(
				'label'       => esc_html__( 'Height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area height. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>250px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-first'
			),
			array(
				'label'       => esc_html__( 'Responsive height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_responsive_height',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables auto height in responsive mode.', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'std'         => 'off',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Max width (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area max width. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>1200px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Paddings (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_paddings',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area paddings. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>40px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'id'          => 'mnky_pre_content_bg',
				'label'       => esc_html__( 'Background', 'upscale' ),
				'desc'        => esc_html__( 'Set custom background color or image.', 'upscale' ),
				'type'        => 'background',
				'rows'        => '',
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Custom HTML', 'upscale' ),
				'id'          => 'mnky_pre_content_html',
				'type'        => 'textarea',
				'rows'        => '4',
				'desc'        => esc_html__( 'Insert any custom code you wish. Shortcodes are allowed.', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-last'
			)
		)
	
	);
	
	$mnky_meta_featured_image_caption = array(
		'id'          => 'mnky_featured_image_caption',
		'title'       => esc_html__( 'Featured image caption', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'post' ),
		'context'     => 'side',
		'priority'    => 'core',
		'fields'      => array(			
			array(
				'label'       => '',
				'id'          => 'mnky_featured_image_caption_text',
				'type'        => 'text',
				'std'         => '',
				'desc'        => esc_html__( 'Optional caption text for the featured image. Simple HTML allowed. *If featured image in content is disabled, will be displayed below header image, if present.', 'upscale' )
			)
		)
	);
	
	$mnky_meta_custom_post_link= array(
		'id'          => 'mnky_custom_post_link',
		'title'       => esc_html__( 'Custom url for link post type', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'post' ),
		'context'     => 'side',
		'priority'    => 'core',
		'fields'      => array(			
			array(
				'label'       => '',
				'id'          => 'mnky_custom_post_link_url',
				'type'        => 'text',
				'std'         => '',
				'desc'        => esc_html__( 'Optional custom url for the link post type. Applied to title and featured image in blog view. Supports external links.', 'upscale' )
			)
		)
	);
	
	$mnky_meta_post_reviews = array(
		'id'          => 'mnky_post_reviews',
		'title'       => esc_html__( 'Product Review', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'post' ),
		'context'     => 'normal',
		'priority'    => 'core',
		'fields'      => array(		
			array(
			'label'       => esc_html__( 'Enable Reviews', 'upscale' ),
			'id'          => 'mnky_enable_review',
			'type'        => 'on-off',
			'desc'        => esc_html__( 'Add review functionality to this post.', 'upscale' ),
			'std'         => 'off'	
			),
			array(
				'label'       => esc_html__( 'Review position', 'upscale'),
				'id'          => 'mnky_review_position',
				'type'        => 'select',
				'choices'     => array( 
					array(
						'value'       => 'top',
						'label'       => esc_html__( 'Top of the post', 'upscale' ),
						'src'         => ''
					),
					array(
						'value'       => 'bottom',
						'label'       => esc_html__( 'Bottom of the post', 'upscale' ),
						'src'         => ''
					)
				),	
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Choose where review will appear', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Review title', 'upscale'),
				'id'          => 'mnky_review_title',
				'type'        => 'text',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Name this review', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Overall rating', 'upscale'),
				'id'          => 'mnky_review_overall_rating',
				'type'        => 'numeric-slider',
				'std'         => '5',
				'min_max_step'=> '0,10,0.1',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Give overall rating from 0 to 10 to this product.', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Use review breakdown', 'upscale' ),
				'id'          => 'mnky_review_breakdown',
				'type'        => 'on-off',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'If this option is active, overall review rating will be calculated from the ratings in the list.', 'upscale' ),
				'std'         => 'off'
			), 	
			array(
				'label'       => esc_html__( 'Review ratings breakdown', 'upscale' ),
				'id'          => 'mnky_review_ratings',
				'type'        => 'list_item',
				'std'         => '',
				'desc'        => esc_html__( 'Rate product from various aspects, e.g., "Design, Features, Performance"', 'upscale' ),
				'condition'   => 'mnky_enable_review:is(on),mnky_review_breakdown:is(on)',
				'class'       => 'child-options child-first child-last',	
				'settings'    => array( 
				array(
					'id'          => 'mnky_review_aspect_name',
					'label'       => esc_html__( 'Name', 'upscale' ),
					'std'         => '',
					'type'        => 'text',
					'desc'        => esc_html__( 'Name this review aspect,  e.g., "Design"', 'upscale' ),
					'operator'    => 'and'
				  ),
				array(
					'id'          => 'mnky_review_aspect_rating',
					'label'       => esc_html__( 'Rating', 'upscale' ),
					'desc'        => '',
					'type'        => 'numeric-slider',
					'std'         => '5',
					'min_max_step'=> '0,10,0.1',
					'operator'    => 'and'
				  )
				)
			),
			array(
				'label'       => esc_html__( 'Good things', 'upscale' ),
				'id'          => 'mnky_review_good_title',
				'type'        => 'text',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Add title for describing good things in this product, e.g, "The Good"', 'upscale' )
			),
			array(
				'label'       => '',
				'id'          => 'mnky_review_good',
				'type'        => 'textarea',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Describe what was good in this product', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Bad things', 'upscale' ),
				'id'          => 'mnky_review_bad_title',
				'type'        => 'text',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Add title for describing bad things in this product, e.g, "The Bad"', 'upscale' )
			),
			array(
				'label'       => '',
				'id'          => 'mnky_review_bad',
				'type'        => 'textarea',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Describe what was bad in this product', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Bottom line', 'upscale' ),
				'id'          => 'mnky_review_bottomline_title',
				'type'        => 'text',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Add title for describing the bottom line of this product, e.g, "The Bottom Line"', 'upscale' )
			),
			array(
				'label'       => '',
				'id'          => 'mnky_review_bottomline',
				'type'        => 'textarea',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'So what is the bottom line for this product?', 'upscale' )
			),
			array(
				'label'       => esc_html__( 'Custom content', 'upscale' ),
				'id'          => 'mnky_review_custom_field',
				'type'        => 'textarea',
				'std'         => '',
				'condition'   => 'mnky_enable_review:is(on)',
				'desc'        => esc_html__( 'Add any custom content here, shortcodes are allowed', 'upscale' )
			)
		)
	);
	
	$mnky_meta_ads = array(
		'id'          => 'mnky_ads_options',
		'title'       => esc_html__( 'Ad Options', 'upscale' ),
		'desc'        => '',
		'pages'       => array( 'ads' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(			
			array(
				'label'       => esc_html__( 'URL', 'upscale' ),
				'id'          => 'mnky_ad_url',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Include %1$s %2$s or %3$s', '%1$s, %2$s, %3$s stand for protocol types.' ,'upscale' ), '<code>http://</code>', '<code>https://</code>', '<code>//</code>')
			),
			array(
				'id'          => 'mnky_ad_url_target',
				'label'       => esc_html__( 'Target', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'select',
				'desc'        => esc_html__( 'The target attribute specifies how to open the link.', 'upscale' ),
				'choices'     => array( 
					array(
						'value'       => '_blank',
						'label'       => esc_html__( '_blank (opens in new window or tab)', 'upscale' ),
						'src'         => ''
					),
					array(
						'value'       => '_self',
						'label'       => esc_html__( '_self (opens in the same frame as it was clicked)', 'upscale' ),
						'src'         => ''
					)
				),	
				'operator'    => 'and',
				'condition'   => 'mnky_ad_url:not()'
			),			
			array(
				'id'          => 'mnky_ad_url_rel',
				'label'       => esc_html__( 'Use rel="nofollow"', 'upscale' ),
				'desc'        => '',
				'std'         => '',
				'type'        => 'select',
				'desc'        => sprintf( wp_kses_post( _x( 'Specifies the relationship between the current document and the linked document. %1$s <a href="%2$s">Should I use it?</a>', '%1$s stands for line break, %2$s stands for linked page.','upscale' ) ), '<br/>', esc_url( 'https://support.google.com/webmasters/answer/96569?hl=en' ) ),
				'choices'     => array( 
					array(
						'value'       => '',
						'label'       => esc_html__( 'No', 'upscale' ),
						'src'         => ''
					),
					array(
						'value'       => 'rel=nofollow',
						'label'       => esc_html__( 'Yes', 'upscale' ),
						'src'         => ''
					)
				),	
				'operator'    => 'and',
				'condition'   => 'mnky_ad_url:not()'
			),
			array(
				'label'       => esc_html__( 'Alternative text', 'upscale' ),
				'id'          => 'mnky_ad_alt_text',
				'type'        => 'text',
				'desc'        => esc_html__( 'Add text for alt attribute.', 'upscale' )
			),	
			array(
				'label'       => esc_html__( 'Advertisement block width', 'upscale' ),
				'id'          => 'mnky_ad_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify maximum ad block width, e.g. %s', '%s stands for example value, do not delete it.' ,'upscale' ), '<code>140px</code>')
			),			
			array(
				'label'       => esc_html__( 'Advertisement block height (optional)', 'upscale' ),
				'id'          => 'mnky_ad_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify maximum ad block height, e.g. %1$s %2$s Will cut off ad block, if value smaller than actual ad size used.', '%1$s stands for example value, %2$s stands for line break.' ,'upscale' ), '<code>440px</code>', '<br/>')
			),
			array(
				'label'       => esc_html__( 'Advertisement block position (optional)', 'upscale' ),
				'id'          => 'mnky_ad_position',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify ad block position using css margin: property. %1$s For example %2$s will center the ad inside.', '%1$s stands for line break, %2$s stands for example value.' ,'upscale' ), '<br/>', '<code>0 auto</code>')
			),
			array(
				'label'       => esc_html__( 'Advertisement block float (optional)', 'upscale' ),
				'id'          => 'mnky_ad_float',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify ad block float using css float: property. %1$s For example %2$s will float ad to the left side.', '%1$s stands for line break, %2$s stands for example value.' ,'upscale' ), '<br/>', '<code>left</code>')
			),
			array(
				'id'          => 'mnky_ad_image',
				'label'       => esc_html__( 'Advertisement Image', 'upscale' ),
				'desc'        => esc_html__( 'Choose advertisement image.', 'upscale' ),
				'std'         => '',
				'type'        => 'upload'
			),
			array(
				'label'       => esc_html__( 'Advertisement image width', 'upscale' ),
				'id'          => 'mnky_ad_image_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify width of ad image for the "width" html attribute, e.g. %s', '%s stands for example value, do not delete it.' ,'upscale' ), '<code>140</code>')
			),			
			array(
				'label'       => esc_html__( 'Advertisement image height', 'upscale' ),
				'id'          => 'mnky_ad_image_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify height of ad image for the "height" html attribute, e.g. %1$s %2$s It will not affect actual image display height.', '%1$s stands for example value, %2$s stands for line break.', 'upscale' ), '<code>400</code>', '<br/>')
			),
			array(
				'label'       => esc_html__( 'Responsive advertisement image', 'upscale' ),
				'id'          => 'mnky_responsive_ad',
				'type'        => 'on-off',
				'desc'        => esc_html__('Use different image for smaller screens', 'upscale' ),
				'std'         => 'off'
			), 
			array(
				'label'       => esc_html__( 'Advertisement Image', 'upscale' ),
				'id'          => 'mnky_responsive_ad_image',
				'std'         => '',
				'type'        => 'upload',
				'desc'        => esc_html__( 'Choose advertisement image for screens below 979px (Tablet portrait) and below 1024px (Tablet landscape), if placed in header widget area.', 'upscale' ),
				'condition'   => 'mnky_responsive_ad:is(on)',
				'class'       => 'child-options child-first'				
			),
			array(
				'label'       => esc_html__( 'Responsive advertisement image width', 'upscale' ),
				'id'          => 'mnky_responsive_ad_image_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify width of ad image for the "width" html attribute, e.g. %s', '%s stands for example value. Do not delete it.', 'upscale' ), '<code>140</code>'),
				'condition'   => 'mnky_responsive_ad:is(on)',
				'class'       => 'child-options'				
			),			
			array(
				'label'       => esc_html__( 'Responsive advertisement image height', 'upscale' ),
				'id'          => 'mnky_responsive_ad_image_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Specify height of ad image for the "height" html attribute, e.g. %1$s %2$s It will not affect actual image display height.', '%1$s stands for example value, %2$s stands for line break.', 'upscale' ), '<code>400</code>', '<br/>'),
				'condition'   => 'mnky_responsive_ad:is(on)',
				'class'       => 'child-options child-last'				
			),
			array(
				'label'       => esc_html__( 'Hide ad on mobiles', 'upscale' ),
				'id'          => 'mnky_hide_responsive_ad',
				'type'        => 'on-off',
				'desc'        =>  esc_html__( 'Hide advertisement on screens smaller than 767px (Mobile phones).', 'upscale' ),
				'std'         => 'off'
			), 
			array(
				'label'       => esc_html__( 'Label', 'upscale' ),
				'id'          => 'mnky_ad_note',
				'type'        => 'text',
				'desc'        => esc_html__( 'Optional label under advertisement, e.g. "Sponsored" or "Advertisement".', 'upscale' )
			),	
			array(
				'label'       => '',
				'id'          => 'mnky_ads_textblock',
				'type'        => 'textblock',
				'desc'        => '<div class="section-title">'. esc_html__( 'If you use Custom HTML, you can leave fields above empty.', 'upscale' ) .'</div>'
			),			
			array(
				'label'       => esc_html__( 'Custom HTML', 'upscale' ),
				'id'          => 'mnky_ad_html',
				'type'        => 'textarea',
				'rows'        => '14',
				'desc'        => esc_html__( 'Insert any custom code.', 'upscale' )
			)
		)
	);
	
	$mnky_meta_product = array(
		'id'          => 'mnky_product_options',
		'title'       => esc_html__( 'Page Options', 'upscale' ),
		'desc'        => '',
		'pages'       => 'product',
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'label'       => esc_html__( 'Custom theme accent color', 'upscale' ),
				'id'          => 'mnky_custom_accent_color',
				'desc'        => esc_html__( 'Set different accent color for this page. Leave blank for default color', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			 ),
			 array(
				'label'       => esc_html__( 'Custom theme secondary accent color', 'upscale' ),
				'id'          => 'mnky_custom_secondary_accent_color',
				'desc'        => esc_html__( 'Set different secondary accent color for this page. Leave blank for default color.', 'upscale' ),
				'std'         => '',
				'type'        => 'colorpicker_opacity',
			),
			array(
				'label'       => esc_html__( 'Pre-content area', 'upscale' ),
				'id'          => 'mnky_pre_content_activation',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Activates additional area before page title and main content', 'upscale' ),
				'std'         => 'off'
			 ),
			array(
				'label'       => esc_html__( 'Height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_height',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area height. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>250px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-first'
			),
			array(
				'label'       => esc_html__( 'Responsive height (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_responsive_height',
				'type'        => 'on-off',
				'desc'        => esc_html__( 'Enables auto height in responsive mode.', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'std'         => 'off',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Max width (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_width',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area max width. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>1200px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Paddings (optional)', 'upscale' ),
				'id'          => 'mnky_pre_content_paddings',
				'type'        => 'text',
				'desc'        => sprintf (esc_html_x( 'Pre-content area paddings. Example: %s', '%s stands for example value. Do not delete it.' ,'upscale' ), '<code>40px</code>'),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'id'          => 'mnky_pre_content_bg',
				'label'       => esc_html__( 'Background', 'upscale' ),
				'desc'        => 'Set custom background color or image',
				'type'        => 'background',
				'rows'        => '',
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options'
			),
			array(
				'label'       => esc_html__( 'Custom HTML', 'upscale' ),
				'id'          => 'mnky_pre_content_html',
				'type'        => 'textarea',
				'rows'        => '4',
				'desc'        => esc_html__( 'Insert any custom code you wish. Shortcodes are allowed', 'upscale' ),
				'condition'   => 'mnky_pre_content_activation:is(on)',
				'class'       => 'child-options child-last'
			)
		)
	);	
	
	
  
	if ( function_exists( 'ot_register_meta_box' ) ) {
		ot_register_meta_box( $mnky_meta_page );
		ot_register_meta_box( $mnky_meta_post );
		ot_register_meta_box( $mnky_meta_product );
		ot_register_meta_box( $mnky_meta_ads );
		ot_register_meta_box( $mnky_meta_featured_image_caption );
		ot_register_meta_box( $mnky_meta_custom_post_link );
		ot_register_meta_box( $mnky_meta_post_reviews );
	}
}