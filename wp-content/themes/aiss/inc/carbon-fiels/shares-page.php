<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_shares_page_fields' );

	function aiss_shares_page_fields(){
		Container::make( 'post_meta', 'Акції')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-shares.php' );
		         } )

		         ->add_fields(array(
		         	Field::make_complex('aiss_shares_list', 'Перелік акцій')
			         ->add_fields(array(
			         	 Field::make_text('name', 'Назва акцій'),
				         Field::make_text('text', 'Короткий опис акції'),
				         Field::make_image('image', 'Банер акції')
				            ->set_type('image')

			         ))
		         ));


	}
