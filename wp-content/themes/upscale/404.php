<?php get_header(); ?>

	<div id="container" class="no-sidebar">
		<div id="content" class="full-width">
			<section class="error404 not-found clearfix">
				<div class="entry-content">
					<?php if ( defined('WPB_VC_VERSION') ) : ?>
						<h2><?php esc_html_e( 'Page not found', 'upscale' ); ?></h2>
						<h2 class="error_looking"><?php esc_html_e( 'Looking...', 'upscale' ); ?></h2>
						<div class="bar-row">
							<?php echo do_shortcode('[vc_progress_bar values="70|"]'); ?>
							<i class="error-icon fa fa-question-circle"></i>
						</div>
					<?php endif; ?>
					<p><?php esc_html_e( 'Sorry! We could not find your page! Perhaps searching can help.', 'upscale' ); ?></p>
						
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</section>
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer(); ?>