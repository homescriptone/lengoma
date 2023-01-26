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
                <a href="index.html" class="flex">
                    <i class="icofont-deer-head text-black text-[42px]"></i>
                </a>
                <div class="ml-auto md:hidden">
                    <button onclick="menuToggle()" class="flex items-center rounded" type="button">
                        <i class="pe-7s-menu text-3xl"></i>
                    </button>
                </div>
                <div id="menu" class="w-full md:w-auto h-0 transition-all ease-out duration-300 md:transition-none md:flex-grow md:flex md:items-center opacity-0 md:opacity-100">
                    <ul id="ulMenu" class="flex flex-col duration-300 ease-out sm:transition-none md:flex-row ml-auto mt-5 md:mt-0">
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-blue-500 p-3 uppercase text-sm"
                                href="index.html" title="Home">Home</a>
                        </li>
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm"
                                href="about.html" title="About">About</a>
                        </li>
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm"
                                href="service.html" title="Service">Service</a>
                        </li>
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm"
                                href="work.html" title="Work">Work</a>
                        </li>
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm"
                                href="blog.html" title="Blog">Blog</a>
                        </li>
                        <li>
                            <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm"
                                href="contact.html" title="Contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>