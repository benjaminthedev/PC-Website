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

						<div class="col-12 col-md-4">

								<h3 class="footer-headings"><?php the_field('contact_title','options'); ?></h3>
							<p><?php the_field('contact_sub_title','options'); ?></p>

							<a class="site-btn" href="/form/">Get A Quote Now</a>
						</div>


					<div class="col-12 col-md-4">
						<div class="contact-left">
							<?php the_field('contact_left_content','options'); ?>
						</div>
					</div>


					<div class="col-12 col-md-4">
						<h3 class="footer-headings">Follow Us</h3>

						<ul class="social-media-icons">
								<!-- <li><a href="https://www.facebook.com/pioneercuts/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/pioneercuts" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li> -->
								<!-- <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li> -->

								<li>
									<a href="https://www.facebook.com/pioneercuts" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
								</li>

								<li>
									<a href="https://twitter.com/pioneercuts" target="_blank">
										<i class="fa fa-twitter"></i>
									</a>
								</li>

								<li>
									<a href="https://www.linkedin.com/company/pioneer-cuts" target="_blank">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>

								<li>
									<a href="https://www.pinterest.ch/birdsall2009/" target="_blank">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
						</ul>
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

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script> (function () { window['GoogleAnalyticsObject'] = 'ga'; window['ga'] = window['ga'] || function () { (window['ga'].q = window['ga'].q || []).push(arguments) }; if (window.ga) { ga('create', 'UA-82762905-1', 'auto'); window.addEventListener('message', function (event) { var a = ~event.origin.indexOf('digital-quote.com'); var b = event.data.type === 'rfq_submit_success'; if (a && b) { window.location.replace("https://www.pioneercuts.com/success"); } }, false); } })(); </script>
</body>
</html>
