<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон головної сторінки
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>
<?php
	$homeMainScreenTitle = carbon_get_post_meta(get_the_ID(),'aiss_main_page_main_screen_title');
	$homeMainScreenRedText = carbon_get_post_meta(get_the_ID(),'aiss_main_page_main_screen_red_text');
	$homeMainScreenCallText = carbon_get_post_meta(get_the_ID(),'aiss_main_page_main_screen_call_text');
	$homeMainScreenImage = carbon_get_post_meta(get_the_ID(),'aiss_main_page_main_screen_image');
?>
	<section id="tz-position1-wrapper" class="hidden-md home-main-screen" style="background-image: url(<?php echo $homeMainScreenImage;?>)">
		<div class="container">
			<div class="row" id="position1">
				<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padding">
					<div class="tz-module module" id="Mod351">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom" >
									<div class="desktop head desktop-head-main">
										<div class="row">
											<div class="head__wrap">
												<p class="h1"><?php echo $homeMainScreenTitle;?></p>
											</div>
										</div>
									</div>
									<div class="mobile mobile-head-main" style="display: none; background-image: url(<?php echo $homeMainScreenImage;?>);">
										<div class="inner">
											<div class="head__wrap">
												<p class="h2"><?php echo $homeMainScreenTitle;?></p>
												<p class="h3"><?php echo $homeMainScreenRedText;?></p>
												<p class="h4"><?php echo $homeMainScreenCallText;?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tz-module module" id="Mod337">
						<div class="module-inner">
							<div class="module-ct">

								<div class="custom">
									<div class="desktop form desktop-head-main">
										<div class="dark-bg">
											<div class="dark-bg__wrap">
												<div class="container">
													<div class="row">
														<div class="custom-inner" >
															<p class="h2"><?php echo $homeMainScreenRedText;?></p>
														</div>
														<p class="h3"><?php echo $homeMainScreenCallText;?></p>
													</div>

													<div class="row 1">
                            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                              <input type="hidden" name="action" value="form_integration">
                              <input type="hidden" name="page-name" value="<?php the_title();?>">
															<div class="row row__inputs">
																<div class="cell-3 center"><input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__"></div>
																<div class="cell-3 center"><input style="" name="name" size="40" type="text" class="form-control" placeholder="ВАШЕ ІМ'Я"></div>
																<div class="cell-3 center"><input style="" name="city" size="40" type="text" class="form-control" placeholder="НАСЕЛЕНИЙ ПУНКТ"></div>
																<div class="cell-3 center">
																	<input name="submit" type="submit" value="Хочу розрахунок" class="btn btn-medium main-bg submit" >
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mobile mobile-form" >
										<div class="container">
											<div class="row">
                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                          <input type="hidden" name="action" value="form_integration">
                          <input type="hidden" name="page-name" value="<?php the_title();?>">
													<div class="cell-12 center">
                            <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__" />
                          </div>
													<div class="cell-12 center" style="margin-top: 5px;">
                            <input style="" name="name" size="40" type="text" class="form-control" placeholder="ВАШЕ ІМ'Я">
                          </div>
													<div class="cell-12 center" style="margin-top: 5px;">
                            <input style="" name="city" size="40" type="text" class="form-control" placeholder="НАСЕЛЕНИЙ ПУНКТ">
                          </div>
													<div class="cell-12 center" style="margin-top: 5px;">
                            <input name="submit" type="submit" value="Хочу расчет" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;" />
                          </div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  <?php

    $productCat = get_categories( array(
    'taxonomy'     => 'products_tax',
    'type'         => 'products',
    'child_of'     => false,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => 0,
    'hierarchical' => false,
    'number'       => 0,
    'pad_counts'   => false,
    ) );


    $boilersCat = get_categories( array(
      'taxonomy'     => 'boilers_tax',
      'type'         => 'boilers',
      'child_of'     => false,
      'parent'       => '',
      'orderby'      => 'name',
      'order'        => 'ASC',
      'hide_empty'   => 0,
      'hierarchical' => false,
      'number'       => 0,
      'pad_counts'   => false,
    ) );

    $serviceCat = get_categories( array(
      'taxonomy'     => 'service_tax',
      'type'         => 'service',
      'child_of'     => false,
      'parent'       => '',
      'orderby'      => 'name',
      'order'        => 'ASC',
      'hide_empty'   => 0,
      'hierarchical' => false,
      'number'       => 0,
      'pad_counts'   => false,
    ) );

    if ( $productCat || $boilersCat || $serviceCat):?>
      <section id="tz-position9-wrapper" class="gry-bg ">
        <div class="container">
          <div class="row" id="position9">
            <div id="tz-position-9" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
              <div class="tz-module module " id="Mod334">
                <div class="module-inner">
                  <div class="module-ct">

                    <div class="custom"  >
                      <div class="" style="padding: 40px 15px 0;">
                        <p class="block-head" style="text-transform: uppercase;">Продукція</p>
                      </div>
                      <div class="row product-list-wrapper">
                        <?php foreach( $productCat as $catItem ):?>
                          <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                            <div class="product-block">
                              <div class="img-holders">

                                  <?php
                                    $pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_product_post_fields_category_link');
                                  ?>
                                <a href="<?php echo esc_url( $pageLink );?>">
                                  <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_product_post_fields_category_image');?>">
                                  <div class="main-bg-holder"></div>
                                </a>
                                <div class="main-name-holder">
                                  <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                </div>
                              </div>
                               <?php
                               	$productArgs = array(
	                                'tax_query' => array(
		                                array(
			                                'taxonomy' => 'products_tax',
			                                'field' => 'id',
			                                'lang' => false,
			                                'suppress_filters' => false,
			                                'terms' => $catItem->term_id
		                                )
	                                ),
                               		'posts_per_page' => -1,
                               		'orderby' 	 => 'date',
                               		'post_type'  => 'products',
                               		'post_status'    => 'publish'
                               	);

                               	$productList = new WP_Query( $productArgs );

                               		  if ( $productList->have_posts() ) :?>
                                      <div class="main-item-bug-768">
	                                      <?php while ( $productList->have_posts() ) : $productList->the_post(); ?>
                                          <div class="main-item-bug">
                                            <?php
                                                $customLink = carbon_get_post_meta( get_the_ID(), 'aiss_product_post_fields_custom_url');
                                                if( !empty( $customLink ) ):?>
                                                  <a href="<?php echo $customLink;?>" class="project-names">
                                                    <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                  </a>
                                            <?php else:?>
                                                  <a href="<?php the_permalink();?>" class="project-names">
                                                    <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                  </a>
                                            <?php endif;?>

                                          </div>
	                                      <?php endwhile;?>
                                      </div>
                               	<?php endif; ?>
                               <?php wp_reset_postdata(); ?>
                            </div>
                          </div>
                        <?php endforeach;?>

	                      <?php foreach( $serviceCat as $catItem ):?>
                            <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                              <div class="product-block">
                                <div class="img-holders">

			                        <?php
				                        $pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_service_post_fields_category_link');
			                        ?>
                                  <a href="<?php echo esc_url( $pageLink );?>">
                                    <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_service_post_fields_category_image');?>">
                                    <div class="main-bg-holder"></div>
                                  </a>
                                  <div class="main-name-holder">
                                    <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                  </div>
                                </div>
			                      <?php
				                      $serviceArgs = array(
					                      'tax_query' => array(
						                      array(
							                      'taxonomy' => 'service_tax',
							                      'field' => 'id',
							                      'lang' => false,
							                      'suppress_filters' => false,
							                      'terms' => $catItem->term_id
						                      )
					                      ),
					                      'posts_per_page' => -1,
					                      'orderby' 	 => 'date',
					                      'post_type'  => 'service',
					                      'post_status'    => 'publish'
				                      );

				                      $serviceList = new WP_Query( $serviceArgs );

				                      if ( $serviceList->have_posts() ) :?>
                                        <div class="main-item-bug-768">
					                        <?php while ( $serviceList->have_posts() ) : $serviceList->the_post(); ?>
                                              <div class="main-item-bug">
                                                <a href="<?php the_permalink();?>" class="project-names">
                                                  <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                </a>
                                              </div>
					                        <?php endwhile;?>
                                        </div>
				                      <?php endif; ?>
			                      <?php wp_reset_postdata(); ?>
                              </div>
                            </div>
	                      <?php endforeach;?>

	                      <?php foreach( $boilersCat as $catItem ):?>
                            <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                              <div class="product-block">
                                <div class="img-holders">

			                        <?php
				                        $pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_boilers_post_fields_category_link');
			                        ?>
                                  <a href="<?php echo esc_url( $pageLink );?>">
                                    <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_boilers_post_fields_category_image');?>">
                                    <div class="main-bg-holder"></div>
                                  </a>
                                  <div class="main-name-holder">
                                    <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                  </div>
                                </div>
			                      <?php
				                      $boilersArgs = array(
					                      'tax_query' => array(
						                      array(
							                      'taxonomy' => 'boilers_tax',
							                      'field' => 'id',
							                      'lang' => false,
							                      'suppress_filters' => false,
							                      'terms' => $catItem->term_id
						                      )
					                      ),
					                      'posts_per_page' => -1,
					                      'orderby' 	 => 'date',
					                      'post_type'  => 'boilers',
					                      'post_status'    => 'publish'
				                      );

				                      $boilersList = new WP_Query( $boilersArgs );

				                      if ( $boilersList->have_posts() ) :?>
                                        <div class="main-item-bug-768">
					                        <?php while ( $boilersList->have_posts() ) : $boilersList->the_post(); ?>
                                              <div class="main-item-bug">
                                                <a href="<?php the_permalink();?>" class="project-names">
                                                  <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                </a>
                                              </div>
					                        <?php endwhile;?>
                                        </div>
				                      <?php endif; ?>
			                      <?php wp_reset_postdata(); ?>
                              </div>
                            </div>
	                      <?php endforeach;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    <?php endif;?>
