<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_menu_fields' );

	function aiss_menu_fields(){
		Container::make( 'nav_menu_item', 'Додаткові налаштування' )
		         ->add_fields( array(
			         Field::make_text('aiss_menu_fields_icon_class', 'Назва клачу іконки ждя пункту меню')
		         ));
	}