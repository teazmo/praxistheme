<?php get_header(); ?>
<div class="main-wrapper">
  <main>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</main>
</div>
<?php get_footer(); ?>
