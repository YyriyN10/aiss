<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_thx_page_fields' );

	function aiss_thx_page_fields(){
		Container::make( 'post_meta', 'Сторінка подяки')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-thx.php' );
		         } )

		         ->add_fields(array(
			         Field::make_image('aiss_thx_main_screen_image', 'Головне зображення')
			              ->set_type('image')
			              ->set_value_type('url'),
			         Field::make_text('aiss_thx_main_screen_title', 'Головний заголовок'),
			         Field::make_text('aiss_thx_main_screen_red_text', 'Червоний текст'),
			         Field::make_text('aiss_thx_main_screen_social_text', 'Текст заклику перейти на соціальні мережі'),
		         ));

	}