<?php
/**
 * Template Name: Investment Property
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
					<?php if( get_field('page_title_subtitle') ): ?>
						<small><?php the_field('page_title_subtitle'); ?></small>
					<?php endif; ?>
				</h1>
				<div class="clear"></div>
			</div>
		</div> <!-- #page-title-layer -->

		<div id="hpp-first-layer">
			<div class="my-container">

				<div class="my-col-prim">
					<?php if( get_field('first_paragraph') ): ?>
						<h6><?php the_field('first_paragraph'); ?></h6>
					<?php endif; ?>
					<?php if( get_field('title_1') ): ?>
						<h3><?php the_field('title_1'); ?></h3>
					<?php endif; ?>
					<?php if( get_field('content_1') ): ?>
						<p><?php the_field('content_1'); ?></p>
					<?php endif; ?>
					<?php if( get_field('title_2') ): ?>
						<h3><?php the_field('title_2'); ?></h3>
					<?php endif; ?>
					<?php if( get_field('content_2') ): ?>
						<p><?php the_field('content_2'); ?></p>
					<?php endif; ?>
					<?php if( get_field('list_title') ): ?>
						<p><?php the_field('list_title'); ?></p>
					<?php endif; ?>

					<?php if( get_field('list_item_1') ): ?>
						<ul>
							<li><?php the_field('list_item_1'); ?></li>
							<li><?php the_field('list_item_2'); ?></li>
							<li><?php the_field('list_item_3'); ?></li>
							<li><?php the_field('list_item_4'); ?></li>
							<li><?php the_field('list_item_5'); ?></li>
						</ul>
					<?php endif; ?>
					<?php if( get_field('content_3') ): ?>
						<p><?php the_field('content_3'); ?></p>
					<?php endif; ?>
				</div>

				<div class="my-col-sec">
					<div class="side-contact">
						<?php if( get_field('side_contact_header') ): ?>
							<img src="<?php the_field('side_contact_header'); ?>">
						<?php endif; ?>
						<?php if( get_field('side_contact_content') ): ?>
						<div class="side-contact-cont">
							<?php if( get_field('side_contact_header_text') ): ?>
								<h6><?php the_field('side_contact_header_text'); ?></h6>
								<?php endif; ?>
							<?php if( get_field('side_contact_content') ): ?>
								<h4><?php the_field('side_contact_content'); ?></h4>
							<?php endif; ?>
							<?php if( get_field('button_label') ): ?>
								<a href="<?php the_field('button_link'); ?>"><?php the_field('button_label'); ?></a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
					<div class="side-signup">
						<?php if( get_field('side_signup_content_header') ): ?>
							<img src="<?php the_field('side_signup_content_header'); ?>">
						<?php endif; ?>
						<div class="side-signup-cont">
							<?php if( get_field('side_signup_title') ): ?>
								<h6><?php the_field('side_signup_title'); ?></h6>
							<?php endif; ?>
							<?php if( get_field('side_signup_content') ): ?>
								<p><?php the_field('side_signup_content'); ?><p>
							<?php endif; ?>
							<?php if( get_field('side_signup_button_label') ): ?>
								<a href="<?php the_field('side_signup_button_link'); ?>" target="_blank"><?php the_field('side_signup_button_label'); ?></a>
							<?php endif; ?>
						</div>
						<div class="clear"></div>
					</div>
				</div>


				<div class="clear"></div>
			</div>
		</div> <!-- #hpp-first-layer -->

	</main><!-- #main -->
</div><!-- #primary -->
	
<?php get_footer(); ?>