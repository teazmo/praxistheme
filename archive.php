<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package praxis
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php
        		if ( is_sticky() && is_home() && ! is_paged() ) {
        			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'praxistheme' ) );
        		}
        		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        		?>
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php the_excerpt(); ?>
        	</div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

      <?php endwhile;

			the_posts_navigation();

		else :

			echo "Kein Inhalt in diesem Archiv";

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
