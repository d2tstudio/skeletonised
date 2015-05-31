<?php
/**
 * Page
 *
 * @package WordPress
 * @subpackage Skeletonised
 */

get_header(); ?>
<div id="Page">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'skeletonised' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<div class="button">Previous</div>', 'skeletonised' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( '<div class="button">Next</div>', 'skeletonised' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
</div>
<?php get_footer(); ?>