<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки продукту
	 *
	 * Template post type: products
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>

<?php
	$productSingleMainImage = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_main_screen_image');
	$productSingleMainPhone = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_main_screen_phone');
	$productSingleMainWork = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_main_screen_work');

	if ( $productSingleMainImage && $productSingleMainPhone && $productSingleMainWork ):

		?>
		<section id="tz-position-1-wrapper" class="position1 main-screen">
			<div class="container-fluid">
				<div class="row" id="position-1">
					<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="tz-module module " id="Mod509">
							<div class="module-inner">
								<div class="module-ct">
									<div class="custom"  >
										<div class="desktop tst2 desktop-head-main" style="background: url(<?php echo $productSingleMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 525px; padding: 0px;">
											<div class="row" style="text-align: center;">
												<div style="width: 800px; margin: 0px auto;">
													<p class="h1"><?php the_title();?></p>
												</div>
												<div style="width: 550px; margin: 0px auto;">
													<p class="h2"><?php echo $productSingleMainPhone;?></p>
												</div>
												<p class="h3"><?php echo $productSingleMainWork;?></p>
											</div>
										</div>
										<div class="mobile mobile-head-main" style="display: none; height: 250px; background: url(<?php echo $productSingleMainImage;?>) 100% 100% no-repeat; background-size: cover;">
											<div class="row">
												<div class="col-md-12" style="text-align: center; margin: 0px;">
													<p class="h2"><?php the_title();?></p>
													<p class="h3"><span style="background: red; padding: 5px 15px;"><?php echo $productSingleMainPhone;?></span></p>
													<p class="h4"><?php echo $productSingleMainWork;?></p>
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
	    $productCallFormTitle = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_form_title');
		$productCallFormSubtitle = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_form_subtitle');
		$productCallFormBtn = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_form_btn');

	    if( $productCallFormTitle && $productCallFormSubtitle && $productCallFormBtn ):?>
	    <!-- -->
        <section id="tz-position-2-wrapper" class="product-call-form">
          <div class="container">
            <div class="row" id="position-2">
              <div id="tz-position-2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
                <div class="custom"  >
                  <div class="desktop">
                    <div class="dark-bg">
                      <div class="container">
                        <div class="row">
                          <div class="cell-12">
                            <p style="color: #bdbdbd;font-size: 24px;margin: 0 0 10px;padding: 0;font-weight: 700;line-height: 1;">
                              <span class="main-color" style="font-size: 35px;"><?php echo $productCallFormTitle;?></span>
                              <br /><?php echo $productCallFormSubtitle;?></p>
                          </div>
                        </div>
                        <div class="row">
                          <form action="https://aiss.com.ua/zakaz_garage.php" method="post">
                            <div class="cell-3 center"><input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__" /></div>
                            <div class="cell-3 center"><input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м" /></div>
                            <div class="cell-3 center"><input name="height" size="40" type="text" class="form-control" placeholder="Высота, м" /></div>
                            <div class="cell-3 center"><input name="submit" type="submit" value="<?php echo $productCallFormBtn;?>" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;" /></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mobile" style="display: none; background-color: #222; padding: 15px 0;">
                    <div class="container">
                      <div class="row">
                        <div class="cell-12">
                          <p style="font-size: 11px;margin: 0 0 10px;padding: 0;font-weight: 700;line-height: 1;">
                            <span class="main-color" style="font-size: 16px;"><?php echo $productCallFormSubtitle;?></span>
                            <br /><?php echo $productCallFormSubtitle;?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <form action="https://aiss.com.ua/zakaz_garage.php" method="post">
                          <div class="cell-12 center"><input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__" /></div>
                          <div class="cell-12 center" style="margin-top: 5px;"><input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м" /></div>
                          <div class="cell-12 center" style="margin-top: 5px;"><input name="height" size="40" type="text" class="form-control" placeholder="Высота, м" /></div>
                          <div class="cell-12 center" style="margin-top: 5px;"><input name="submit" type="submit" value="Хочу расчет" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;" /></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
	<?php endif;?>

<?php get_template_part('template-parts/breadcrumbs');?>

