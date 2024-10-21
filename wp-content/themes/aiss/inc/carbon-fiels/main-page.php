<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_main_page_fields' );

	function aiss_main_page_fields(){
		Container::make( 'post_meta', 'Головна сторінка')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_tab( 'Головний екран', array(
			         Field::make_text('aiss_main_page_main_screen_title', 'Головний заголовок'),
			         Field::make_text('aiss_main_page_main_screen_red_text', 'Червоний текст'),
			         Field::make_text('aiss_main_page_main_screen_call_text', 'Текст призиву'),
			         Field::make_image('aiss_main_page_main_screen_image', 'Зображення')
			              ->set_type('image')
			              ->set_value_type('url')
		         ) )

				->add_tab( 'Автоматичні ворота від АІСС', array(
					Field::make_text('aiss_main_page_automatic_gates_title', 'Заголовок блоку'),
					Field::make_rich_text('aiss_main_page_automatic_gates_text', 'Текст блоку'),
					Field::make_image('aiss_main_page_automatic_gates_image', 'Зображення блоку')
					     ->set_type('image')
						 ->set_value_type('url')
				) )

				->add_tab( 'Вартість воріт', array(
					Field::make_text('aiss_main_page_price_title', 'Заголовок вартості воріт'),
					Field::make_text('aiss_main_page_price_subtitle', 'Заголовок розстрочки'),
					Field::make_rich_text('aiss_main_page_price_text', 'Контент вартості'),
					Field::make_complex('aiss_main_page_price_type_table', 'Таблиця розстрочки по типам')
						->add_fields(array(
							Field::make_text('type_name', 'Назва типу'),
							Field::make_text('type_price', 'Вартість')
						)),
					Field::make_complex('aiss_main_page_price_product_table', 'Таблиця розстрочки по продукції')
					     ->add_fields(array(
						     Field::make_text('product_name', 'Назва продукції'),
						     Field::make_text('product_price', 'Вартість')
					     ))
				) )

				->add_tab( 'Блок заклик до дії', array(
					Field::make_text('aiss_main_page_call_title', 'Заголовок блоку'),
					Field::make_text('aiss_main_page_call_text', 'Текст заклику'),
				) )

				->add_tab( 'Як замовити та монтаж', array(
					Field::make_text('aiss_main_page_how_order_title', 'Заголовок "Як замовити"'),
					Field::make_rich_text('aiss_main_page_how_order_text', 'Текст "Як замовити"'),
					Field::make_text('aiss_main_page_how_order_editing_title', 'Заголовок "Монтаж"'),
					Field::make_rich_text('aiss_main_page_how_order_editing_text', 'Текст "Монтаж"'),
				) )

				->add_tab( 'Відео автоматичних воріт', array(
					Field::make_text('aiss_main_page_video_title', 'Заголовок блоку'),
					Field::make_complex('aiss_main_page_video_list', 'Перелік з відео')
						->set_max(3)
						->set_min(3)
						->add_fields(array(
							Field::make_text('video_name', 'Назва відео'),
							Field::make_text('video_id', 'ID Відео з Youtube')
						)),
					Field::make_text('aiss_main_page_video_sale_title', 'Заголовок відділу продажів'),
					Field::make_image('aiss_main_page_video_sale_banner', 'Зображення відділу продажів')
						->set_type('image')
						->set_value_type('url'),
					Field::make_text('aiss_main_page_video_sale_btn_text', 'Текст у кнопці')
				) );


	}