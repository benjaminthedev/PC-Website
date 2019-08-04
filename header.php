<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pioneer_Cuts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<?php if ( is_front_page() || is_home()) : ?>
	<header class="site-header" id="myHeader">
<?php else: ?>
	<header class="site-header inner-header" id="myHeader">
<?php endif;?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-2 align-self-center">
					<div class="logo">
            			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            				<img src="<?php the_field('site_logo','options'); ?>" alt="">
            			</a>
            			<div class="mobile-menu">
            				<span></span>
            				<span></span>
            				<span></span>
            			</div>
					</div>
				</div>
				<div class="col-12 col-md-8 align-self-center mobile-hide">
					<div class="main-menu">
	                    <?php wp_nav_menu( array(
	                        'theme_location'   =>  'mainMenu',
	                        ));
	                     ?>
					</div>
					<div class="telephone">
							<i class="fa fa-phone"></i> <a id="topbar-phone" href="tel:+15177984988">(517) 798-4988</a>
					</div>
				</div>
				<div class="col-12 col-md-2 text-right align-self-center mobile-hide">
					<a id="form-btn" href="<?php the_field('header_btn_link','options');?>" class="header-btn">
						<?php the_field('header_btn_title','options'); ?>
					</a>
				</div>
			</div>
		</div>
	</header>

	<div class="humbergur-menu">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php the_field('site_logo','options'); ?>" alt="">
			</a>
			<div class="menu-close">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/close-icon.png" alt="">
			</div>
		</div>

		<div class="main-mobile-menu">
            <?php wp_nav_menu( array(
                'theme_location'   =>  'mainMenu',
                ));
             ?>
		</div>
		<div class="quote-btn">
			<a id="form-btn" href="<?php the_field('header_btn_link','options');?>" class="header-btn">
				<?php the_field('header_btn_title','options'); ?>
			</a>
		</div>
	</div>