<?php
	$singleProductContent = carbon_get_post_meta(get_the_ID(), 'aiss_product_type_page_content_list');

	if( $singleProductContent ):?>
      <!-- -->

      <section id="tz-main-body-wrapper" class="category-main-product-content ">
        <div class="container">
          <div class="row" id="main-body">
            <div id="tz-main-content" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
              <div class="tz-module module " id="Mod457">
                <div class="module-inner">
                  <div class="module-ct">
                    <div class="custom"  >
						<?php foreach( $singleProductContent as $item):?>
                          <h2 class="block-head" style="text-transform: uppercase;"><?php echo $item['title'];?></h2>
							<?php if( $item['text_part_1'] ):?>
                            <div class="text"><?php echo wpautop($item['text_part_1']);?></div>
							<?php endif;?>
							<?php if( $item['media_type_part_1'] == 'pic_1' ):?>
								<?php if( $item['media_type_part_1_image'] ):?>
                              <div class="desktop-solo-img">
                                <div class="row">
                                  <div class="col-lg-12 center item">
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
                                <div id="player1"></div>
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
                                      <a href="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>" >
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
				        <?php elseif ( $item['media_type_part_1'] == 'material_5' ):?>
                    <?php if( $item['media_type_part_1_material_5'] ): $im5_1 = 0;?>
                      <div class="row" style="padding-top: 20px;">
                        <?php foreach( $item['media_type_part_1_material_5'] as $material5Item ): $im5_1 ++?>
                          <div class="col-md-2 col-sm-3 col-xs-4">
                            <p style="text-align: center;"><img src="<?php echo $material5Item['image'];?>" style="height: 180px;"></p>
                            <p><?php echo $im5_1;?>. <?php echo $material5Item['name'];?></p>
                          </div>
                        <?php endforeach;?>
                      </div>
                    <?php endif;?>
				        <?php elseif ( $item['media_type_part_1'] == 'material_4' ):?>
                    <?php if( $item['media_type_part_1_material_4'] ): $im4_1 = 0;?>
                      <div class="row" style="padding-top: 20px;">
                        <?php foreach( $item['media_type_part_1_material_4'] as $material4Item ): $im4_1 ++;?>
                          <div class="col-md-3 col-sm-4 col-xs-6">
                            <p style="text-align: center;"><img src="<?php echo $material4Item['image'];?>" style="width: 130px; height: 180px;"></p>
                            <p style="margin-bottom: 0px;"><?php echo $im4_1;?>. <?php echo $material4Item['name'];?></p>
                            <?php if( $material4Item['type'] ):?>
                              <p><?php echo $material4Item['type'];?></p>
                            <?php endif;?>
                          </div>
                        <?php endforeach;?>
                      </div>
                    <?php endif;?>
				        <?php elseif ( $item['media_type_part_1'] == 'material_3' ): $im3_1 = 0;?>
                    <?php if( $item['media_type_part_1_material_3'] ): ?>
                      <div class="row" style="padding-top: 20px;">
                        <?php foreach( $item['media_type_part_1_material_3'] as $material3Item ): $im3_1 ++;?>
                          <div class="col-md-4 col-sm-4 col-xs-6">
                            <p style="text-align: center;"><img src="<?php echo $material3Item['image'];?>" style="width: 160px;"></p>
                            <p><?php echo $im3_1;?>. <?php echo $material3Item['name'];?></p>
                          </div>
                        <?php endforeach;?>
                      </div>
                    <?php endif;?>
				        <?php elseif ( $item['media_type_part_1'] == 'table_form' ):?>
                  <div class="row" style="margin-right: -15px!important;margin-left: -15px!important;">
                    <div class="col-md-8">
                      <table class="table-style2">
                        <thead>
                          <tr style="font-size: 12px;">
                            <?php if( $item['media_type_part_1_table_column_1'] ):?>
                              <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_1_table_column_1'];?></th>
                            <?php endif;?>
	                          <?php if( $item['media_type_part_1_table_column_2'] ):?>
                                <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_1_table_column_2'];?></th>
	                          <?php endif;?>
	                          <?php if( $item['media_type_part_1_table_column_3'] ):?>
                                <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_1_table_column_3'];?></th>
	                          <?php endif;?>
                          </tr>
                        </thead>
                        <?php if( $item['media_type_part_1_table_rows'] ):?>
                          <tbody>
                            <?php foreach( $item['media_type_part_1_table_rows'] as $rowItem):?>
                              <tr>
                                <td style="padding: 5px;"><?php echo $rowItem['column_1'];?></td>
                                <td style="padding: 5px; text-align: center;"><?php echo $rowItem['column_2'];?></td>
                                <td style="padding: 5px; text-align: center;"><?php echo $rowItem['column_3'];?></td>
                              </tr>
                            <?php endforeach;?>
                          </tbody>
                        <?php endif;?>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <div class="desktop-main-form-small">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                            <p class="h2" style="margin-top: 0px;">
                              <span class="main-color"><?php echo $item['media_type_part_1_t_form_title'];?></span>
                              <br><?php echo $item['media_type_part_1_t_form_subtitle'];?>
                            </p>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                            <form action="https://aiss.com.ua/zakaz_garage.php" method="post">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                <input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                <input name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                <input name="submit" type="submit" value="<?php echo $item['media_type_part_1_t_form_btn'];?>" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php elseif ( $item['media_type_part_1'] == 'text_form' ):?>
                  <div class="row" style="margin-right: -15px!important;margin-left: -15px!important;">
                          <div class="col-md-8">
                            <div class="text"><?php echo wpautop($item['media_type_part_1_f_text']);?></div>
                          </div>

                          <div class="col-md-4">
                            <div class="desktop-main-form-small">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                                  <h2>
                                    <span class="main-color"><?php echo $item['media_type_part_1_t_form_title'];?></span>
                                    <br><?php echo $item['media_type_part_1_t_form_subtitle'];?>
                                  </h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                                  <form action="https://aiss.com.ua/zakaz_avtom_otkat.php" method="post">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                      <input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                      <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                      <input name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                      <input name="submit" type="submit" value="<?php echo $item['media_type_part_1_t_form_btn'];?>" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                <?php endif;?>
                <?php if( $item['text_part_2'] ):?>
                              <div class="text"><?php echo wpautop($item['text_part_2']);?></div>
                <?php endif;?>
                <?php if( $item['media_type_part_2'] == 'pic_1' ):?>
								<?php if( $item['media_type_part_2_image'] ):?>
                              <div class="desktop-solo-img">
                                <div class="row">
                                  <div class="col-lg-12 center item">
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
                              <div class="videoWrapper" data-video="<?php echo $item['media_type_part_2_video'];?>">
                                <div id="player1"></div>
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
                                    <a href="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>" >
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
            <?php elseif ( $item['media_type_part_2'] == 'material_5' ):?>
              <?php if( $item['media_type_part_2_material_5'] ): $im5_1 = 0;?>
                      <div class="row" style="padding-top: 20px;">
                <?php foreach( $item['media_type_part_2_material_5'] as $material5Item ): $im5_1 ++?>
                            <div class="col-md-2 col-sm-3 col-xs-4">
                              <p style="text-align: center;"><img src="<?php echo $material5Item['image'];?>" style="height: 180px;"></p>
                              <p><?php echo $im5_1;?>. <?php echo $material5Item['name'];?></p>
                            </div>
                <?php endforeach;?>
                      </div>
              <?php endif;?>
            <?php elseif ( $item['media_type_part_2'] == 'material_4' ):?>
              <?php if( $item['media_type_part_2_material_4'] ): $im4_1 = 0;?>
                      <div class="row" style="padding-top: 20px;">
                <?php foreach( $item['media_type_part_2_material_4'] as $material4Item ): $im4_1 ++;?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                              <p style="text-align: center;"><img src="<?php echo $material4Item['image'];?>" style="width: 130px; height: 180px;"></p>
                              <p style="margin-bottom: 0px;"><?php echo $im4_1;?>. <?php echo $material4Item['name'];?></p>
                  <?php if( $material4Item['type'] ):?>
                                  <p><?php echo $material4Item['type'];?></p>
                  <?php endif;?>
                            </div>
                <?php endforeach;?>
                      </div>
              <?php endif;?>
            <?php elseif ( $item['media_type_part_2'] == 'material_3' ): $im3_1 = 0;?>
              <?php if( $item['media_type_part_2_material_3'] ): ?>
                      <div class="row" style="padding-top: 20px;">
                <?php foreach( $item['media_type_part_2_material_3'] as $material3Item ): $im3_1 ++;?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                              <p style="text-align: center;"><img src="<?php echo $material3Item['image'];?>" style="width: 160px;"></p>
                              <p><?php echo $im3_1;?>. <?php echo $material3Item['name'];?></p>
                            </div>
                <?php endforeach;?>
                      </div>
              <?php endif;?>
				<?php elseif ( $item['media_type_part_2'] == 'table_form' ):?>
                <div class="row" style="margin-right: -15px!important;margin-left: -15px!important;">
                  <div class="col-md-8">
                    <table class="table-style2">
                      <thead>
                      <tr style="font-size: 12px;">
						  <?php if( $item['media_type_part_2_table_column_1'] ):?>
                            <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_2_table_column_1'];?></th>
						  <?php endif;?>
						  <?php if( $item['media_type_part_2_table_column_2'] ):?>
                            <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_2_table_column_2'];?></th>
						  <?php endif;?>
						  <?php if( $item['media_type_part_2_table_column_3'] ):?>
                            <th class="main-bg" style="padding: 5px;"><?php echo $item['media_type_part_2_table_column_3'];?></th>
						  <?php endif;?>
                      </tr>
                      </thead>
						<?php if( $item['media_type_part_2_table_rows'] ):?>
                          <tbody>
						  <?php foreach( $item['media_type_part_2_table_rows'] as $rowItem):?>
                            <tr>
                              <td style="padding: 5px;"><?php echo $rowItem['column_1'];?></td>
                              <td style="padding: 5px; text-align: center;"><?php echo $rowItem['column_2'];?></td>
                              <td style="padding: 5px; text-align: center;"><?php echo $rowItem['column_3'];?></td>
                            </tr>
						  <?php endforeach;?>
                          </tbody>
						<?php endif;?>
                    </table>
                  </div>
                  <div class="col-md-4">
                    <div class="desktop-main-form-small">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                          <p class="h2" style="margin-top: 0px;">
                            <span class="main-color"><?php echo $item['media_type_part_2_t_form_title'];?></span>
                            <br><?php echo $item['media_type_part_2_t_form_subtitle'];?>
                          </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                          <form action="https://aiss.com.ua/zakaz_garage.php" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="submit" type="submit" value="<?php echo $item['media_type_part_2_t_form_btn'];?>" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				      <?php elseif ( $item['media_type_part_2'] == 'text_form' ):?>
                <div class="row" style="margin-right: -15px!important;margin-left: -15px!important;">
                  <div class="col-md-8">
                    <div class="text"><?php echo wpautop($item['media_type_part_2_f_text']);?></div>
                  </div>

                  <div class="col-md-4">
                    <div class="desktop-main-form-small">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                          <h2>
                            <span class="main-color"><?php echo $item['media_type_part_2_t_form_title'];?></span>
                            <br><?php echo $item['media_type_part_2_t_form_subtitle'];?></h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333333;">
                          <form action="https://aiss.com.ua/zakaz_avtom_otkat.php" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="userphone" size="40" type="text" class="form-control" placeholder="+38(0__)___-__-__">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="height" size="40" type="text" class="form-control" placeholder="Высота, м">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                              <input name="submit" type="submit" value="<?php echo $item['media_type_part_2_t_form_btn'];?>" class="btn btn-medium main-bg" style="padding: 0px 20px; width: 100%;">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

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

            <aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <div class="tz-module module " id="Mod440">
                <div class="module-inner">
                  <div class="module-ct">
                    <div class="custom"  >
                      <img src="<?php echo carbon_get_post_meta( get_the_ID(), 'aiss_product_post_fields_sale_small_image');?>" alt=""/>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>

	<?php endif;?>

<?php
	$saleBigBanner = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_sale_big_image');
	$saleTitle = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_sale_title');
	$saleBtnText = carbon_get_post_meta(get_the_ID(), 'aiss_product_post_fields_sale_btn_text');

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