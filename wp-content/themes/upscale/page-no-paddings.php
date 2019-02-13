<?php
/**
 * Template Name: Default - no vertical paddings
 */
?>

<?php get_header(); ?>

		<div id="container">
		<?php mnky_hook_page_top(); ?>		
			<div id="content">
			<?php mnky_hook_page_content_top(); ?>
			
				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
					<div class="entry-content clearfix">
				<?php
				the_content();
				wp_link_pages( array(
					'before'      => '<nav class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'upscale' ) . '</span>',
					'after'       => '</nav>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
					</div><!-- .entry-content -->
				</article>

				<?php if ( comments_open() ) {
					comments_template( '', true );
				} ?>
				<?php endwhile; ?>
				
			<?php mnky_hook_page_content_bottom(); ?>
			</div><!-- #content -->
		<?php mnky_hook_page_bottom(); ?>			
		</div><!-- #container -->
		
<?php get_footer(); ?>