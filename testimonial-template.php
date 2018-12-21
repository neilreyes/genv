<?php
/**
 * Template Name: Testimonials Tesmplate
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
					<small><?php the_field('page_subtitle'); ?></small>
				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->

		<div id="testi-first-layer">
			<div class="my-container">
				<div class="top-testimonial-cont">
					<p><?php the_field('top_testimonial_content'); ?></p>
					<h5>
						<?php if( get_field('top_testimonial_image') ): ?>
							<img src="<?php the_field('top_testimonial_image'); ?>" />
						<?php endif; ?>
						<?php the_field('top_testimonial_name'); ?>
						<small><?php the_field('top_testimonial_positon'); ?></small>
					</h5>
				</div>
				<div class="clear"></div>
			</div>


		</div> <!-- #testi-first-layer -->

		<div id="testi-second-layer">
			<div class="my-container">

				<?php if(get_field('testimonials')): ?>
					<?php while(has_sub_field('testimonials')): ?>

						<div class="testi">
							<div class="testi-title">
								<?php if(get_sub_field('testimonial_author_image')): ?>
									<img src="<?php the_sub_field('testimonial_author_image'); ?>" />
								<?php endif; ?>
								<h4>
									<?php the_sub_field('testimonial_author'); ?>
									<small><?php the_sub_field('testimonial_author_profession'); ?></small>
								</h4>
							</div>
							<div class="testi-cont">
								<p><?php the_sub_field('testimonial_content'); ?></p>
							</div>
							<div class="clear"></div>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<div class="clear"></div>
			</div>
		</div> <!-- #testi-second-layer -->

	</main><!-- #main -->
</div><!-- #primary -->
	
<?php get_footer(); ?>