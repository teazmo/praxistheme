<?php get_header(); ?>
<div class="main-wrapper">
  <main>
<h1>Single</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <div id="meta">
                <span>geschrieben am: <?php the_date('d.m.Y'); ?>
                von: <?php the_author(); ?> in
                Kategorie(n): <?php the_category(', '); ?><?php the_tags(' und getagged mit: ', '', ''); ?></span>
            </div>

            <div class="entry">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>

        <?php get_sidebar(); ?>
      </main>
</div><!--main-wrapper-->
<?php get_footer(); ?>
