<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	add_action( 'carbon_fields_register_fields', 'aiss_product_post_fields' );

	function aiss_product_post_fields(){
		Container::make( 'term_meta', 'Зображення категорії' )
		         ->where( 'term_taxonomy', '=', 'products_tax' )
		         ->add_fields( array(
			         Field::make_image('aiss_product_post_fields_category_image', 'Зображення категорії')
			            ->set_type('image')
			            ->set_value_type('url'),
			         Field::make_text('aiss_product_post_fields_category_link', 'Посилання на сторінку категорії')
			            ->set_attribute('type', 'url')

		         ) );

		Container::make( 'post_meta', 'Картка продукту' )
		         ->where( 'post_type', '=', 'products' )
		         ->add_tab('Головний екран', array(
			         Field::make_text('aiss_product_post_fields_main_screen_phone', 'Телефон'),
			         Field::make_text('aiss_product_post_fields_main_screen_work', 'Час роботи'),
			         Field::make_image('aiss_product_post_fields_main_screen_image', 'Зображення')
			              ->set_type('image')
			              ->set_value_type('url')
		         ))

				->add_tab('Форма з закликом', array(
					Field::make_text('aiss_product_post_fields_form_title', 'Заголовок форми'),
					Field::make_text('aiss_product_post_fields_form_subtitle', 'Підзаголовок форми'),
					Field::make_text('aiss_product_post_fields_form_btn', 'Текст кнопки у форми')
				))

				->add_tab( 'Контент сторінки', array(
					Field::make_complex('aiss_product_type_page_content_list', 'Розділ')
					     ->add_fields(array(
						     Field::make_text('title', 'Заголовок розділу'),
						     Field::make_rich_text('text_part_1', 'Текстова частитна'),
						     Field::make_radio('media_type_part_1', 'Оберіть тип медіа вставки')
						          ->add_options( array(
							          'pic_1' => 'Вставити одне зображення',
							          'pic_2' => 'Вставити два зображення',
							          'video' => 'Вставити відео',
							          'form' => 'Вставвити форму зворотнього звʼязку',
							          'gallery' => 'Галірея зображень',
							          'material_5' => 'Перелік мареріалів 5 в ряд',
							          'material_4' => 'Перелік мареріалів 4 в ряд',
							          'material_3' => 'Перелік мареріалів 3 в ряд',
							          'table_form' => 'Форма з таблицкю',
							          'text_form' => 'Форма з текстом',

						          ) ),
						     Field::make_image('media_type_part_1_image', 'Зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'pic_1',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_image('media_type_part_1_image1', 'Перше зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'pic_2',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_image('media_type_part_1_image2', 'Друге зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'pic_2',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_text('media_type_part_1_video', 'ID відео з youtube')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'video',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_form_title_1', 'Звичайна частина заголовку')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_form_title_2', 'Виділина частина заголовку')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_form_btn', 'Текст кнопки')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_image('media_type_part_1_form_image', 'Зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_complex('media_type_part_1_gallery', 'Галірея зображень')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'gallery',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
						          )),
						     Field::make_complex('media_type_part_1_material_5', 'Перелік мтереалів 5 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'material_5',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
						          	  Field::make_text('name', 'Назва'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_complex('media_type_part_1_material_4', 'Перелік мтереалів 4 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'material_4',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('name', 'Назва'),
							          Field::make_text('type', 'Тип'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_complex('media_type_part_1_material_3', 'Перелік мтереалів 3 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'material_3',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('name', 'Назва'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_text('media_type_part_1_t_form_title', 'Заголовок форми')
							     ->set_conditional_logic( array(
								     'relation' => 'OR',
								     array(
									     'field' => 'media_type_part_1',
									     'value' => 'table_form',
									     'compare' => '=',
								     ),
								     array(
									     'field' => 'media_type_part_1',
									     'value' => 'text_form',
									     'compare' => '=',
								     )
							     ) ),
						     Field::make_text('media_type_part_1_t_form_subtitle', 'Підаголовок форми')
						          ->set_conditional_logic( array(
							          'relation' => 'OR',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'table_form',
								          'compare' => '=',
							          ),
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_t_form_btn', 'Текст у кнопки форми')
						          ->set_conditional_logic( array(
							          'relation' => 'OR',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'table_form',
								          'compare' => '=',
							          ),
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_table_column_1', 'Заголовок стовпця 1')
							     ->set_conditional_logic( array(
								     'relation' => 'AND',
								     array(
									     'field' => 'media_type_part_1',
									     'value' => 'table_form',
									     'compare' => '=',
								     )
							     ) ),
						     Field::make_text('media_type_part_1_table_column_2', 'Заголовок стовпця 2')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_1_table_column_3', 'Заголовок стовпця 3')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_1',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_complex('media_type_part_1_table_rows', 'Рядки таблиці')
								     ->set_conditional_logic( array(
									     'relation' => 'AND',
									     array(
										     'field' => 'media_type_part_1',
										     'value' => 'table_form',
										     'compare' => '=',
									     )
								     ) )
									->add_fields(array(
										Field::make_text('column_1', 'Колонка 1'),
										Field::make_text('column_2', 'Колонка 2'),
										Field::make_text('column_3', 'Колонка 3'),
									)),

						     Field::make_rich_text('media_type_part_1_f_text', 'Текст поряд з формою')
								     ->set_conditional_logic( array(
									     'relation' => 'AND',
									     array(
										     'field' => 'media_type_part_1',
										     'value' => 'text_form',
										     'compare' => '=',
									     )
								     ) ),

						     Field::make_rich_text('text_part_2', 'Текстова частитна'),
						     Field::make_radio('media_type_part_2', 'Оберіть тип медіа вставки')
						          ->add_options( array(
							          'pic_1' => 'Вставити одне зображення',
							          'pic_2' => 'Вставити два зображення',
							          'video' => 'Вставити відео',
							          'form' => 'Вставвити форму зворотнього звʼязку',
							          'gallery' => 'Галірея зображень',
							          'material_5' => 'Перелік мареріалів 5 в ряд',
							          'material_4' => 'Перелік мареріалів 4 в ряд',
							          'material_3' => 'Перелік мареріалів 3 в ряд',
							          'table_form' => 'Форма з таблицкю',
							          'text_form' => 'Форма з текстом',
						          ) ),
						     Field::make_image('media_type_part_2_image', 'Зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'pic_1',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_image('media_type_part_2_image1', 'Перше зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'pic_2',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_image('media_type_part_2_image2', 'Друге зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'pic_2',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_text('media_type_part_2_video', 'ID відео з youtube')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'video',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_form_title_1', 'Звичайна частина заголовку')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_form_title_2', 'Виділина частина заголовку')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_form_btn', 'Текст кнопки')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_image('media_type_part_2_form_image', 'Зображення')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'form',
								          'compare' => '=',
							          )
						          ) )
						          ->set_type('image'),
						     Field::make_complex('media_type_part_2_gallery', 'Галірея зображень')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'gallery',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
						          )),
						     Field::make_complex('media_type_part_2_material_5', 'Перелік мтереалів 5 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'material_5',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('name', 'Назва'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_complex('media_type_part_2_material_4', 'Перелік мтереалів 4 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'material_4',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('name', 'Назва'),
							          Field::make_text('type', 'Тип'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_complex('media_type_part_2_material_3', 'Перелік мтереалів 3 в ряд')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'material_3',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('name', 'Назва'),
							          Field::make_image('image', 'Зображення')
							               ->set_type('image')
							               ->set_value_type('url')
						          )),
						     Field::make_text('media_type_part_2_t_form_title', 'Заголовок форми')
						          ->set_conditional_logic( array(
							          'relation' => 'OR',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          ),
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_t_form_subtitle', 'Підаголовок форми')
						          ->set_conditional_logic( array(
							          'relation' => 'OR',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          ),
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_t_form_btn', 'Текст у кнопки форми')
						          ->set_conditional_logic( array(
							          'relation' => 'OR',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          ),
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_table_column_1', 'Заголовок стовпця 1')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_table_column_2', 'Заголовок стовпця 2')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_text('media_type_part_2_table_column_3', 'Заголовок стовпця 3')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_complex('media_type_part_2_table_rows', 'Рядки таблиці')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'table_form',
								          'compare' => '=',
							          )
						          ) )
						          ->add_fields(array(
							          Field::make_text('column_1', 'Колонка 1'),
							          Field::make_text('column_2', 'Колонка 2'),
							          Field::make_text('column_3', 'Колонка 3'),
						          )),

						     Field::make_rich_text('media_type_part_2_f_text', 'Текст поряд з формою')
						          ->set_conditional_logic( array(
							          'relation' => 'AND',
							          array(
								          'field' => 'media_type_part_2',
								          'value' => 'text_form',
								          'compare' => '=',
							          )
						          ) ),
						     Field::make_rich_text('text_part_3', 'Текстова частитна'),
				     ))

			) )

				->add_tab('Відділ продажів', array(
					Field::make_text('aiss_product_post_fields_sale_title', 'Заголовок'),
					Field::make_text('aiss_product_post_fields_sale_btn_text', 'Текст кнопки'),
					Field::make_image('aiss_product_post_fields_sale_big_image', 'Великий банер')
					     ->set_type('image')
					     ->set_value_type('url'),
					Field::make_image('aiss_product_post_fields_sale_small_image', 'Маленький банер')
					     ->set_type('image')
					     ->set_value_type('url')
				));


	}

	add_action( 'carbon_fields_register_fields', 'aiss_boilers_post_fields' );

	function aiss_boilers_post_fields(){
		Container::make( 'term_meta', 'Зображення категорії' )
		         ->where( 'term_taxonomy', '=', 'boilers_tax' )
		         ->add_fields( array(
			         Field::make_image('aiss_boilers_post_fields_category_image', 'Зображення категорії')
			              ->set_type('image')
			              ->set_value_type('url'),
			         Field::make_text('aiss_boilers_post_fields_category_link', 'Посилання на сторінку категорії')
			              ->set_attribute('type', 'url')

		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'aiss_service_post_fields' );

	function aiss_service_post_fields(){
		Container::make( 'term_meta', 'Зображення категорії' )
		         ->where( 'term_taxonomy', '=', 'service_tax' )
		         ->add_fields( array(
			         Field::make_image('aiss_service_post_fields_category_image', 'Зображення категорії')
			              ->set_type('image')
			              ->set_value_type('url'),
			         Field::make_text('aiss_service_post_fields_category_link', 'Посилання на сторінку категорії')
			              ->set_attribute('type', 'url')

		         ) );

		Container::make( 'post_meta', 'Картка сервісу' )
		         ->where( 'post_type', '=', 'service' )

				->add_tab('Головний екран', array(
					Field::make_text('aiss_service_post_fields_main_screen_phone', 'Телефон'),
					Field::make_text('aiss_service_post_fields_main_screen_work', 'Час роботи'),
					Field::make_image('aiss_service_post_fields_main_screen_image', 'Зображення')
						->set_type('image')
						->set_value_type('url')
				))

				->add_tab('Текстова частина 1', array(
					Field::make_text('aiss_service_post_fields_text_part1_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_service_post_fields_text_part1_text_before1', 'Текст перед першим зображенням'),
					Field::make_image('aiss_service_post_fields_text_part1_image1', 'Перше зображення')
						->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part1_text_after1', 'Текст після першого зображення'),
					Field::make_image('aiss_service_post_fields_text_part1_image2', 'Другее зображення')
					     ->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part1_text_after2', 'Текст після другого зображення'),

				))

				->add_tab('Текстова частина 2', array(
					Field::make_text('aiss_service_post_fields_text_part2_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_service_post_fields_text_part2_text_before1', 'Текст перед першим зображенням'),
					Field::make_image('aiss_service_post_fields_text_part2_image1', 'Перше зображення')
					     ->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part2_text_after1', 'Текст після першого зображення'),
					Field::make_image('aiss_service_post_fields_text_part2_image2', 'Другее зображення')
					     ->set_value('image')
				))

				->add_tab('Текстова частина 3', array(
					Field::make_text('aiss_service_post_fields_text_part3_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_service_post_fields_text_part3_text_before1', 'Текст перед першим зображенням'),
					Field::make_image('aiss_service_post_fields_text_part3_image1', 'Перше зображення')
					     ->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part3_text_after1', 'Текст після першого зображення'),
					Field::make_image('aiss_service_post_fields_text_part3_image2', 'Другее зображення')
					     ->set_value('image')
				))

				->add_tab('Текстова частина 4', array(
					Field::make_text('aiss_service_post_fields_text_part4_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_service_post_fields_text_part4_text_before1', 'Текст перед першим зображенням'),
					Field::make_image('aiss_service_post_fields_text_part4_image1', 'Перше зображення')
					     ->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part4_text_after1', 'Текст після першого зображення'),
					Field::make_image('aiss_service_post_fields_text_part4_image2', 'Другее зображення')
					     ->set_value('image')
				))

				->add_tab('Текстова частина 5', array(
					Field::make_text('aiss_service_post_fields_text_part5_title', 'Головний заголовок'),
					Field::make_rich_text('aiss_service_post_fields_text_part5_text_before1', 'Текст перед першим зображенням'),
					Field::make_image('aiss_service_post_fields_text_part5_image1', 'Перше зображення')
					     ->set_value('image'),
					Field::make_rich_text('aiss_service_post_fields_text_part5_text_after1', 'Текст після першого зображення'),
					Field::make_image('aiss_service_post_fields_text_part5_image2', 'Другее зображення')
					     ->set_value('image')
				))

				->add_tab('Відділ продажів', array(
					Field::make_text('aiss_service_post_fields_sale_title', 'Заголовок'),
					Field::make_text('aiss_service_post_fields_sale_btn_text', 'Текст кнопки'),
					Field::make_image('aiss_service_post_fields_sale_big_image', 'Великий банер')
					     ->set_type('image')
					     ->set_value_type('url'),
				));


	}

	add_action( 'carbon_fields_register_fields', 'aiss_documentation_post_fields' );

	function aiss_documentation_post_fields(){
		Container::make( 'post_meta', 'Картка документу' )
		         ->where( 'post_type', '=', 'documentation' )
		         ->add_fields( array(
					Field::make_file('aiss_documentation_post_fields_link', 'Документ у форматі PDF')
						->set_value_type( 'url' )
		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'aiss_case_post_fields' );

	function aiss_case_post_fields(){
		Container::make( 'post_meta', 'Картка прикладу' )
		         ->where( 'post_type', '=', 'case' )
		         ->add_fields( array(
		         	Field::make_radio('aiss_case_post_content_type')
			            ->add_options( array(
				            'image' => 'Зображення',
				            'video' => 'Відео',

			            ) ),
			        Field::make_text('aiss_case_post_content_video', 'ID відео з youtube')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'aiss_case_post_content_type',
						         'value' => 'video',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_text('aiss_case_post_content_gait_type', 'Тип воріт')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'aiss_case_post_content_type',
					              'value' => 'image',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_image('aiss_case_post_content_image', 'Зображення')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'aiss_case_post_content_type',
					              'value' => 'image',
					              'compare' => '=',
				              )
			              ) )
			                ->set_value('image')
			                ->set_value_type('url')

		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'aiss_blog_post_fields' );

	function aiss_blog_post_fields(){
		Container::make( 'post_meta', 'Картка статті' )
		         ->where( 'post_type', '=', 'blog' )
		         ->add_fields( array(
			         Field::make_complex('aiss_blog_type_page_content_list', 'Розділ')
			              ->add_fields(array(
				              Field::make_text('title', 'Заголовок розділу')
			                    ->set_help_text('Текст який має бути червоним, треба обернути тегом &#60;span&#62;червоний текст в середені&#60;/span&#62;'),
				              Field::make_rich_text('text_part_1', 'Текстова частитна'),
				              Field::make_radio('media_type_part_1', 'Оберіть тип медіа вставки')
				                   ->add_options( array(
					                   'pic_1' => 'Вставити одне зображення',
					                   'pic_2' => 'Вставити два зображення',
					                   'video' => 'Вставити відео',
					                   'form' => 'Вставвити форму зворотнього звʼязку',
					                   'gallery' => 'Галірея зображень',
					                   'material_5' => 'Перелік мареріалів 5 в ряд',
					                   'material_4' => 'Перелік мареріалів 4 в ряд',
					                   'material_3' => 'Перелік мареріалів 3 в ряд',
					                   'table_form' => 'Форма з таблицкю',
					                   'text_form' => 'Форма з текстом',

				                   ) ),
				              Field::make_image('media_type_part_1_image', 'Зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'pic_1',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_image('media_type_part_1_image1', 'Перше зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'pic_2',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_image('media_type_part_1_image2', 'Друге зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'pic_2',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_text('media_type_part_1_video', 'ID відео з youtube')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_form_title_1', 'Звичайна частина заголовку')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_form_title_2', 'Виділина частина заголовку')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_form_btn', 'Текст кнопки')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_image('media_type_part_1_form_image', 'Зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_complex('media_type_part_1_gallery', 'Галірея зображень')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'gallery',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
				                   )),
				              Field::make_complex('media_type_part_1_material_5', 'Перелік мтереалів 5 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'material_5',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_complex('media_type_part_1_material_4', 'Перелік мтереалів 4 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'material_4',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_text('type', 'Тип'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_complex('media_type_part_1_material_3', 'Перелік мтереалів 3 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'material_3',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_text('media_type_part_1_t_form_title', 'Заголовок форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_t_form_subtitle', 'Підаголовок форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_t_form_btn', 'Текст у кнопки форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_table_column_1', 'Заголовок стовпця 1')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_table_column_2', 'Заголовок стовпця 2')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_1_table_column_3', 'Заголовок стовпця 3')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_complex('media_type_part_1_table_rows', 'Рядки таблиці')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('column_1', 'Колонка 1'),
					                   Field::make_text('column_2', 'Колонка 2'),
					                   Field::make_text('column_3', 'Колонка 3'),
				                   )),

				              Field::make_rich_text('media_type_part_1_f_text', 'Текст поряд з формою')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_1',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),

				              Field::make_rich_text('text_part_2', 'Текстова частитна'),
				              Field::make_radio('media_type_part_2', 'Оберіть тип медіа вставки')
				                   ->add_options( array(
					                   'pic_1' => 'Вставити одне зображення',
					                   'pic_2' => 'Вставити два зображення',
					                   'video' => 'Вставити відео',
					                   'form' => 'Вставвити форму зворотнього звʼязку',
					                   'gallery' => 'Галірея зображень',
					                   'material_5' => 'Перелік мареріалів 5 в ряд',
					                   'material_4' => 'Перелік мареріалів 4 в ряд',
					                   'material_3' => 'Перелік мареріалів 3 в ряд',
					                   'table_form' => 'Форма з таблицкю',
					                   'text_form' => 'Форма з текстом',
				                   ) ),
				              Field::make_image('media_type_part_2_image', 'Зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'pic_1',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_image('media_type_part_2_image1', 'Перше зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'pic_2',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_image('media_type_part_2_image2', 'Друге зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'pic_2',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_text('media_type_part_2_video', 'ID відео з youtube')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_form_title_1', 'Звичайна частина заголовку')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_form_title_2', 'Виділина частина заголовку')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_form_btn', 'Текст кнопки')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_image('media_type_part_2_form_image', 'Зображення')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'form',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->set_type('image'),
				              Field::make_complex('media_type_part_2_gallery', 'Галірея зображень')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'gallery',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
				                   )),
				              Field::make_complex('media_type_part_2_material_5', 'Перелік мтереалів 5 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'material_5',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_complex('media_type_part_2_material_4', 'Перелік мтереалів 4 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'material_4',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_text('type', 'Тип'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_complex('media_type_part_2_material_3', 'Перелік мтереалів 3 в ряд')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'material_3',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('name', 'Назва'),
					                   Field::make_image('image', 'Зображення')
					                        ->set_type('image')
					                        ->set_value_type('url')
				                   )),
				              Field::make_text('media_type_part_2_t_form_title', 'Заголовок форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_t_form_subtitle', 'Підаголовок форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_t_form_btn', 'Текст у кнопки форми')
				                   ->set_conditional_logic( array(
					                   'relation' => 'OR',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   ),
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_table_column_1', 'Заголовок стовпця 1')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_table_column_2', 'Заголовок стовпця 2')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('media_type_part_2_table_column_3', 'Заголовок стовпця 3')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_complex('media_type_part_2_table_rows', 'Рядки таблиці')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'table_form',
						                   'compare' => '=',
					                   )
				                   ) )
				                   ->add_fields(array(
					                   Field::make_text('column_1', 'Колонка 1'),
					                   Field::make_text('column_2', 'Колонка 2'),
					                   Field::make_text('column_3', 'Колонка 3'),
				                   )),

				              Field::make_rich_text('media_type_part_2_f_text', 'Текст поряд з формою')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type_part_2',
						                   'value' => 'text_form',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_rich_text('text_part_3', 'Текстова частитна'),
			              ))
		         ) );

	}

