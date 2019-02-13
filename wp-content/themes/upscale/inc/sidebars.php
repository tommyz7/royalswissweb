<?php
/*	
*	---------------------------------------------------------------------
*	MNKY Register sidebars
*	--------------------------------------------------------------------- 
*/

function mnky_sidebars() {
	register_sidebar( array(
		'name' => esc_html__( 'Blog/Post Sidebar', 'upscale' ),
		'id' => 'blog-sidebar',
		'description' => esc_html__( 'Appears on blog layout and posts', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Page Sidebar', 'upscale' ),
		'id' => 'default-sidebar',
		'description' => esc_html__( 'Appears as default sidebar on pages', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Secondary Page Sidebar', 'upscale' ),
		'id' => 'secondary-sidebar',
		'description' => esc_html__( 'Appears in dual sidebar page template', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Single Post Header Sidebar', 'upscale' ),
		'id' => 'post-header-sidebar',
		'description' => esc_html__( 'Appears in single post header', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-widget-title">',
		'after_title'   => '</h3>',
	) );		
	
	register_sidebar( array(
		'name' => esc_html__( 'Single Post Content Sidebar Top', 'upscale' ),
		'id' => 'post-content-top-sidebar',
		'description' => esc_html__( 'Appears before single post content', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-widget-title">',
		'after_title'   => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Single Post Content Sidebar Bottom', 'upscale' ),
		'id' => 'post-content-bottom-sidebar',
		'description' => esc_html__( 'Appears after single post content', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-widget-title">',
		'after_title'   => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'After Single Post Sidebar', 'upscale' ),
		'id' => 'after-single-post-sidebar',
		'description' => esc_html__( 'Appears after single post', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-widget-title">',
		'after_title'   => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Before Single Post Sidebar', 'upscale' ),
		'id' => 'before-single-post-sidebar',
		'description' => esc_html__( 'Appears above single post content and sidebar', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-widget-title">',
		'after_title'   => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Menu Sidebar', 'upscale' ),
		'id' => 'menu-sidebar',
		'description' => esc_html__( 'Appears in the default navigation bar and after the side navigation menu', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );		
	
	register_sidebar( array(
		'name' => esc_html__( 'Top Bar Sidebar Left', 'upscale' ),
		'id' => 'top-left-widget-area',
		'description' => esc_html__( 'Top bar widget area (align left)', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
		
	register_sidebar( array(
		'name' => esc_html__( 'Top Bar Sidebar Right', 'upscale' ),
		'id' => 'top-right-widget-area',
		'description' => esc_html__( 'Top bar widget area (align right)', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Sidebar 1', 'upscale' ),
		'id' => 'footer-widget-area-1',
		'description' => esc_html__( 'Appears in the footer section', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Sidebar 2', 'upscale' ),
		'id' => 'footer-widget-area-2',
		'description' => esc_html__( 'Appears in the footer section', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Sidebar 3', 'upscale' ),
		'id' => 'footer-widget-area-3',
		'description' => esc_html__( 'Appears in the footer section', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Sidebar 4', 'upscale' ),
		'id' => 'footer-widget-area-4',
		'description' => esc_html__( 'Appears in the footer section', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Copyright Area', 'upscale' ),
		'id' => 'copyright-widget-area',
		'description' => esc_html__( 'Appears in the footer section', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Page Sidebar', 'upscale' ),
		'id' => 'shop-widget-area',
		'description' => esc_html__( 'Product page widget area', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Mobile Header Sidebar', 'upscale' ),
		'id' => 'mobile-header-widget-area',
		'description' => esc_html__( 'Mobile header widget area', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Mobile Menu Sidebar', 'upscale' ),
		'id' => 'mobile-menu-widget-area',
		'description' => esc_html__( 'Mobile menu widget area', 'upscale' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );

}

add_action( 'widgets_init', 'mnky_sidebars' );