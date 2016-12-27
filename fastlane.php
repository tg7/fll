<?php

/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected custom template
			while ( have_posts() ) : the_post();

			//Inclues Our Template
				get_template_part( 'template-parts/page/content', 'fll' );

			if ( comments_open() || get_comments_number() ) {

				comments_template();
			}

			//End of Loop
			endwhile; ?>

	</main><!-- #main -->

	<?php get_sidebar( 'content-bottom'); ?>

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
