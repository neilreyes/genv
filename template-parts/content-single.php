<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package genv
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-top">
  	<div class="post-img">
    	<img src="<?php echo the_post_thumbnail_url();?>">
      <div class="bottom-post">
         <div class="author-col">
            <p><i class="fa fa-clock-o"></i> <span>Posted on: <?php echo get_the_date(); ?></span></p>
         </div>
         <div class="date-col">
            <p><i class="fa fa-tags"></i> <span>Category: <?php the_category( ', ' ); ?></span></p>
         </div>
      </div>
    </div>
  </div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'genv' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

