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
					<!-- <div class="col-12 col-md-8 col-md-offset-2"> -->
						<div class="footer__quotationBox">
						<div class="contact-form" style="background:url(<?php echo get_template_directory_uri();?>/assets/images/contact-bg.png) no-repeat center center/cover;">
							<?php the_field('contact_right_content','options'); ?>

							<p class="email__warning"><em>If You Require ITAR Compliant File Transfers Do Not Upload Documents to This Form-For ITAR compliance email your files directly to <a href="mailto:quotes@pioneercuts.com">quotes@pioneercuts.com</a> </em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<!-- <div class="footer-copy">
							<?php //the_field('footer_copy','options'); ?>
						</div> -->
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

<style>
	footer.footer__final{
		padding: 30px 20px;
		display: flex;
		/* flex-wrap: wrap; */
		justify-content: space-evenly;
		background: #1d1f2c;
		color:#fff;
	}

	.footer__box {
		width: 24vw;
		font-weight: 100;
	}

	/* Posts */

	.footer__box.footer__boxPosts {
    	width: 40vw;
	}
	.footer__image {
		width: 15vw;
		margin-right: 20px;
		height: 160px;
	}

	footer.footer__final h3.footer-headings{
		font-size: 24px;
		color: #fff;
		font-weight: 300;
	 }

	 .footer__image {
   		 	width: 7vw;
			margin-right: 20px;
			height: 160px;
		}

		.footer__image img {
			width: 7vw;
		}

		.footer__contentWrapper {
			width: 22vw;
			padding: 0 6px;
		}

	 footer.footer__final ul.social__media li a{
		 color:#fff;
	 }
	footer.footer__final ul.social__media li a:hover{
		 color:#999;
	 }


	 ul.footer__servicesMenu{
		 padding:0px;
	 }
	 ul.footer__servicesMenu li{
		 /* border-bottom: 1px solid #fff; */
			width: 14vw;
			list-style-type: none;
			padding-top: 5px;
		}	 
	 ul.footer__servicesMenu li a{
		 color: #fff;
	 }
	 ul.footer__servicesMenu li a:hover{
		 color: #999;
	 }	 

.footer__contentWrapper a{
	color:#fff;
	    font-weight: 100;
}

	 .footer-copy {
		text-align: center;
		background: #1d1f2c;
		color:#fff;
		padding: 20px 0;
	}



	/* Footer Content */

	.footer__postWrapper {
    	display: flex;
	}
</style>


<footer class="footer__final">

<div class="footer__box">
	<?php the_field('contact_left_content','options'); ?>
</div>

<div class="footer__box">
	<h3 class="footer-headings">Services</h3>

	<ul class="footer__servicesMenu">
		<li><a href="/service/assembly-services/">Assembly Services</a></li>
		<li><a href="/service/cnc-milling/">CNC Milling</a></li>
		<li><a href="/service/metal-finishing/">Metal Finishing</a></li>
		<li><a href="/service/project-inspection/">Inspection & Certification</a></li>
		<li><a href="/service/cnc-turning/">CNC Tuning</a></li>
	</ul>
</div>

<div class="footer__box footer__boxPosts">
	<h3 class="footer-headings">Recent Posts</h3>

	
<?php $args_query = array(
	'posts_per_page' => 2,
	'order' => 'ASC',
	'orderby' => 'date',
	'cat' => 201,
); 

$query = new WP_Query( $args_query );


if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
	<div class="footer__postWrapper">

		<div class="footer__image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>

		<div class="footer__contentWrapper">
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		 
			<p><?php the_excerpt(); ?></p> 
		</div>

	</div>

	<?php 
	}
} else {}

wp_reset_postdata();
?>


</div>

<div class="footer__box">
	<h3 class="footer-headings">Get Your Quote Today!</h3>

	<p>It Takes 30 seconds, upload your project files, and receive a fast free quote.</p>

	<a id="form-btn" href="" class="header-btn">
		Get A Quote Now					
	</a>
</div>

</footer>

<div class="footer-copy">
	<?php the_field('footer_copy','options'); ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
