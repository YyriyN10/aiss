<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_documentation_page_fields' );

	function aiss_documentation_page_fields(){
		Container::make( 'post_meta', 'Сторінка документації')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-documentation.php' );
		         } )

				->add_fields(array(
					Field::make_text('aiss_documentation_page_main_title', 'Головний заголовок сторінки')
				));


	}

