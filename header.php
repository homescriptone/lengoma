<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lengoma
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lengoma' ); ?></a>

	<div class="flex flex-col">
        <nav id="nav" class="py-8 md:border-b-0 border-b" role="navigation">
            <div class="container flex flex-wrap items-center md:flex-no-wrap">
                <?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					else:
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				?>
                <div class="ml-auto md:hidden">
                    <button onclick="menuToggle()" class="flex items-center rounded" type="button">
                        <i class="pe-7s-menu text-3xl"></i>
                    </button>
                </div>
		
				<?php
					wp_nav_menu(
						array(
							'container_class'      =>'w-full md:w-auto h-0 transition-all ease-out duration-300 md:transition-none md:flex-grow md:flex md:items-center opacity-0 md:opacity-100',
							'container_id'        => 'menu',
							
							'menu_class'      => 'menu-wrapper',
							
							//'fallback_cb'     => 'lengoma_primary_menu_callback',
							'items_wrap'           => '<ul id="ulMenu %1$s" class="flex flex-col duration-300 ease-out sm:transition-none md:flex-row ml-auto mt-5 md:mt-0 %2$s">%3$s</ul>',
							'add_li_class' 	=> 'hs_custom_menu',
							'theme_location'  => 'primary-menu',
						)
					);
				?>
            </div>
        </nav>
    </div>