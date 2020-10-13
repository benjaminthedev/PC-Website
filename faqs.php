<?php 
// Template Name: FAQs


get_header(); while(have_posts()): the_post(); ?>

<!-- Our Company Section -->
<div class="container">
<?php 
$image = get_field('background');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="header-images" />
<?php endif; ?>
</div>



<section class="pages py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
                
            



<?php if( have_rows('faqs') ): ?>

	<ul class="faqs">

	<?php while( have_rows('faqs') ): the_row(); 

		// vars
        
        
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
		

		?>

		<li class="story">

			
            <p>Q:<?php echo $question; ?></p>



            <p>A:<?php echo $answer; ?></p>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>




			</div>
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