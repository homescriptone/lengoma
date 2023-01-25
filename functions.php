<?php

namespace Lengoma;

define('LENGOMA_VERSION', "1.0.0");

require_once "inc/load/class-lengoma-load-assets.php";

use Lengoma\LoadAssets;

// Load CSS, JS.
new LoadAssets();

// renable the customizer.
add_action( 'customize_register', '__return_true' );

// add support for widgets.
add_theme_support('widgets');