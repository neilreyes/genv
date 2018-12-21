		<?php
/**
 * Template Name: Home Template
 *
 *
 * @package genv
 */

get_header(); ?>

<main>

<?php if( get_field('hero_image') ): ?>
	<section id="main-banner" class="section-item hero-banner">
		<div class="hb-caption">
			<div class="container">
				<?php if( get_field('hero_banner_title') ): ?>
					<h1><?php the_field('hero_banner_title'); ?></h1>
				<?php endif; ?>
				<?php if( get_field('hero_banner_sub_title') ): ?>
					<h2><?php the_field('hero_banner_sub_title'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('hero_button_label') ): ?>
					<a href="<?php the_field('hero_button_link'); ?>" class="btn btn-lg btn-primary"><?php the_field('hero_button_label'); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="hero-image-container">
			<img src="<?php the_field('hero_image'); ?>" alt="" class="img-responsive hero-image">
			<img src="<?php the_field('hero_image_mobile'); ?>" alt="" class="hero-image-mobile">
		</div>

		<?php if(get_field('hero_image_bottom_logos')): ?>
			<section id="trust-signal" class="section-item">
				<div class="row section-main">
					<div class="container">
						<div class="content-wrapper text-right">
							<?php while(has_sub_field('hero_image_bottom_logos')): ?>
								<img src="<?php the_sub_field('logo'); ?>" alt="" class="trust-signal-logo">
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</section>
			<!-- #trust-signal -->
		<?php endif; ?>
	</section>
	<!-- #hero-banner -->
<?php endif; ?>

  
<?php if( get_field('first_layer_title') ): ?>
	<section id="wad" class="section-item genvmark">
		<div class="row section-header">
			<div class="container medium-container text-center">
				<h2><?php the_field('first_layer_title'); ?></h2>
				<?php if( get_field('first_layer_content') ): ?>
					<p class="lead"><?php the_field('first_layer_content'); ?></p>
				<?php endif; ?>
				<?php if( get_field('first_layer_list_title') ): ?>
					<p><?php the_field('first_layer_list_title'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="row section-main">
			<div class="container small-container">
				<div class="content-wrapper">
					<?php if(get_field('first_layer_lists')): ?>
						<ul class="col-2-list clearfix">
							<?php while(has_sub_field('first_layer_lists')): ?>
							 	<li><?php the_sub_field('list'); ?></li>
							<?php endwhile; ?>
						</ul>
					
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if( get_field('first_layer_button_label') ): ?>
			<div class="row section-footer">
				<div class="container text-center">
					<a href="<?php the_field('first_layer_button_link'); ?>" class="btn btn-primary"><?php the_field('first_layer_button_label'); ?></a>
				</div>
			</div>
		<?php endif; ?>
	</section>
<?php endif; ?>

<?php if(get_field('sucture_debt')): ?>
	<section id="featured" class="section-item">
		<div class="row section-main">
			<div class="container">
				<?php while(has_sub_field('sucture_debt')): ?>
					<article class="col col-sm-4 pod-item">
						<div class="pod-wrapper">
							<img src="<?php the_sub_field('featured'); ?>" alt="" class="img-responsive">
							<div class="pod-footer">
								<h2><?php the_sub_field('title'); ?></h2>
								<a href="<?php the_sub_field('link'); ?>" class="btn">Read more <span class="icon entypo-right-thin"></span></a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
		<?php if( get_field('second_layer_title') ): ?>
			<div class="row section-footer">
				<div class="container">
					<p class="lead"><?php the_field('second_layer_title'); ?></p>
					<p class="lead"><?php the_field('seond_layer_signup_title'); ?></p>
					<a href="<?php the_field('second_layer_link'); ?>" class="btn btn-primary" target="_blank">Sign up now</a>
				</div>
			</div>
		<?php endif; ?>
	</section><!-- #featured -->
<?php endif; ?>


<?php if( get_field('paralax_image') ): ?>
	<section id="plx-1" class="section-item hero-banner plx" style="background-image: url('<?php the_field('paralax_image'); ?>');">
		<div class="container-hero-banner-plx">
			<img src="<?php the_field('paralax_image'); ?>" alt="" class="hero-image hidden">
			<?php if( get_field('paralax_mobile_image') ): ?>
				<img src="<?php the_field('paralax_mobile_image'); ?>" alt="" class="hero-mobile-image">
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>


<?php if( get_field('testimonial_title') ): ?>
	<section id="testimonial" class="section-item">
		<div class="container">
			<div class="row section-header">
				<h2><?php the_field('testimonial_title'); ?></h2>
 			</div>
			<div class="row section-main">

				<?php if(get_field('home_testimonials')): ?>

					<?php while(has_sub_field('home_testimonials')): ?>

						<div class="col col-md-4 pod-item">
							<div class="pod-wrapper">
								<blockquote>
									<?php the_sub_field('testimonial'); ?>
								</blockquote>
								<div class="pod-footer">
									<?php if( get_sub_field('image') ): ?>
										<img src="<?php the_sub_field('image'); ?>" alt="" class="testi-client-image">
									<?php endif; ?>
									<p class="testi-client-name"><?php the_sub_field('author'); ?></p>
									<p class="testi-client-position"><?php the_sub_field('position'); ?></p>
								</div>
							</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>      
 			</div>

			<?php if( get_field('testimonial_button_label') ): ?>
				<div class="row section-footer">
					<a href="<?php the_field('testimonial_button_link'); ?>" class="btn btn-primary"><?php the_field('testimonial_button_label'); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</section><!-- #testimonial -->
<?php endif; ?>

</main>
	
<?php get_footer(); ?>