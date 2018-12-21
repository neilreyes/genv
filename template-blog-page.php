<?php
/**
 * Template Name: Blog template
 *
 *
 * @package genv
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div id="page-title-layer">
			<div class="my-container">
				<h1>
					<?php the_title(); ?>
				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->
	</main><!-- #main -->
	<div id="bp-sec2" class="content-row">
		<div class="my-container">
			<div class="left-sb">
        <div class="blog-content">
        <?php 
        $args = array(
          'orderby' => 'date',
          'order'   => 'DESC',
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>
          <!-- pagination here -->
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
            <div class="blog-post">
              <div class="top-post">
                <div class="left-col">
                  <div class="post-img" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); ">
                  	<!-- <img src="<?php echo the_post_thumbnail_url();?>"> -->
                  </div>
                  <h6><?php echo get_the_date(); ?></h6>
                  <div class="btn-overlay">
                  	<a href="<?php the_permalink(); ?>">Read More</a>
                    <div class="overlay"></div>
                  </div>
                </div>
                <div class="right-col">
                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <span><?php echo do_shortcode('[addtoany]'); ?></span>
                  <p><?php echo get_excerpt(270); ?></p>
                  <div class="post-btn">
                    <a href="<?php the_permalink(); ?>">Read More</a>
                  </div>
                </div>
              </div>
              <div class="bottom-post">
                <div class="author-col">
                  <p><i class="fa fa-pencil"></i> <span>By <?php echo get_the_author_link(); ?></span></p>
                </div>
                <div class="date-col">
                  <p><i class="fa fa-tags"></i> <span><?php the_category( ', ' ); ?></span></p>
                </div>
              </div>
            </div>
        
          <?php endwhile; ?>
          <!-- end of the loop -->
          <!-- pagination here -->
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
       </div>
     </div>
		 <?php get_sidebar(); ?>
     <div class="clear"></div>
		</div>
	</div>
</div><!-- #primary -->
	
<?php get_footer(); ?>