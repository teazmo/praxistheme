<?php get_header(); ?>
			<div class="blog-area">
			<div class="blog-header">
				<h1>Aktuelles</h1>
				<?php /* TODO: Menü für Button einbauen  */ ?>
				<a href="<?php get_site_url();?>/category/allgemein" class="button__link--big">Alle anzeigen</a>
			</div><!--.blog-header-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
					<div class="row">
						<?php if (has_post_thumbnail()) : ?>
						<div class="col-left">
							<?php the_post_thumbnail('thumbnail', array('class' => 'card-image')); ?>
						</div><!--.col-left-->
					<?php else : ?>
						<div class="col-left">
						<img src="<?php bloginfo('template_directory'); ?>/images/default-image.png" alt="<?php the_title(); ?>" />
						</div><!--.col-left-->
					<?php endif; ?>
						<div class="col-right">
							<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink() ?>" class="more-button button__link--small">Mehr …</a>
						</div><!--.col-right-->
					</div><!--.row-->
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
			</div><!--.blog-area-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
