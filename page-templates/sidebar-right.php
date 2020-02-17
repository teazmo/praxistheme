<?php /* Template Name: Rechte Seitenleiste */ ?>
<?php get_header(); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
<?php if ( function_exists( 'register_sidebar' ) ) { get_sidebar();} ?>
<?php get_footer(); ?>
