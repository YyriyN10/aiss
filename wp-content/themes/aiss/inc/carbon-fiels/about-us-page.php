<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_about_us_page_fields' );

	function aiss_about_us_page_fields(){

		Container::make( 'post_meta', 'Сторінка про нас')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-about-us.php' );
		         } )

				->add_fields(array(
					Field::make_image('aiss_about_us_page_main_screen_image', 'Головне зображення')
						->set_type('image')
						->set_value_type('url')
				))

				->add_tab( 'Основний контент', array(
					Field::make_complex('aiss_about_us_page_main_content', 'Розділ')
						->add_fields(array(
							Field::make_text('name', 'Заголовок розділу'),
							Field::make_rich_text('text', 'Текстовий контент розділу')
						))
				) )

		         ->add_tab( 'Співробітники', array(
		         	Field::make_complex('aiss_about_us_page_team_list', 'Перелік співробітників')
						->add_fields(array(
							Field::make_text('name', 'Іʼмя'),
							Field::make_text('position', 'Посада'),
							Field::make_image('image', 'Фото')
								->set_type('image')
								->set_value_type('url'),
							Field::make_complex('phone_list', 'Перелік контаетних телефонів')
								->add_fields(array(
									Field::make_text('phone', 'Номер телфону')
								)),
							Field::make_text('email', 'E-mail')
								->set_attribute('type', 'email'),
							Field::make_text('fb_link', 'Посилання на Фейсбук')
								->set_attribute('type', 'url'),
							Field::make_text('google_link', 'Посилання на Гугу')
							     ->set_attribute('type', 'url'),
							Field::make_text('skype_link', 'Посилання на Skype')
							     ->set_attribute('type', 'url')
						))

		         ) );



	}
