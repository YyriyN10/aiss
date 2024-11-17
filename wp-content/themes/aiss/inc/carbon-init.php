<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Add Carbon Fields
	 */

	add_action( 'after_setup_theme', 'carbon_load' );

	function carbon_load() {
		require get_template_directory() . '/vendor/autoload.php';
		\Carbon_Fields\Carbon_Fields::boot();
	}

	/**
	 * Add templates
	 */

require ('carbon-fiels/options-page.php');
require ('carbon-fiels/menu-items.php');
require ('carbon-fiels/main-page.php');
require ('carbon-fiels/services-page.php');
require ('carbon-fiels/post-types-fields.php');
require ('carbon-fiels/documentation-page.php');
require ('carbon-fiels/product-page.php');
require ('carbon-fiels/contact-page.php');
require ('carbon-fiels/about-us-page.php');
require ('carbon-fiels/thx-page.php');
require ('carbon-fiels/shares-page.php');
