<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pioneer_Cuts
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3">
						<div class="section-head text-center">
							<h3><?php the_field('contact_top_title','options'); ?></h3>
							<h1><?php the_field('contact_title','options'); ?></h1>
							<p><?php the_field('contact_sub_title','options'); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-5">
						<div class="contact-left">
							<?php the_field('contact_left_content','options'); ?>
						</div>
						<div>
							<!-- <img src="<?php //echo get_template_directory_uri();?>/assets/images/ITAR.png" alt="ATIR" class="itar-logo" /> -->
						</div>
					</div>
					<div class="col-12 col-md-7">
						<div class="contact-form" style="background:url(<?php echo get_template_directory_uri();?>/assets/images/contact-bg.png) no-repeat center center/cover;">
							<?php the_field('contact_right_content','options'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="footer-copy">
							<?php the_field('footer_copy','options'); ?>
						</div>
					</div>
					<div class="col-12 col-md-8">
						<div class="footer-menu">
		                    <?php wp_nav_menu( array(
		                        'theme_location'   =>  'mainMenu',
		                        ));
		                     ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
