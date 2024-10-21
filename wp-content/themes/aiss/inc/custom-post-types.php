<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Register a products post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function products_post_type() {

		$labels = array(
			'name'               => _x( 'Продукція', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Продукція', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Продукція', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Продукція', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати нову позицію', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати нову позицію', 'aiss' ),
			'new_item'           => __( 'Нова позиція', 'aiss' ),
			'edit_item'          => __( 'Редагувати позицію', 'aiss' ),
			'view_item'          => __( 'Дивитись позицію', 'aiss' ),
			'all_items'          => __( 'Всі позиції', 'aiss' ),
			'search_items'       => __( 'Шукати позицію', 'aiss' ),
			'parent_item_colon'  => __( 'Батько позиції:', 'aiss' ),
			'not_found'          => __( 'Позицію не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику позицій не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['products_tax', 'product_page_tax'],
			'description'        => __( 'Description.', 'products' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'products' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-products',
			'supports'           => array( 'title', 'thumbnail', 'excerpt')
		);

		register_post_type( 'products', $args );
	}

	add_action( 'init', 'products_post_type' );

	add_action( 'init', 'products_taxonomy' );
	function products_taxonomy(){

		register_taxonomy('products_tax', 'products', array(
			'label'                 => 'products_tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Тип продукту',
				'singular_name'     => 'Тип продукту',
				'search_items'      => 'Пошук типів продукту',
				'all_items'         => 'Всі типи продукту',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати тип продукту',
				'update_item'       => 'Оновити тип продукту',
				'add_new_item'      => 'Додати тип продукту',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категорії меню',
			),
			'description'           => 'products_tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'products'),
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	add_action( 'init', 'product_page_taxonomy' );
	function product_page_taxonomy(){

		register_taxonomy('product_page_tax', 'products', array(
			'label'                 => 'product_page_tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Головна сторінка категорії',
				'singular_name'     => 'Головна сторінка категорії',
				'search_items'      => 'Пошук головної сторінки категорії',
				'all_items'         => 'Всі головноі сторінки категорій',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати головну сторінку категорії',
				'update_item'       => 'Оновити головну сторінку категорії',
				'add_new_item'      => 'Додати головну сторінку категорії',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категорії меню',
			),
			'description'           => 'product_page_tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'products'),
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	/**
	 * Register a service post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function service_post_type() {

		$labels = array(
			'name'               => _x( 'Сервіси', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Сервіси', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Сервіси', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Сервіси', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати новий сервіс', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати новий сервіс', 'aiss' ),
			'new_item'           => __( 'Новий сервіс', 'aiss' ),
			'edit_item'          => __( 'Редагувати сервіс', 'aiss' ),
			'view_item'          => __( 'Дивитись сервіс', 'aiss' ),
			'all_items'          => __( 'Всі сервіси', 'aiss' ),
			'search_items'       => __( 'Шукати сервіс', 'aiss' ),
			'parent_item_colon'  => __( 'Батько сервісу:', 'aiss' ),
			'not_found'          => __( 'Сервіс не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику сервісів не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['service_tax'],
			'description'        => __( 'Description.', 'service' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'service' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 6,
			'menu_icon'          => 'dashicons-admin-generic',
			'supports'           => array( 'title', 'thumbnail')
		);

		register_post_type( 'service', $args );
	}

	add_action( 'init', 'service_post_type' );

	add_action( 'init', 'service_taxonomy' );
	function service_taxonomy(){

		register_taxonomy('service_tax', 'service', array(
			'label'                 => 'service_tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Тип сервісу',
				'singular_name'     => 'Тип сервісу',
				'search_items'      => 'Пошук типів сервісу',
				'all_items'         => 'Всі типи сервісу',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати тип сервісу',
				'update_item'       => 'Оновити тип сервісу',
				'add_new_item'      => 'Додати тип сервісу',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категорії меню',
			),
			'description'           => 'service_tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'service'),
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}


	/**
	 * Register a cases post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function case_post_type() {

		$labels = array(
			'name'               => _x( 'Приклади робіт', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Приклади робіт', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Приклади робіт', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Приклади робіт', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати нову роботу', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати нову роботу', 'aiss' ),
			'new_item'           => __( 'Нова робота', 'aiss' ),
			'edit_item'          => __( 'Редагувати роботу', 'aiss' ),
			'view_item'          => __( 'Дивитись роботу', 'aiss' ),
			'all_items'          => __( 'Всі роботи', 'aiss' ),
			'search_items'       => __( 'Шукати сроботу', 'aiss' ),
			'parent_item_colon'  => __( 'Батько роботи:', 'aiss' ),
			'not_found'          => __( 'Роботу не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику робіт не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'case' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'case' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-portfolio',
			'supports'           => array( 'title', 'thumbnail', 'excerpt')
		);

		register_post_type( 'case', $args );
	}

	add_action( 'init', 'case_post_type' );

	/**
	 * Register a blog post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function blog_post_type() {

		$labels = array(
			'name'               => _x( 'Корисно знати', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Корисно знати', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Корисно знати', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Корисно знати', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати нову статтю', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати нову статтю', 'aiss' ),
			'new_item'           => __( 'Нова стаття', 'aiss' ),
			'edit_item'          => __( 'Редагувати статтю', 'aiss' ),
			'view_item'          => __( 'Дивитись статтю', 'aiss' ),
			'all_items'          => __( 'Всі статті', 'aiss' ),
			'search_items'       => __( 'Шукати статтю', 'aiss' ),
			'parent_item_colon'  => __( 'Батько статті:', 'aiss' ),
			'not_found'          => __( 'Статтю не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику статей не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'blog' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'blog' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 8,
			'menu_icon'          => 'dashicons-welcome-write-blog',
			'supports'           => array( 'title', 'thumbnail', 'excerpt')
		);

		register_post_type( 'blog', $args );
	}

	add_action( 'init', 'blog_post_type' );

	/**
	 * Register a documentation post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function documentation_post_type() {

		$labels = array(
			'name'               => _x( 'Документація', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Документація', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Документація', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Документація', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати новий документ', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати новий документ', 'aiss' ),
			'new_item'           => __( 'Новий документ', 'aiss' ),
			'edit_item'          => __( 'Редагувати документ', 'aiss' ),
			'view_item'          => __( 'Дивитись документ', 'aiss' ),
			'all_items'          => __( 'Всі документи', 'aiss' ),
			'search_items'       => __( 'Шукати документ', 'aiss' ),
			'parent_item_colon'  => __( 'Батько документу:', 'aiss' ),
			'not_found'          => __( 'Документ не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику документів не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'documentation' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'documentation' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 9,
			'menu_icon'          => 'dashicons-media-document',
			'supports'           => array( 'title', 'thumbnail')
		);

		register_post_type( 'documentation', $args );
	}

	add_action( 'init', 'documentation_post_type' );

	/**
	 * Register a boilers post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since aiss1.0
	 */

	function boilers_post_type() {

		$labels = array(
			'name'               => _x( 'Котли', 'post type general name', 'aiss' ),
			'singular_name'      => _x( 'Котли', 'post type singular name', 'aiss' ),
			'menu_name'          => _x( 'Котли', 'admin menu', 'aiss' ),
			'name_admin_bar'     => _x( 'Котли', 'add new on admin bar', 'aiss' ),
			'add_new'            => _x( 'Додати новий котел', 'actions', 'aiss' ),
			'add_new_item'       => __( 'Додати новий котел', 'aiss' ),
			'new_item'           => __( 'Новий котел', 'aiss' ),
			'edit_item'          => __( 'Редагувати котел', 'aiss' ),
			'view_item'          => __( 'Дивитись котел', 'aiss' ),
			'all_items'          => __( 'Всі котели', 'aiss' ),
			'search_items'       => __( 'Шукати котел', 'aiss' ),
			'parent_item_colon'  => __( 'Батько котела:', 'aiss' ),
			'not_found'          => __( 'Котел не знайдено', 'aiss' ),
			'not_found_in_trash' => __( 'У кошику котелів не знайдено', 'aiss' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['boilers_tax'],
			'description'        => __( 'Description.', 'boilers' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'boilers' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 10,
			'menu_icon'          => 'dashicons-category',
			'supports'           => array( 'title', 'thumbnail', 'excerpt')
		);

		register_post_type( 'boilers', $args );
	}

	add_action( 'init', 'boilers_post_type' );

	add_action( 'init', 'boilers_taxonomy' );
	function boilers_taxonomy(){

		register_taxonomy('boilers_tax', 'boilers', array(
			'label'                 => 'boilers_tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Тип котла',
				'singular_name'     => 'Тип котла',
				'search_items'      => 'Пошук типів котлів',
				'all_items'         => 'Всі типи котлів',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати тип котла',
				'update_item'       => 'Оновити тип котла',
				'add_new_item'      => 'Додати тип котла',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категорії меню',
			),
			'description'           => 'boilers_tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'boilers'),
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}



