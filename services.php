<?php 
// Template Name: Services

get_header(); while(have_posts()): the_post(); ?>

<!-- Our Company Section -->

<div class="imageHeaderWrap">
<?php 
$image = get_field('background');
if( !empty($image) ): ?>
	<div class="hero__sectionImage" style="background-image: url(<?php echo $image['url']; ?>);">
		<h1><?php the_title(); ?></h1>
	</div>
<?php endif; ?>
</div>

<style>
.hero__sectionImage {
 width: 99.9vw;
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 38vh;
    margin-bottom: 40px;
    display: flex;
    justify-content: center;
	align-items: center;
	color:#fff;
}
</style>


<!-- Service Section -->

<section class="service-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3 service-head text-center">
				<p><?php the_field('service_section_sub_title', 24); ?></p>
			</div>
		</div>
		<div class="row">
		<?php
		global $post;
		$args = array( 'posts_per_page' =>6, 'post_type'=> 'service','orderby'=>'menu_order','order'=>'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-12 col-md-3">
				<div class="service-box" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center/cover;">
					<div class="display-table">
						<div class="display-table-bottom">
						<div class="services__textBackground">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
								<i class="fa fa-long-arrow-right"></i>
							</a>
						   </div>
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


<section class="pages py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
    </div>
</section>





<!-- Testimonial Section -->

<section class="testimonial-section py-7" style="background:#EEF0F0 url(<?php echo get_template_directory_uri();?>/assets/images/map.png) no-repeat center center;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-head text-center">
					<h1><?php the_field('testimonial_title', 24); ?></h1>
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


<!-- Call to Action -->

<section class="call-to-action" style="background:url(<?php the_field('cta_background', 24);?>) no-repeat center center/cover;">
<img class="half-gear" src="<?php echo get_template_directory_uri();?>/assets/images/half-gear.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 align-self-center">
				<div class="cta-left">
					<?php the_field('cta_left_content', 24); ?>
				</div>				
			</div>
			<div class="col-12 col-md-4 col-lg-6 align-self-center">
				<div class="cta-right">
					<div class="display-table">
						<div class="display-table-cell">
							<a href="<?php the_field('cta_btn_link', 24);?>" class="site-btn">
								Get The Ebook!
							</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<!-- Call to Action End -->

 <?php get_footer(); endwhile; ?>