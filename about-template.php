<?php
/**
 * Template Name: About Us Template
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

					<?php if( get_field('page_title_subtitle') ) { ?>
						<small><?php the_field('page_title_subtitle'); ?></small>
					<?php } else { echo " "; } ?>

				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->

	<?php if( get_field('first_layer_title') || get_field('first_layer_paragraph') ) { ?>
		<div id="about-second-layer">
			<div class="my-container">
				<div class="my-col21">
					<?php if( get_field('first_layer_title') ) { ?>
						<h4><?php the_field('first_layer_title'); ?></h4>
					<?php } else { echo " "; } ?>
				</div>
				<div class="my-col22">
					<?php if( get_field('first_layer_paragraph') ) { ?>
						<p><?php the_field('first_layer_paragraph'); ?></p>
					<?php } else { echo " "; } ?>
				</div>
				<div class="clear"></div>
			</div>
		</div> <!-- #about-second-layer -->
	<?php } else { echo " "; } ?>

	<?php if( get_field('second_layer_texts') ) { ?>
		<div id="about-third-layer">
			<div class="my-container">
				<p><?php the_field('second_layer_texts'); ?></p>
				<div class="clear"></div>
			</div>
		</div> <!-- #about-third-layer -->
	<?php } else { echo " "; } ?>


		<div id="about-fourth-layer">
			<div class="my-container">

				<?php if( get_field('mortage_brokers_title') ) { ?>
					<h2><?php the_field('mortage_brokers_title'); ?></h2>
				<?php } else { echo " "; } ?>

			<?php if( get_field('broker_1_image') || get_field('broker_1_name') || get_field('broker_1_subtitle') || get_field('broker_1_paragraph')) { ?>
				<div class="about-broker-1">
					<img src="<?php the_field('broker_1_image'); ?>">
					<h3><?php the_field('broker_1_name'); ?></h3>
					<h6><?php the_field('broker_1_subtitle'); ?></h6>
					<p><?php the_field('broker_1_paragraph'); ?></p>
				</div>
			<?php } else { echo " "; } ?>

			<?php if( get_field('broker_2_image') || get_field('broker_2_name') || get_field('broker_2_subtitle') || get_field('broker_2_paragraph')) { ?>
				<div class="about-broker-2">
					<img src="<?php the_field('broker_2_image'); ?>">
					<h3><?php the_field('broker_2_name'); ?></h3>
					<h6><?php the_field('broker_2_subtitle'); ?></h6>
					<p><?php the_field('broker_2_paragraph'); ?></p>
				</div>
				<div class="clear"></div>
			</div>
		</div> <!-- #about-fourth-layer -->
			<?php } else { echo " "; } ?>


	</main><!-- #main -->
</div><!-- #primary -->
	
<?php get_footer(); ?>