<?php

namespace Lengoma;

class LoadAssets{

    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'load' ) );
    }


    public function load(){

        /**
         * Load CSS.
         */
        wp_enqueue_style( 'lengoma-css-bs',  get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-a',  get_template_directory_uri() . '/assets/css/animate.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-ca',  get_template_directory_uri() . '/assets/css/custom-animation.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-sb',  get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-s',  get_template_directory_uri() . '/assets/css/slick.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-f',  get_template_directory_uri() . '/assets/css/flaticon.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-mm',  get_template_directory_uri() . '/assets/css/meanmenu.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-fa',  get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-mp',  get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-sp',  get_template_directory_uri() . '/assets/css/spacing.css', array(), LENGOMA_VERSION );
        wp_enqueue_style( 'lengoma-css-style',  get_template_directory_uri() . '/assets/css/style.css', array(), LENGOMA_VERSION );



        /**
         * Load JS.
         */
        wp_enqueue_script( 'lengoma-js-jq',  get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-wp',  get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-bbb',  get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-sb',  get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-s',  get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), LENGOMA_VERSION, true );
     
        wp_enqueue_script( 'lengoma-js-mp',  get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-cp',  get_template_directory_uri() . '/assets/js/counterup.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-w',  get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-mm',  get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-isp',  get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-imgl',  get_template_directory_uri() . '/assets/js/imageloaded-pkgd.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-af',  get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), LENGOMA_VERSION, true );
        wp_enqueue_script( 'lengoma-js-m',  get_template_directory_uri() . '/assets/js/main.js', array('jquery'), LENGOMA_VERSION, true );


    }
}