<?php get_header(); ?>

<div class="row cards-area">
	<?php
    $args = array( 'post_type' => 'post');

    // Custom query.
    $query = new WP_Query( $args );

    if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>

	<div class="card">
		  <div class="card-img-wrapper">
          <?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
			</a>
		<?php endif; ?>
		  </div><!--card-img-wrapper-->
			<div class="card-title-top"></div>
		  <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
          <div class="card-text">
						<?php the_excerpt(); ?>
          	<p><a href="<?php the_permalink() ?>" class="card-link button__link--small" >Mehr…</a></p>
					</div>
	</div>


	<?php endwhile; else: ?>
    <h1>Es wurden keine Themen definiert.</h1>
    <?php endif;
    // Restore original post data.
    wp_reset_postdata();
  	?>
</div>

			<div class="blog-area">
			<div class="blog-header">
				<h1>Aktuelles</h1>
				<?php /* TODO: Menü für Button einbauen  */ ?>
				<a href="<?php get_site_url();?>/category/allgemein" class="button__link--big">Alle anzeigen</a>
			</div><!--.blog-header-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?> >
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
				</article>
            <?php endwhile; endif; ?>
			</div><!--.blog-area-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
