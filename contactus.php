<?php
// Template Name: Contact Us

get_header(); while(have_posts()): the_post(); ?>

<!-- Our Company Section -->
<div class="container">
<?php
$image = get_field('background');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="header-images" />
<?php endif; ?>
</div>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
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
