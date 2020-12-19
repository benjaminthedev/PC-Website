<?php
// Template Name: Contact Us

get_header(); while(have_posts()): the_post(); ?>



<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center mv7"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>



 <?php get_footer(); endwhile; ?>
