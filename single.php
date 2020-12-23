<?php get_header(); while(have_posts()): the_post(); ?>


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
			<div class="col-12">
				<?php the_content(); ?>	<br />
				
				<br />
				<h3 class="text-center">Share this article!</h3>
				<?php echo do_shortcode( '[TheChamp-Sharing]' ); ?>
				<?php echo do_shortcode( '[related_post	]' ); ?>
			</div>
		</div>
	</div>
</section>



<!-- Small CTA -->

<div class="small__ctaSection">	
		<h5>Get A Free Quote</h5>	
		<?php echo do_shortcode('[contact-form-7 id="2628" title="Small Get Quote"]'); ?>
</div> 


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