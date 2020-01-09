<?php get_header(); ?>
			<div class="blog-area">
			<div class="blog-header">
				<h2>Aktuelles</h2>
				<button type="button">Alle anzeigen</button>
			</div><!--.blog-header-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
					<div class="row">
						<div class="col-left">
							<?php the_post_thumbnail('thumbnail', array('class' => 'card-image')); ?>
						</div><!--.col-left-->
						<div class="col-right">
							<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink() ?>" class="more-button">Mehr …</a>
						</div><!--.col-right-->
					</div><!--.row-->
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
			</div><!--.blog-area-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
