<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	add_action( 'carbon_fields_register_fields', 'aiss_services_page_fields' );

	function aiss_services_page_fields(){
		Container::make( 'post_meta', 'Сторінка сервісів')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-service.php' );
		         } )

		         ->add_tab( 'Головний екран', array(
			         Field::make_text('aiss_service_page_main_screen_title', 'Головний заголовок'),
			         Field::make_text('aiss_service_page_main_screen_phone', 'Контактний телефон'),
			         Field::make_text('aiss_service_page_main_screen_work_time', 'Текст з часом роботи'),
			         Field::make_image('aiss_service_page_main_screen_image', 'Зображення')
			              ->set_type('image')
			              ->set_value_type('url')
		         ) )

				->add_tab( 'Інформація про сервіси', array(
					Field::make_text('aiss_service_page_info_repair_auto_gate_title', 'Заголоаок "Ремонт і сервіс автоматичних воріт"'),
					Field::make_rich_text('aiss_service_page_info_repair_auto_gate_text_before', 'Текст до відео "Ремонт і сервіс автоматичних воріт"'),
					Field::make_text('aiss_service_page_info_repair_auto_gate_video', 'ID відео з youtube "Ремонт і сервіс автоматичних воріт"'),
					Field::make_rich_text('aiss_service_page_info_repair_auto_gate_text_after', 'Текст після відео "Ремонт і сервіс автоматичних воріт"'),
					Field::make_complex('aiss_service_page_info_repair_auto_gate_logo_list', 'Перелік логотипів "Ремонт і сервіс автоматичних воріт"')
						->add_fields(array(
							Field::make_image('image', 'Зображення')
								->set_type('image')
						)),
					Field::make_text('aiss_service_page_info_repair_auto_gate_garage_title', 'Заголоаок "Обслуговування автоматичних воріт для гаража та у двір"'),
					Field::make_rich_text('aiss_service_page_info_repair_auto_gate_garage_text_before', 'Текст до зображень "Обслуговування автоматичних воріт для гаража та у двір"'),
					Field::make_complex('aiss_service_page_info_repair_auto_gate_garage_text_image_list', 'Перелік зображень "Обслуговування автоматичних воріт для гаража та у двір"')
						->add_fields(array(
							Field::make_image('image', 'Зображення')
								->set_type('image')
						)),
					Field::make_rich_text('aiss_service_page_info_repair_auto_gate_garage_text_after', 'Текст після зображень "Обслуговування автоматичних воріт для гаража та у двір"'),
					Field::make_text('aiss_service_page_info_repair_service_gate_title', 'Заголоаок "Обслуговування та ремонт воріт"'),
					Field::make_rich_text('aiss_service_page_info_repair_service_gate_text', 'Текст "Обслуговування та ремонт воріт"'),
					Field::make_text('aiss_service_page_info_repair_gate_auto_title', 'Заголоаок "Ремонт автоматичних воріт"'),
					Field::make_rich_text('aiss_service_page_info_repair_gate_auto_text', 'Текст "Ремонт автоматичних воріт"'),
					Field::make_complex('aiss_service_page_info_repair_gate_auto_image_list', 'Перелік зображень "Ремонт автоматичних воріт"')
						->add_fields(array(
							Field::make_image('image', 'Зобрадення')
								->set_type('image')
						))
				) );


	}
