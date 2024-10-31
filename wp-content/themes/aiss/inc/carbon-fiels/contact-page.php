<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_contact_page_fields' );

	function aiss_contact_page_fields(){
		Container::make( 'post_meta', 'Сторінка контактів')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-contacts.php' );
		         } )

				->add_fields(array(
					Field::make_text('aiss_contact_page_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_contact_page_text', 'Текст сторінки'),
					Field::make_image('aiss_contact_page_image', 'Зображення')
					     ->set_type('image')
					     ->set_value_type('url')
				));

	}