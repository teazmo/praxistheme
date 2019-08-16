<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header>
        </header><!-- #header -->

        <main>
          <div id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
          </div>
            <!-- #content -->

            <aside id="sidebar">
            </aside><!-- #sidebar -->

        </main><!-- #main -->
        <footer>
        </footer><!-- #footer -->
    </div><!-- #wrapper -->

 <?php wp_footer(); ?>

</body>
</html>
