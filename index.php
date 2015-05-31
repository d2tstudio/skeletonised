<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeletonised
 */

get_header(); ?>

	
		<?php if(class_exists('xslider')) do_action('xslider'); ?>

		<div id="primary" class="eleven columns alpha">
			<div id="content" role="main">

			<?php if(!is_home() || !is_front_page()): ?>
				<h1><?php do_action('xframe_page_title'); ?></h1>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
						<nav id="<?php echo $nav_id; ?>">
							<h3 class="assistive-text"><?php _e( 'Post navigation', 'skeletonised' ); ?></h3>
							<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'skeletonised' ) ); ?></div>
							<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'skeletonised' ) ); ?></div>
						</nav><!-- #nav-above -->
				<?php endif; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'xframe' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'xframe' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<div class="four columns omega offset-by-one widget-area" >
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>