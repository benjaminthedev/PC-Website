<?php get_header(); while(have_posts()): the_post(); ?>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>



<!--  -->

<div class="small__ctaSection">	
	
		<h5>Get A Free Quote</h5>
		
	

	
		<?php echo do_shortcode('[contact-form-7 id="2628" title="Small Get Quote"]'); ?>
	
</div> 

<style>
h5 {
    font-size: 36px;
    color: #fff;
    font-weight: 600;
    line-height: 50px;
    margin-bottom: 0;
}

.small__ctaSection {
    display: flex;
    width: 100vw;
    background: #222530;
	margin: 0 auto;
	padding: 20px;
	align-items: center;
    justify-content: space-around;
}

select.wpcf7-form-control.wpcf7-select {
    padding: 14px 0;
}
 input{
	 padding: 12px 5px;
 }
 .wpcf7 form.sent .wpcf7-response-output {
    border-color: #fff;
    color: #fff;
}

	.small__ctaSection	.left{
		background: #222530;
		padding: 20px;
		/* width: 20vw; */
		width: 20%;
		
	}

 	.small__ctaSection	.right{
		background: #222530;
		/* width:40vw; */
		width: 80%;
	}

	.form__wrapper {
    	display: flex;
		flex-direction: row;
		margin-top: 10px;
	}


	::-webkit-input-placeholder { /* WebKit browsers */
		color: #999 !important;
		opacity: 1;
	}
	:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		color: #999 !important;
		opacity: 1;
	}
	::-moz-placeholder { /* Mozilla Firefox 19+ */
		color: #999 !important;
		opacity: 1;
	}
	:-ms-input-placeholder { /* Internet Explorer 10+ */
		color: #999 !important;
		opacity: 1;
	}

	input.wpcf7-form-control.wpcf7-submit {
    font-size: 17px;
    color: #fff;
    display: inline-block;
    font-weight: 600;
    border-radius: 5px;
    padding: 12px 35px;
    text-align: center;
    transition: 0.5s all ease;
    background: #4169e1;
    background: -moz-linear-gradient(left, #4169e1 0, #1f52ea 100%);
    background: -webkit-linear-gradient(left, #4169e1 0, #1f52ea 100%);
    background: linear-gradient(to right, #4169e1 0, #1f52ea 100%);
    border: 1px solid transparent;

}
input.wpcf7-form-control.wpcf7-submit:hover {
    background: #fff;
    color: #3863e3;
    text-decoration: none;
    border-color: #3863e3;
}

</style>
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