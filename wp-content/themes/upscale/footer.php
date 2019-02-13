	</div><!-- #main  -->

	<?php get_sidebar('footer'); ?>
	
	<div id="mobile-menu-bg"></div>
</div><!-- #wrapper -->
	
<nav id="mobile-site-navigation">
	<span class="mobile-menu-header"><span class="mobile-menu-heading"><?php esc_html_e('Menu', 'upscale') ?></span><i class="fa fa-times toggle-mobile-menu"></i></span>
	<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'container' => false, 'fallback_cb' => 'mnky_no_menu', 'after' => '<span></span>' ) ); ?>
	<?php get_sidebar('mobile-menu'); ?>	
</nav><!-- #mobile-site-navigation -->

<?php if (ot_get_option('scroll_to_top_button') == 'on'){
	echo '<a href="#top" class="scrollToTop"><i class="fa fa-angle-up"></i></a>';
} ?>

<?php mnky_hook_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>