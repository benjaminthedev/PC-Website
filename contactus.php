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


<style>
img.header-images {
    margin: 120px 0 -60px 0;
}
</style>


 <?php get_footer(); endwhile; ?>
