<?php 
// Template Name: Homepage
get_header(); ?>

<!-- Banner Section -->

<section class="banner-section" style="background:url(<?php the_field('banner_background'); ?>) no-repeat center center/cover;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 align-self-center">
				<?php the_field('banner_content'); ?>
			</div>
			<div class="col-12 col-md-6 align-self-center text-right">
				<div class="banner-gear">
					<img class="banner-gear-image" src="<?php echo get_template_directory_uri();?>/assets/images/big-gear.png" alt="">
					<div class="display-table">
						<div class="display-table-cell">
							<a id="form-btn-two" href="" class="upload-btn">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/cloud-upload.png" alt="">
								<?php the_field('upload_file_title'); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="trouble-title">
					<?php the_field('having_trouble_title'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Banner Section End -->

<!-- Our Company Section -->

<section class="our-company py-7">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 align-self-center order-lg-first">
				<?php the_field('video_link'); ?>
			</div>
			<div class="col-12 col-lg-7 align-self-center order-first">
				<div class="row">
					<div class="col-12">
						<div class="our-company-right">
							<div class="our-company-head">
								<h3><?php the_field('top_title'); ?></h3>
								<h2><?php the_field('our_company_title'); ?></h2>
							</div>
							<div class="service-list">
							<?php if( have_rows('service_lists') ): ?>
							<?php while ( have_rows('service_lists') ) : the_row(); ?>
								<div class="service-list-box">
									<div class="display-table">
										<div class="display-table-cell">
											<?php the_sub_field('service_content');?>
										</div>
									</div>
								</div>
							<?php endwhile; else : endif; ?>
							</div>
							<a href="<?php the_field('more_btn_link');?>" class="site-btn">
								Read More
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<!-- Our Company Section End -->

<!-- Capabilities Section -->

<section class="capabilities-section text-center py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_field('capabilities_title'); ?></h1>
			</div>
		</div>
		<div class="row">
		<?php if( have_rows('capabilities_boxs') ): ?>
		<?php while ( have_rows('capabilities_boxs') ) : the_row(); $item++; ?>
			<div class="col-12 col-md-4">
				<div class="capabilities-box box-<?php echo $item; ?>">
					<?php the_sub_field('capabilities_content'); ?>
				</div>
			</div>
		<?php endwhile; else : endif; ?>
		</div>
	</div>
</section>

<!-- Capabilities Section End -->

<!-- Call to Action -->

<section class="call-to-action" style="background:url(<?php the_field('cta_background');?>) no-repeat center center/cover;">
<img class="half-gear" src="<?php echo get_template_directory_uri();?>/assets/images/half-gear.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 align-self-center">
				<div class="cta-left">
					<?php the_field('cta_left_content'); ?>
				</div>				
			</div>
			<div class="col-12 col-md-4 col-lg-6 align-self-center">
				<div class="cta-right">
					<div class="display-table">
						<div class="display-table-cell">
							<a id="form-btn-four" href="<?php the_field('cta_btn_link');?>" class="site-btn">
								Get Free Quote
							</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<!-- Call to Action End -->

<!-- Service Section -->

<section class="service-section py-7">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3 service-head text-center">
				<h1><?php the_field('service_section_title'); ?></h1>
				<p><?php the_field('service_section_sub_title'); ?></p>
				<a class="site-btn" href="<?php the_field('all_service_btn_link'); ?>">All Services</a>
			</div>
		</div>
		<div class="row">
		<?php
		global $post;
		$args = array( 'posts_per_page' =>3, 'post_type'=> 'service','orderby'=>'menu_order','order'=>'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-12 col-md-4">
				<div class="service-box" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center/cover;">
					<div class="display-table">
						<div class="display-table-bottom">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<!-- Service Section End -->


<!-- Testimonial Section -->

<section class="testimonial-section py-7" style="background:#EEF0F0 url(<?php echo get_template_directory_uri();?>/assets/images/map.png) no-repeat center center;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-head text-center">
					<h3><?php the_field('testimonial_top_title');?></h3>
					<h1><?php the_field('testimonial_title'); ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="testimonial-carousel">
				<?php
				global $post;
				$args = array( 'posts_per_page' =>-1, 'post_type'=> 'testimonial','orderby'=>'menu_order','order'=>'ASC');
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
					<div class="testimonial-box">
						<div class="testimonial-meta">
							<div class="display-table">
								<div class="display-table-cell">
									<img src="<?php the_field('client_photo'); ?>" alt="">
									<h3><?php the_title(); ?></h3>
									<span><?php the_field('client_position'); ?></span>
								</div>
							</div>
						</div>
						<div class="testimonial-content">
							<p><?php the_field('client_comments'); ?></p>
							<a href="<?php the_permalink();?>" class="more-btn">
								Read More
							</a>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Testimonial Section End -->


<?php get_footer(); ?>