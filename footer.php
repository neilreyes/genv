<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genv
 */

?>

<?php if( get_field('display_lending_partners') ) { ?>
	<div id="about-fifth-layer">
		<div class="my-container">
			<h2><?php the_field('lending_partners_title', 'option'); ?></h2>

			<?php if(get_field('lending_partners', 'option')): ?>
				<?php while(has_sub_field('lending_partners', 'option')): ?>
					<span><img src="<?php the_sub_field('lending_partner', 'option'); ?>" /></span>
				<?php endwhile; ?>
			<?php endif; ?>

			<div class="clear"></div>
		</div>
	</div> <!-- #about-fifth-layer -->
<?php } ?>


<?php if( get_field('display_benefits') ) { ?>
	<div id="about-sixth-layer">
		<div class="my-container">
			<h2><?php the_field('benefits_title', 'option'); ?></h2>
			<?php if(get_field('benefits', 'option')): ?>
				<?php while(has_sub_field('benefits', 'option')): ?>
					<span><img src="<?php the_sub_field('benefit_image', 'option'); ?>" /></span> 
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="clear"></div>
		</div>
	</div> <!-- #about-sixth-layer -->
<?php } ?>


<?php if( get_field('display_cta') ) { ?>
	<aside class="cta-section section-item">
		<div class="row section-main">
			<div class="container clearfix">
				<div class="col col-xs-12 col-md-6 pull-right cta-content-container">
					<h2><?php the_field('cta_content', 'option'); ?><br>
					<b><?php the_field('cta_bold_text', 'option'); ?></b></h2>
					<div class="or-separator">
						<div class="or-wrapper">
							<span>or</span>
						</div>
					</div>
					<a href="<?php the_field('button_link', 'option'); ?>" class="btn btn-default"><?php the_field('button_label', 'option'); ?></a>
				</div>
				<div class="col col-xs-12 col-md-6 cta-image-container">
					<img src="<?php the_field('cta_featured_image', 'option'); ?>" alt="" class="img-responsive cta-image">
				</div>
			</div>
		</div>
	</aside> <!-- .cta-section -->
<?php } ?>


      <footer class="genvmark">
        
          <div class="row section-primary">
            <div class="container">
              <div class="branding-block col col-xs-12 col-md-3">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php the_field('footer_logo', 'option'); ?>" alt="" class="img-responsive">
                </a>
              </div>
              <div class="contact-block col col-xs-12 col-md-3 ">
                <address>
                  <?php the_field('footer_address', 'option'); ?>
                </address>
                <p class="contact-number contact-detail"><span>t</span> <?php the_field('header_phone_number', 'option'); ?></p>
                <p class="email-address contact-detail"><span>e</span> <a href="mailto:<?php the_field('footer_email_address', 'option'); ?>" target="_blank"><?php the_field('footer_email_address', 'option'); ?></a></p>
              </div>
              <nav class="sitemap-block col col-xs-12 col-md-6">
		<?php if(get_field('footer_links', 'option')): ?>
	                <ul class="nav navbar-nav">
			  <?php while(has_sub_field('footer_links', 'option')): ?>
		                  <li><a href="<?php the_sub_field('page_link', 'option'); ?>"><?php the_sub_field('footer_link_label', 'option'); ?></a></li>
			  <?php endwhile; ?>
	                </ul>
		<?php endif; ?>
              </nav>
            </div>
          </div>
          <div class="row section-secondary">
            <div class="container">
              <p id="copyright">Copyright© 2015 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">genV</a>. All rights reserved <?php the_field('copyright', 'option'); ?></p>
              <ol class="social-block">
                <li><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><span class="icon entypo-facebook"></span></a></li>
                <li><a href="<?php the_field('twiiter_link', 'option'); ?>" target="_blank"><span class="icon entypo-twitter"></span></a></li>
                <li><a href="<?php the_field('google_+_link', 'option'); ?>" target="_blank"><span class="icon entypo-gplus"></span></a></li>
                <li><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><span class="icon entypo-linkedin"></span></a></li>
              </ol>
		<p class="f-designby">Powered by: <a href="<?php the_field('powered_by_link', 'option'); ?>" target="_blank"><?php the_field('powered_by', 'option'); ?></a></div>
            </div>
          </div>
      </footer>

    </div><!-- end #wrapper -->

    <?php wp_footer(); ?>

  </body>
</html>