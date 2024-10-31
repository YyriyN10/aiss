<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_options' );

	function aiss_options(){
		Container::make( 'theme_options', 'Опції сайту')
		         ->set_icon( 'dashicons-screenoptions' )
		         ->add_tab( 'Наші контакти', array(
		         	Field::make_complex('aiss_option_contact_city', 'Додати місто та його контактні дані')
						->add_fields(array(
							Field::make_text('city_name', 'Назва міста'),
							Field::make_text('address', 'Адреса офісу'),
							Field::make_text('map_link', 'Посилання на карту')
								->set_attribute('type', 'url'),
							Field::make_text('landline_phone', 'Стаціонарний номер телефон'),
							Field::make_complex('mobile_phone_list', 'Перелік мобільних номерів телефонів')
								->add_fields(array(
									Field::make_text('phone', 'Телефон')
								)),
							Field::make_complex('email_list', 'Перелік пошт')
							     ->add_fields(array(
								     Field::make_text('email', 'E-mail')
								        ->set_attribute('type', 'email')
							     )),

						)),
			         Field::make_text('aiss_option_contact_main_phone', 'Головний телефон'),
			         Field::make_text('aiss_option_contact_main_email', 'E-mail')
			              ->set_attribute('type', 'email'),

			         Field::make_text('aiss_option_contact_main_manager', 'Іʼмя менеджера'),
			         Field::make_text('aiss_option_contact_main_manager_post', 'Назва посади менеджера'),
			         Field::make_text('aiss_option_contact_main_manager_phone', 'Телефон менеджера менеджера'),

		         ) )

		         ->add_tab( 'Соціальні мережі', array(
			         Field::make_text('aiss_option_social_facebook_link', 'Facebook')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_instagram_link', 'Instagram')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_youtube_link', 'Youtube')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_linkedin_link', 'Linkedin')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_twitter_link', 'Twitter')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_google_link', 'Google +')
			              ->set_attribute('type', 'url'),
			         Field::make_text('aiss_option_social_pinterest_link', 'Pinterest')
			              ->set_attribute('type', 'url'),


		         ) )

		         ->add_tab( 'Налаштування форм', array(

		         ) )

				->add_tab( 'Текст у футері', array(
					Field::make_text('aiss_option_footer_menu_name', 'Назва меню "Корисні посилання"'),
					Field::make_text('aiss_option_footer_posts_name', 'Назва меню "Популярні статті"'),
					Field::make_text('aiss_option_footer_contacts_name', 'Назва переліку контактів'),
				) )

		         ->add_tab( 'Опції', array(
			        Field::make_image('aiss_option_logo', 'Логотип')
			            ->set_type('image')
			            ->set_value_type('url'),
			        Field::make_text('aiss_option_blog_main_title', 'Головний заголовок блогу'),
			        Field::make_image('aiss_option_blog_main_image', 'Головне зображення сторінки блогу')
			              ->set_type('image')
			              ->set_value_type('url'),
			        Field::make_text('aiss_option_blog_popular_tags', 'Заголовок "Популяоні теги"'),
			        Field::make_text('aiss_option_blog_popular_posts', 'Заголовок "Популяоні posts"'),
			        Field::make_image('aiss_option_small_banner_image', 'Зображення маленького рекламного банеру з контактами')
			             ->set_type('image')
			             ->set_value_type('url'),
			        Field::make_image('aiss_option_case_main_image', 'Головне зображення сторінки прикладів робіт')
			              ->set_type('image')
			              ->set_value_type('url'),
			        Field::make_text('aiss_option_case_video_title', 'Заголовок відеоприкладів'),
			         Field::make_text('aiss_option_case_photo_title', 'Заголовок фотоприкладів'),

		         ) );
	}

