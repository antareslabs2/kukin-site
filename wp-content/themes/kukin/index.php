<?php
/**
 * The main template file
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'templates/content', get_post_format() );
			endwhile;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'templates/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
