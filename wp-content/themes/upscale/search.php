<?php get_header(); ?>

		<div id="container">
	
				<div id="content">
					<div class="results-container">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								get_template_part( 'content', get_post_format() );
							endwhile;
						else :
							get_template_part( 'content', 'none' );
						endif;
						?>
					</div>
					
					<nav class="pagination" role="navigation">
						<?php mnky_numeric_pagination();?>
					</nav>

				</div><!-- #content -->

		</div><!-- #container -->
		
<?php get_footer(); ?>