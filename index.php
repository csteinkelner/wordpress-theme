<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CFV
 */

get_header(); ?>

<!-- hier beginnt mein part -->
	
	
	<div class="row hero">
			<div class="col-lg-3 col-md-3 col-3">
				<img src="earth.jpg">
			</div>
			<div class="col-lg-3 col-md-3 col-3">
				<img src="earth.jpg">
			</div>
			<div class="col-lg-3 col-md-3 col-3">
				<img src="earth.jpg">
			</div>
			<div class="col-lg-3 col-md-3 col-3">
				<img src="earth.jpg">
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-md-8 col-8">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header class="post_header">
							<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div>
			<div class="col-lg-4 col-md-4 col-4 navarea">
				<ul class="nav nav-pills nav-stacked left">
			       <nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cfv' ); ?></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->
	      		</ul>
	      		<?php get_sidebar(); ?>
			</div>
			
		</div>
	</div>
<!-- hier endet mein part -->


<?php

get_footer();
