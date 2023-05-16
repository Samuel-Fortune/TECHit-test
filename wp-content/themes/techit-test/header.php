<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TECHiT-test
 */
$page_id = get_the_ID();
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'techit-test' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="nav">
			<div class="site-wrapper">
				<div class="main_nav_wrapper">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
			
					<nav id="site-navigation" class="main-navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'techit-test' ); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container' => 'div',
								'container_class' => 'nav-buttom-list',
								'container_id' => 'nav-buttom-list-menu',
								'items_wrap' => '<ul class="list-menu">%3$s</ul>',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<button class="btn"><a href="#">Contact us</a></button>
				</div>

				<!-- -->
				<div class="content-wrapper">
					<div class="text-content">
						<h3><?php echo get_field('our_services_head', $page_id); ?></h3>
						<h1><?php echo get_field('our_services_paragraph', $page_id); ?></h1>
					</div>
					<div>
						<img src="<?php echo get_field('our_services_image', $page_id); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
