<?php
/**
 * Template Name: Contact Us template
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
					<?php if( get_field('page_subtitle') ) { ?>
						<small><?php the_field('page_subtitle'); ?></small>
					<?php } else { echo " "; } ?>
				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->

		<div id="contact-first-layer">
			<div class="my-container">

				<div class="my-col21">

					<?php if( get_field('map_1') ) {
						the_field('map_1');
					} else { echo " "; } ?>

					<?php if( get_field('address_title_1') ) { ?>
						<h3><?php the_field('address_title_1'); ?></h3>
					<?php } else { echo " "; } ?>

					<?php if( get_field('address_1') ) { ?>
						<h6><?php the_field('address_1'); ?></h6>
					<?php } else { echo " "; } ?>

					<?php if( get_field('phone_number_1') ) { ?>
						<p>Tel <?php the_field('phone_number_1'); ?>
					<?php } else { echo " "; } ?>

					<?php if( get_field('fax_number_1') ) { ?>
						<br />Fax <?php the_field('fax_number_1'); ?></p>
					<?php } else { echo " "; } ?>

				</div>

				<div class="my-col22">


					<?php if( get_field('map_2') ) {
						the_field('map_2');
					} else { echo " "; } ?>

					<?php if( get_field('address_title_2') ) { ?>
						<h3><?php the_field('address_title_2'); ?></h3>
					<?php } else { echo " "; } ?>

					<?php if( get_field('address_2') ) { ?>
						<h6><?php the_field('address_2'); ?></h6>
					<?php } else { echo " "; } ?>

					<?php if( get_field('phone_number_2') ) { ?>
						<p>Tel <?php the_field('phone_number_2'); ?>
					<?php } else { echo " "; } ?>

					<?php if( get_field('fax_number_2') ) { ?>
						<br />Fax <?php the_field('fax_number_2'); ?></p>
					<?php } else { echo " "; } ?>

				</div>

				<div class="clear"></div>
			</div>
		</div> <!-- #contact-first-layer -->


		<div id="contact-second-layer">
			<div class="my-container">

				<?php if( get_field('form_title') ) { ?>
					<h2><?php the_field('form_title'); ?></h2>
				<?php } else { echo " "; } ?>

				<?php if( get_field('form_subtitle') ) { ?>
					<h6><?php the_field('form_subtitle'); ?></h6>
				<?php } else { echo " "; } ?>

				<?php if( get_field('form_paragraph') ) { ?>
					<p><?php the_field('form_paragraph'); ?></p>
				<?php } else { echo " "; } ?>

				<?php if( get_field('contact_form') ) {
					echo do_shortcode('[contact-form-7 id="72" title="Contact Us"]');
				} else {
					echo " ";
				} ?>
				<div class="clear"></div>
			</div>
		</div> <!-- #contact-second-layer -->

	</main><!-- #main -->
</div><!-- #primary -->
	
<?php get_footer(); ?>