<?php
    $automaticGatesTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_automatic_gates_title');
	  $automaticGatesImage = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_automatic_gates_image');
	  $automaticGatesText = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_automatic_gates_text');

	  if ( $automaticGatesImage && $automaticGatesText && $automaticGatesText ):
?>
  <section id="tz-position12-wrapper" class="home-automatic-gates">
    <div class="container">
      <div class="row" id="position12">
        <div id="tz-block-6" class="col-lg-12 col-md-5 col-sm-12 col-xs-12 ">
          <div class="tz-module module" id="Mod191">
            <div class="module-inner">
              <div class="module-ct">
                <div class="custom"  >
                  <h2 class="block-head" style="text-transform: uppercase;"><?php echo $automaticGatesTitle;?></h2>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="">
                    <div class="fx" data-animate="flipInX">
                      <div class="center">
                        <img src="<?php echo $automaticGatesImage;?>" alt="Купити автоматичні ворота в Запоріжжі від компанії Аіс Груп. Вигідна ціна, постійні акції та знижки. Встановлення та доставка воріт у Запоріжжі. Дізнатись вартість автоматичних воріт для гаража в Запоріжжі за 5 хвилин" title="Шоу-рум производителя автоматических ворот Аисс Групп" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding: 0px;">
                    <?php echo wpautop( $automaticGatesText );?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

    <?php
        $gatesPriceTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_price_title');
	      $gatesPriceSubtitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_price_subtitle');
	      $gatesPriceText= carbon_get_post_meta(get_the_ID(), 'aiss_main_page_price_text');
	      $gatesPriceTypeTable = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_price_type_table');
	      $gatesPriceProductTable = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_price_product_table');

        if( $gatesPriceProductTable && $gatesPriceSubtitle && $gatesPriceText && $gatesPriceTitle && $gatesPriceTypeTable):?>

        <!-- -->
          <section id="tz-position10-wrapper" class="home-gates-price">
            <div class="container">
              <div class="row" id="position10">
                <div id="tz-block-3" class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod184">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <h2 class="block-head"><?php echo $gatesPriceTitle;?></h2>
                          <div class="text"><?php echo wpautop($gatesPriceText);?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="tz-block-4" class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod185">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <h2 class="block-head"><?php echo $gatesPriceSubtitle;?></h2>
                          <table class="table-style2 custom-table">
                            <thead>
                            <tr>
                              <th class="main-bg" style="padding: 10px;">Типи воріт</th>
                              <th class="main-bg" style="padding: 10px;">Вартість в місяць</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach( $gatesPriceTypeTable as $item):?>
                                <tr>
                                  <td style="padding: 10px;"><?php echo $item['type_name'];?></td>
                                  <td style="padding: 10px; text-align: center;"><?php echo $item['type_price'];?></td>
                                </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table>
                          <hr>
                          <table class="table-style2 custom-table">
                            <thead>
                            <tr>
                              <th class="main-bg" style="padding: 10px;">Продукція</th>
                              <th class="main-bg" style="padding: 10px;">Вартість в місяць</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach( $gatesPriceProductTable as $item ):?>
                                <tr>
                                  <td style="padding: 10px;"><?php echo $item['product_name'];?></td>
                                  <td style="padding: 10px; text-align: center;"><?php echo $item['product_price'];?></td>
                                </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <?php endif;?>

    <?php
        $homeCallTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_call_title');
	      $homeCallText = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_call_text');

        if( $homeCallTitle && $homeCallText):?>
        <!-- -->
          <section id="tz-position11-wrapper" class="black-overlay witTxt ">
            <div class="container">
              <div class="row" id="position11">
                <div id="tz-position-11" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
                  <div class="tz-module module " id="Mod188">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom">
                          <div class="desktop-main-form">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="h2"><span class="main-color"><?php echo $homeCallTitle;?></span><?php echo $homeCallText;?></p>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                  <input type="hidden" name="action" value="form_integration">
                                  <input type="hidden" name="page-name" value="<?php the_title();?>">
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center item">
                                    <input name="userphone" size="40" type="tel" id="userphone" class="form-control" placeholder="+38(0__)___-__-__" />
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center item">
                                    <input style="" name="name" size="40" type="text" class="form-control" placeholder="ВАШЕ ІМ'Я">
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center item">
                                    <input style="" name="city" size="40" type="text" class="form-control" placeholder="НАСЕЛЕНИЙ ПУНКТ">
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center item">
                                    <input name="submit" type="submit" value="Хочу розрахунок" class="btn btn-medium main-bg" />
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <?php endif;?>
<?php
	$caseImageArgs = array(
		'posts_per_page' => -1,
		'orderby' 	 => 'date',
		'post_type'  => 'case',
		'post_status'    => 'publish',
		'meta_query' => array(
			array(
				'key' => 'aiss_case_post_content_type',
				'value' => 'image',
			),
		),
	);

	$caseImageList = new WP_Query( $caseImageArgs );

	if ( $caseImageList->have_posts() ) :?>
    <section id="tz-position5-wrapper" class="desktop home-photo-case-wrapper">
      <div class="container">
        <div class="row" id="position5">
          <div id="tz-position-5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="tz-module module " id="Mod414">
              <div class="module-inner">
                <div class="module-ct">
                  <div class="custom">
                    <h2 class="block-head">фото автоматичних воріт</h2>
                    <div class="popup-gallery">
	                  <?php while ( $caseImageList->have_posts() ) : $caseImageList->the_post(); ?>
	                    <?php
                        $photoLink = carbon_get_post_meta(get_the_ID(), 'aiss_case_post_content_image');
                        $photoType = carbon_get_post_meta(get_the_ID(), 'aiss_case_post_content_gait_type');
	                    ?>
                      <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <a href="<?php echo $photoLink ;?>" title="<?php the_title();?>" data-fancybox="photo-gallery">
                          <img src="<?php echo $photoLink ;?>" alt="<?php echo $photoType;?>" title="<?php the_title();?>">
                          <span class="bg_item"></span>
                          <span class="h2"><?php the_title();?></span>
                          <span class="span"><?php echo $photoType;?></span>
                        </a>
                      </div>
                    <?php endwhile;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php wp_reset_postdata(); ?>

    <?php
        $howOrderTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_how_order_title');
	      $howOrderText = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_how_order_text');
	      $howOrderEditingTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_how_order_editing_title');
	      $howOrderEditingText = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_how_order_editing_text');

        if( $howOrderTitle && $howOrderText && $howOrderEditingTitle && $howOrderEditingText ):?>
        <!-- -->
          <section id="tz----------1-wrapper" class="how-order">
            <div class="container">
              <div class="row" id="---------1">
                <div id="tz-block-1" class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod348">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <h2 class="block-head"><?php echo $howOrderTitle;?></h2>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                            <div class="text"><?php echo wpautop($howOrderText);?></div>
                          </div>

                          <h2 class="block-head"><?php echo $howOrderEditingTitle;?></h2>
                          <div class="text"><?php echo wpautop($howOrderEditingText);?></div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="tz-block-2" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod347">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <div class="desktop-main-form-small">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                                <p class="h2"><span class="main-color"><?php echo $homeCallTitle;?></span><?php echo $homeCallText;?></p>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                  <input type="hidden" name="action" value="form_integration">
                                  <input type="hidden" name="page-name" value="<?php the_title();?>">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                    <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
                                  </div>

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                    <input style="" name="name" size="40" type="text" class="form-control" placeholder="ВАШЕ ІМ'Я">
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                    <input style="" name="city" size="40" type="text" class="form-control" placeholder="НАСЕЛЕНИЙ ПУНКТ">
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                    <input name="submit" type="submit" value="Хочу розрахунок" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;">
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <?php endif;?>

    <?php
        $ourVideoTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_video_title');
	      $ourVideoList = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_video_list');
	      $ourVideoSaleTitle = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_video_sale_title');
	      $ourVideoSaleImage = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_video_sale_banner');
	      $ourVideoSaleBtnText = carbon_get_post_meta(get_the_ID(), 'aiss_main_page_video_sale_btn_text');

        if( $ourVideoList && $ourVideoSaleTitle && $ourVideoSaleTitle ):?>
        <!-- -->
          <section id="tz-video-wrapper" class="home-our-video">
            <div class="container">
              <div class="row" id="video">
                <div id="tz-position-10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
                  <div class="tz-module module " id="Mod340">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom">
                          <div class="desktop-video">
                            <div class="row">
                              <div class="col-md-12">
                                <h2 class="block-head"><?php echo $ourVideoTitle;?></h2>
                              </div>

                              <div class="col-md-12">
                                <div class="row row-video">
                                  <?php foreach( $ourVideoList as $item ):?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center item">
                                      <div class="videoWrapper" data-video="<?php echo $item['video_id'];?>">
                                        <div class="youtube" id="<?php echo $item['video_id'];?>"></div>
                                      </div>
                                      <span class="h5"><?php echo $item['video_name'];?></span>
                                    </div>
                                  <?php endforeach;?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tz-module module mine-tania " id="Mod345">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom mine-tania">
                          <div class="desktop">
                            <div class="row" style="color: white; margin: 0px 0px 0px 0px; padding: 30px; background: url(<?php echo $ourVideoSaleImage;?>) 100% 100% no-repeat; background-size: cover; height: 460px;">
                              <div class="col-md-7"></div>
                              <div class="col-md-4" style="padding: 20px; background: white; border: 1px solid #d2d2d2;">
                                <p style="text-align: center; margin: 5px 0px; color: black; font-size: 20px; font-weight: bold;"><?php echo $ourVideoSaleTitle;?></p>
                                <p style="text-align: center; margin: 5px 0px; font-size: 18px; color: #333333;"></p>
                                <hr style="border: 2px solid red; width: 240px; margin: 0px auto;" />
                                <?php
                                    $contactsList = carbon_get_theme_option('aiss_option_contact_city');

                                    if ($contactsList):?>
                                        <?php foreach( $contactsList as $item ):?>

                                        <div class="row" style="margin-top: 20px; margin-left: 0px; margin-right: 0px;">
                                          <div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo THEME_PATH;?>/assets/img/tel.png" /></div>
                                          <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 0px;">
                                            <p class="form">(067) 214-00-44</p>
                                            <p class="form">(067) 217-00-44</p>
                                          </div>
                                        </div>
                                        <div class="row" style="margin-top: 5px; margin-left: 0px; margin-right: 0px;">
                                          <div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo THEME_PATH;?>/assets/img/viber1.png" /></div>
                                          <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 0px;">
                                            <p class="form">(050) 417-00-44</p>
                                            <p class="form">(050) 366-00-44</p>
                                          </div>
                                        </div>
                                            <?php if( $item['email_list'] ):?>
                                              <div class="row" style="margin-top: 5px; margin-left: 0px; margin-right: 0px;">
                                                <div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo THEME_PATH;?>/assets/img/mail.png" /></div>
                                                <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 0px;">
                                                  <?php foreach( $item['email_list'] as $emailItem ):?>
                                                    <p class="form">
                                                      <span id="cloak51732">
                                                        <a href="mailto:<?php echo antispambot($emailItem['email'], 1);?>">
                                                          <?php echo antispambot($emailItem['email'], 0);?>
                                                        </a>
                                                      </span>
                                                    </p>
                                                  <?php endforeach;?>
                                                </div>
                                              </div>
                                            <?php endif;?>

	                                    <?php endforeach;?>
                                <?php endif;?>
                                <p style="margin-top: 10px; text-align: center;">
                                  <a href="#" data-toggle="modal" data-target="#formModal" class="btn btn-medium main-bg"><?php echo $ourVideoSaleBtnText;?></a>
                                </p>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <?php endif;?>
<?php get_footer();
