<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swimghana
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

<body <?php body_class('bg-gray-200 bg-white text-xl antialiased font-main text-gray'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'swimghana' ); ?></a> -->
	
	<header id="masthead" class="site-header relative min-h-450">
		<div class="top-bar bg-cyan mb-8">
			<div class="mx-auto container flex items-center justify-between h-12">
				<div class="contact-box">
					<a href="#">0246556671</a>
				</div>
				<div class="top-nav">
					<ul class="text-left">
						<li class="nav-item inline-block">
							<a href="#" class="px-4 py-2 capitalize">Account</a>
						</li>
						<li class="inline-block">
						<a href="#" class="px-4 py-2 capitalize">Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="flex container mx-auto  shadow rounded bg-white h-16">
			<div class="site-branding w-1/5 relative">
				<div class="site-title p-5 absolute bg-white rounded">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$swimghana_description = get_bloginfo( 'description', 'display' );
					if ( $swimghana_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $swimghana_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>
				
			</div><!-- .site-branding -->

			<nav id="navigation" class="navigation leading-10 items-center flex flex-grow">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-nav',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'primary-menu flex items-center justify-between',
						'walker' => new Swimghana_Nav_Walker()
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="search-box flex justify-between items-center w-24">
				<a href="#" class="icon-search search-link hover:bg-cyan hover:rounded mx-auto text-3xl w-full h-full text-center text-gray-900"></a>
			</div>
		</div>
		<?php if(is_front_page()): ?>
			<section class="bg-gray-200 absolute w-full h-full top-0 -z-1">
				<div class="overlay relative h-full">
					<img src="<?php echo esc_url(get_header_image()); ?>" alt="Header Image absolute " class="w-full h-full object-cover">
					<div class="home-slider-box p-8 bg-white absolute z-1 bottom-3em container rounded-md">
						<div class="slides relative">
							<div class="slider absolute">
								<img src="" alt="Product title">
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
	</header><!-- #masthead -->
