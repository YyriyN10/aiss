<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки категорії продукту
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>

	<?php

		$productCategory = get_the_terms( get_the_ID() , 'product_page_tax');

		$productCategoryId = 0;

		if( is_array( $productCategory ) ){
			foreach( $productCategory as $cur_term ){
				$productCategoryId = $cur_term->term_id;
			}
		}

	    $productMainScreenImage = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_main_screen_image');
		  $productMainScreenRedText = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_main_screen_red_text');
		  $productMainScreenCallText = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_main_screen_call_text');

	    if( $productMainScreenCallText && $productMainScreenRedText && $productMainScreenImage):?>
	    <!-- -->
		    <section id="tz-position-1-wrapper" class="position1 main-screen">
			    <div class="container-fluid">
				    <div class="row" id="position-1">
					    <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod455">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <div class="desktop desktop-head-main" style="background: url(<?php echo $productMainScreenImage;?>) 100% 100% no-repeat; ">
											    <div class="row">
												    <div class="h1-wrapper" >
													    <p class="h1"><?php the_title();?></p>
												    </div>
												    <div class="h2-wrapper">
													    <p class="h2"><?php echo $productMainScreenRedText;?></p>
												    </div>
												    <p class="h3"><?php echo $productMainScreenCallText;?></p>
											    </div>
										    </div>
										    <div class="mobile mobile-head-main" style="background: url(<?php echo $productMainScreenImage;?>) 100% 100% no-repeat; ">
											    <div class="row">
												    <div class="col-md-12" >
													    <p class="h2"><?php the_title();?></p>
													    <p class="h3"><span><?php echo $productMainScreenRedText;?></span></p>
													    <p class="h4"><?php echo $productMainScreenCallText;?></p>
												    </div>
											    </div>
										    </div>
									    </div>
								    </div>
							    </div>
						    </div>
						    <?php
                  $productArgs = array(
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'product_page_tax',
                        'field' => 'id',
                        'lang' => false,
                        'suppress_filters' => false,
                        'terms' => $productCategoryId

                      )
                    ),
                    'post_type' => 'products',
                    'orderby' 	 => 'date',
                    'suppress_filters' => false,
                    'lang' => false,
                    'posts_per_page' => -1
                  );

                  $productList = new WP_Query( $productArgs );

						    if ( $productList->have_posts() ) :?>
						    <div class="tz-module module " id="Mod453">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <div class="row main-rov-prodact">
											    <?php	while ( $productList->have_posts() ) : $productList->the_post(); ?>
													<div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
													    <div class="product-block">
														    <div class="img-holders">
															    <a href="<?php the_permalink();?>">
																    <img src="<?php the_post_thumbnail_url();?>">
																    <div class="main-bg-holder">

																    </div>
															    </a>
															    <div class="main-name-holder">
																    <a href="<?php the_permalink();?>" class="project-namess" style="color: #fff"><?php the_title();?></a>
															    </div>
														    </div>
													    </div>
													</div>
											    <?php endwhile;?>
											</div>
									    </div>
								    </div>
							    </div>
						    </div>
						    <?php endif; ?>
						    <?php wp_reset_postdata(); ?>
						</div>
				    </div>
				</div>
			</section>
	<?php endif;?>

	<?php get_template_part('template-parts/breadcrumbs');?>

	<?php
	    $CatProductContent = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_content_list');

	    if( $CatProductContent ):?>
	    <!-- -->

		    <section id="tz-main-body-wrapper" class="category-main-product-content ">
			    <div class="container">
				    <div class="row" id="main-body">
					    <div id="tz-main-content" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod457">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <?php foreach( $CatProductContent as $item):?>
											    <h2 class="block-head" style="text-transform: uppercase;"><?php echo $item['title'];?></h2>
											    <?php if( $item['text_part_1'] ):?>
												    <div class="text"><?php echo wpautop($item['text_part_1']);?></div>
											    <?php endif;?>
											    <?php if( $item['media_type_part_1'] == 'pic_1' ):?>
												    <?php if( $item['media_type_part_1_image'] ):?>
													    <div class="desktop-solo-img">
														    <div class="row">
															    <div class="center item">
																    <a href="#fca-widget">
																	    <img
																		    src="<?php echo wp_get_attachment_image_src($item['media_type_part_1_image'], 'full')[0];?>"
																		    alt="<?php echo get_post_meta($item['media_type_part_1_image'], '_wp_attachment_image_alt', TRUE);?>"
																	    >
																    </a>
															    </div>
														    </div>
													    </div>
												    <?php endif;?>
												  <?php elseif ( $item['media_type_part_1'] == 'pic_2' ):?>
												    <div class="desktop-duo-img">
													    <div class="row">
														    <?php if( $item['media_type_part_1_image1'] ):?>
															    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
																    <img
																	    src="<?php echo wp_get_attachment_image_src($item['media_type_part_1_image1'], 'full')[0];?>"
																	    alt="<?php echo get_post_meta($item['media_type_part_1_image1'], '_wp_attachment_image_alt', TRUE);?>"
																    >
															    </div>
														    <?php endif;?>
														    <?php if( $item['media_type_part_1_image2'] ):?>
															    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
																    <img
																	    src="<?php echo wp_get_attachment_image_src($item['media_type_part_1_image2'], 'full')[0];?>"
																	    alt="<?php echo get_post_meta($item['media_type_part_1_image2'], '_wp_attachment_image_alt', TRUE);?>"
																    >
															    </div>
														    <?php endif;?>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_1'] == 'video' ):?>
												    <div class="video-max-Wrapper">
													    <div class="videoWrapper" data-video="<?php echo $item['media_type_part_1_video'];?>">
                                <div class="youtube" id="<?php echo $item['media_type_part_1_video'];?>"></div>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_1'] == 'form' ):?>
												    <div class="form-row" style="position: relative;">
													    <img

													       src="<?php echo wp_get_attachment_image_src($item['media_type_part_1_form_image'], 'full')[0];?>"
													       alt="<?php echo get_post_meta($item['media_type_part_1_form_image'], '_wp_attachment_image_alt', TRUE);?>"
													    >
													    <div class="col-md-12 form-popap-main-open" id="gomodal">

													    </div>
													    <div class="popap-bg modal_close" style="display: none;"></div>
													    <div class="col-md-12 form-popap-main" style="">
														    <span class="modal_close" style="cursor: pointer;text-align: right;margin: 10px;">X</span>
														    <form action="/zakaz_main.php" method="post">
															    <div class="col-md-12 zagolovoc" style="">
																    <span style=""><?php echo $item['media_type_part_1_form_title_1'];?></span>
																    <?php echo $item['media_type_part_1_form_title_2'];?>
															    </div>
															    <div class="row labeform" style="margin-bottom: 30px;">
																    <div class="center" style="padding: 0px 30px 0;">
																	    <input style="" name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
																    </div>
																    <div class="center" style="">
																	    <input style="" name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
																    </div>
																    <div class="center" style="">
																	    <input style="" name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
																    </div>
																    <div class="batton-form" style="">
																	    <input name="submit" type="submit" value="<?php echo $item['media_type_part_1_form_btn'];?>" class="btn btn-medium main-bg submit" style="">
																    </div>
															    </div>
														    </form>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_1'] == 'gallery' ):?>
												    <?php if( $item['media_type_part_1_gallery'] ):?>
													    <?php foreach( $item['media_type_part_1_gallery'] as $galleryItem ):?>
														    <div class="popup-gallery popup-gallery-2">
															    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
																    <a href="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>" data-fancybox="product-media-gallery-1" >
																	    <img
																	       src="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>"
																	       alt="<?php echo get_post_meta($galleryItem['image'], '_wp_attachment_image_alt', TRUE);?>"
																	    >
																	    <span class="bg_item"></span><span class="span"><?php the_title();?></span>
																    </a>
															    </div>
														    </div>
													    <?php endforeach;?>
												    <?php endif;?>

											    <?php endif;?>
											    <?php if( $item['text_part_2'] ):?>
												    <div class="text"><?php echo wpautop($item['text_part_2']);?></div>
											    <?php endif;?>
											    <?php if( $item['media_type_part_2'] == 'pic_1' ):?>
												    <?php if( $item['media_type_part_2_image'] ):?>
													    <div class="desktop-solo-img">
														    <div class="row">
															    <div class="center item">
																    <a href="#fca-widget">
																	    <img
																		    src="<?php echo wp_get_attachment_image_src($item['media_type_part_2_image'], 'full')[0];?>"
																		    alt="<?php echo get_post_meta($item['media_type_part_2_image'], '_wp_attachment_image_alt', TRUE);?>"
																	    >
																    </a>
															    </div>
														    </div>
													    </div>
												    <?php endif;?>
											    <?php elseif ( $item['media_type_part_2'] == 'pic_2' ):?>
												    <div class="desktop-duo-img">
													    <div class="row">
														    <?php if( $item['media_type_part_2_image1'] ):?>
															    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
																    <img
																	    src="<?php echo wp_get_attachment_image_src($item['media_type_part_2_image1'], 'full')[0];?>"
																	    alt="<?php echo get_post_meta($item['media_type_part_2_image1'], '_wp_attachment_image_alt', TRUE);?>"
																    >
															    </div>
														    <?php endif;?>
														    <?php if( $item['media_type_part_2_image2'] ):?>
															    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
																    <img
																	    src="<?php echo wp_get_attachment_image_src($item['media_type_part_2_image2'], 'full')[0];?>"
																	    alt="<?php echo get_post_meta($item['media_type_part_2_image2'], '_wp_attachment_image_alt', TRUE);?>"
																    >
															    </div>
														    <?php endif;?>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_2'] == 'video' ):?>
												    <div class="video-max-Wrapper">
													    <div class="videoWrapper"">
                                <div class="youtube" id="<?php echo $item['media_type_part_2_video'];?>"></div>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_2'] == 'form' ):?>
												    <div class="form-row" style="position: relative;">
													    <img

														    src="<?php echo wp_get_attachment_image_src($item['media_type_part_2_form_image'], 'full')[0];?>"
														    alt="<?php echo get_post_meta($item['media_type_part_2_form_image'], '_wp_attachment_image_alt', TRUE);?>"
													    >
													    <div class="col-md-12 form-popap-main-open" id="gomodal">

													    </div>
													    <div class="popap-bg modal_close" style="display: none;"></div>
													    <div class="col-md-12 form-popap-main" style="">
														    <span class="modal_close" style="cursor: pointer;text-align: right;margin: 10px;">X</span>
														    <form action="/zakaz_main.php" method="post">
															    <div class="col-md-12 zagolovoc" style="">
																    <span style=""><?php echo $item['media_type_part_2_form_title_1'];?></span>
																    <?php echo $item['media_type_part_2_form_title_2'];?>
															    </div>
															    <div class="row labeform" style="margin-bottom: 30px;">
																    <div class="center" style="padding: 0px 30px 0;">
																	    <input style="" name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
																    </div>
																    <div class="center" style="">
																	    <input style="" name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
																    </div>
																    <div class="center" style="">
																	    <input style="" name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
																    </div>
																    <div class="batton-form" style="">
																	    <input name="submit" type="submit" value="<?php echo $item['media_type_part_2_form_btn'];?>" class="btn btn-medium main-bg submit" style="">
																    </div>
															    </div>
														    </form>
													    </div>
												    </div>
											    <?php elseif ( $item['media_type_part_2'] == 'gallery' ):?>
												    <?php if( $item['media_type_part_2_gallery'] ):?>
													    <?php foreach( $item['media_type_part_2_gallery'] as $galleryItem ):?>
														    <div class="popup-gallery popup-gallery-2">
															    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
																    <a href="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>" data-fancybox="product-media-gallery-2">
																	    <img
																		    src="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>"
																		    alt="<?php echo get_post_meta($galleryItem['image'], '_wp_attachment_image_alt', TRUE);?>"
																	    >
																	    <span class="bg_item"></span><span class="span"><?php the_title();?></span>
																    </a>
															    </div>
														    </div>
													    <?php endforeach;?>
												    <?php endif;?>

											    <?php endif;?>
											    <?php if( $item['text_part_3'] ):?>
												    <div class="text"><?php echo wpautop($item['text_part_3']);?></div>
											    <?php endif;?>
										    <?php endforeach;?>
									    </div>
								    </div>
							    </div>
						    </div>
					    </div>
              <?php
                $smallSaleBanner = carbon_get_theme_option('aiss_option_small_banner_image');

                if ( $smallSaleBanner ):?>
                <aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod440">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <img src="<?php echo $smallSaleBanner;?>" alt=""/>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              <?php endif;?>
				    </div>
			    </div>
		    </section>

	<?php endif;?>
  <?php
    $saleBigBanner = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_sale_big_image');
    $saleTitle = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_sale_title');
    $saleBtnText = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_sale_btn_text');

    if ( $saleBigBanner && $saleBtnText && $saleTitle ){

      $content = array(
        'title' => $saleTitle,
        'banner' => $saleBigBanner,
        'btn_text' => $saleBtnText
      );

      get_template_part('template-parts/sale-banner','', $content);
    }
  ?>

<?php get_footer();
