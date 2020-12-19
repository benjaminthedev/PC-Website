<?php 
// Template Name: Blog Page


get_header(); while(have_posts()): the_post(); ?>

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
    display: flex;
    justify-content: center;
	align-items: center;
	color:#fff;
	margin-bottom: 20px;
}
</style>




<section>
	<div class="container">
		<div class="row">
                
            
        <?php
		global $post;
		$args = array( 'posts_per_page' =>40, 'post_type'=> 'post', 'order'=>'DESC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-12 col-md-3">
				<div class="service-box" style="background: linear-gradient(rgba(189, 143, 143, 0.5), rgba(2,2,2,0.5)), url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center/cover;">
					<div class="display-table">
						<div class="display-table-bottom">
						<div class="services__textBackground">
							<a href="<?php the_permalink();?>" class="blog-link">
								<?php the_title(); ?>
                                <php the_excerpt(); ?>
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
							<a  href="<?php the_field('cta_btn_link', 24);?>" class="site-btn">
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