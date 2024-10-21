<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action( 'wp_enqueue_scripts', 'aiss_ajax_data', 99 );
	function aiss_ajax_data(){

		wp_localize_script('aiss-main-js', 'aiss_ajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}
