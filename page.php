<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package seass
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-8 col-sm-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="col-md-4 col-sm-12">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
