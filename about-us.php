<?php 
// Template Name: About Us

get_header(); while(have_posts()): the_post(); ?>

<!-- Our Company Section -->
<div class="container">
<?php 
$image = get_field('background');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="header-images" />
<?php endif; ?>
</div>


<section class="our-company py-150">
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
								<h3>About Us</h3>
								<h2><?php the_field('our_company_title', 24); ?></h2>
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
							<!-- <a href="<?php //the_field('more_btn_link');?>" class="site-btn">
								Read More
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<!-- Our Company Section End -->



<section class="pages py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	
    
    
    
    
    <?php if( have_rows('team') ): ?>

	<ul class="team">

	<?php while( have_rows('team') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$staffName = get_sub_field('staff_name');
		$jobTitle = get_sub_field('job_title');

		?>

		<li class="staff-member">

			<?php if( $image ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php endif; ?>
				

			<?php if( $staffName ): ?>
               <p class="name"><?php echo $staffName; ?></p>
			<?php endif; ?>


            <?php if( $jobTitle ): ?>
               <p class="job"> <?php echo $jobTitle; ?></p>
			<?php endif; ?>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
    
    
    
    
    
    
    
    
    
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