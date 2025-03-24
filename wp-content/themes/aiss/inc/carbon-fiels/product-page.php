<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'aiss_product_type_page_fields' );

	function aiss_product_type_page_fields(){
		Container::make( 'post_meta', 'Головна сторінка')
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-product.php' );
		         } )

		         ->add_tab( 'Головний екран', array(
			         Field::make_text('aiss_product_type_page_main_screen_red_text', 'Червоний текст'),
			         Field::make_text('aiss_product_type_page_main_screen_call_text', 'Текст призиву'),
			         Field::make_image('aiss_product_type_page_main_screen_image', 'Зображення')
			              ->set_type('image')
			              ->set_value_type('url')
		         ) )

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
									'gallery' => 'Галірея зображень'
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
							Field::make_file('media_type_part_1_video_file', 'Завантажте файл відео (якщо відео не має на Youtube)')
								->set_type('video')
								->set_value_type('url')
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
							Field::make_rich_text('text_part_2', 'Текстова частитна'),
							Field::make_radio('media_type_part_2', 'Оберіть тип медіа вставки')
							     ->add_options( array(
								     'pic_1' => 'Вставити одне зображення',
								     'pic_2' => 'Вставити два зображення',
								     'video' => 'Вставити відео',
								     'form' => 'Вставвити форму зворотнього звʼязку',
								     'gallery' => 'Галірея зображень'
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

							Field::make_file('media_type_part_2_video_file', 'Завантажте файл відео (якщо відео не має на Youtube)')
							     ->set_type('video')
							     ->set_value_type('url')
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
							Field::make_rich_text('text_part_3', 'Текстова частитна'),
						))

				) )

				->add_tab('Відділ продажів', array(
					Field::make_text('aiss_product_type_page_sale_title', 'Заголовок'),
					Field::make_text('aiss_product_type_page_sale_btn_text', 'Текст кнопки'),
					Field::make_complex('aiss_product_type_page_sale_custom_phone', 'Перелік контактних телефонів виключно для цієї сторінки')
						->add_fields(array(
							Field::make_text('custom_phone', 'Hомер телефону')
						)),
					Field::make_complex('aiss_product_type_page_sale_custom_email', 'Перелік пошт виключно для цієї сторінки')
					     ->add_fields(array(
						     Field::make_text('custom_email', 'Пошта')
					     )),
					Field::make_image('aiss_product_type_page_sale_big_image', 'Великий банер')
					     ->set_type('image')
					     ->set_value_type('url'),
					Field::make_image('aiss_product_type_page_sale_small_image_custom', 'Маленький банер кастомний')
					     ->set_type('image')
					     ->set_value_type('url')
				));


	}