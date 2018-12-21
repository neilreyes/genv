<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package genv
 */

get_header(); ?>
		<div id="page-title-layer">
			<div class="my-container">
				<h1>
					<?php the_title(); ?>
				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->
<div id="single-post">
  <div class="my-container">
    <div id="primary-sb" class="content-area left-sb">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>
					<span> <strong>Share this:</strong> <?php echo do_shortcode('[addtoany]'); ?></span>
          <?php the_post_navigation(); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          ?>

        <?php endwhile; // End of the loop. ?>
			
        </main><!-- #main -->
      </div><!-- #primary -->

    <?php get_sidebar(); ?>
    <div class="clear"></div>
   </div>
</div>
<?php get_footer(); ?>
