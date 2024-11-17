<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки статті
	 *
	 * Template post type: blog
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header(); ?>
<?php

	$blogMainTitle = carbon_get_theme_option('aiss_option_blog_main_title');
	$blogMainImage = carbon_get_theme_option('aiss_option_blog_main_image');

	if ( $blogMainImage && $blogMainTitle ):

		?>
		<section id="tz-image-wrapper" class="blog-main-screen">
			<div class="container-fluid">
				<div class="row" id="image">
					<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="tz-module module " id="Mod439">
							<div class="module-inner">
								<div class="module-ct">
									<div class="custom"  >
										<div class="desktop tst2" style="background: url(<?php echo $blogMainImage;?>) 100% 100% ">
											<div class="row" >
												<div >
													<h1><?php echo $blogMainTitle;?></h1>
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

<?php get_template_part('template-parts/breadcrumbs');?>

	<?php $blogPostContent = carbon_get_post_meta(get_the_ID(), 'aiss_blog_type_page_content_list');?>
		    <section id="tz-main-body-wrapper" class="blog-post-body">
			    <div class="container">
				    <div class="row" id="main-body">
					    <?php if( $blogPostContent ): $part = 0;?>
						    <div id="tz-message-area" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
							    <section id="tz-main-wrapper" class=" ">
								    <div class="row" id="main">
									    <div id="tz-component-area" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
										    <section id="tz-component-wrapper">
											    <div id="tz-component">
												    <div class="TzItemPage item-page masonry">
													    <div class="TzItemPageInner">
														    <div id="tz-portfolio-template-fulltext" class="tz-container-fluid">
															    <div class="container-fluid">
																    <div class="tz-row">
																	    <div class="tz-col-lg-12">
																		    <?php foreach( $blogPostContent as $item ): $part ++;?>
																			    <?php if( $part == 1 ):?>
																				    <h1 class="colortext" style="text-transform: uppercase; font-size: 24px;" align="center">
																					    <?php echo $item['title'];?>
																				    </h1>
																			    <?php else:?>
																				    <h2 class="colortext" style="text-transform: uppercase; font-size: 24px;" align="center">
																					    <?php echo $item['title'];?>
																				    </h2>
																			    <?php endif;?>
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
                                                <div class="youtube" id="<?php echo $item['media_type_part_1_video'];?>"></div>
                                              </div>
                                            </div>
                                          <?php elseif ( $item['media_type_part_1'] == 'form' ):?>
                                            <div class="row main-row-small">
                                              <img
                                                  src="<?php echo wp_get_attachment_image_src($item['media_type_part_1_form_image'], 'full')[0];?>"
                                                  alt="<?php echo get_post_meta($item['media_type_part_1_form_image'], '_wp_attachment_image_alt', TRUE);?>"
                                              >
                                              <div class="col-md-12 form-popap-main" style="">
                                                <span class="modal_close" style="cursor: pointer;text-align: right;margin: 10px;">X</span>
                                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                  <input type="hidden" name="action" value="form_integration">
                                                  <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                  <div class="col-md-12 zagolovoc" style="">
                                                    <span><?php echo $item['media_type_part_1_form_title_1'];?></span>
	                                                  <?php echo $item['media_type_part_1_form_title_2'];?>
                                                  </div>
                                                  <div class="row labeform" style="margin-bottom: 30px;">
                                                    <div class="center" style="padding: 0px 30px 0;">
                                                      <input style="" name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                    </div>
                                                    <div class="center" style="">
                                                      <input style="" name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
                                                    </div>
                                                    <div class="center" style="">
                                                      <input style="" name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
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
                                                      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                        <input type="hidden" name="action" value="form_integration">
                                                        <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
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
                                                      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                        <input type="hidden" name="action" value="form_integration">
                                                        <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
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
                                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                  <input type="hidden" name="action" value="form_integration">
                                                  <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                  <div class="col-md-12 zagolovoc" style="">
                                                    <span style=""><?php echo $item['media_type_part_2_form_title_1'];?></span>
												      <?php echo $item['media_type_part_2_form_title_2'];?>
                                                  </div>
                                                  <div class="row labeform" style="margin-bottom: 30px;">
                                                    <div class="center" style="padding: 0px 30px 0;">
                                                      <input style="" name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                    </div>
                                                    <div class="center" style="">
                                                      <input style="" name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
                                                    </div>
                                                    <div class="center" style="">
                                                      <input style="" name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
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
                                                      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                        <input type="hidden" name="action" value="form_integration">
                                                        <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
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
                                                      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                                        <input type="hidden" name="action" value="form_integration">
                                                        <input type="hidden" name="page-name" value="<?php the_title();?>">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="width" size="40" type="text" class="form-control" placeholder="Ширина, м">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center item">
                                                          <input name="height" size="40" type="text" class="form-control" placeholder="Висота, м">
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
                                        <?php
                                          global $post;

                                          $category = get_the_terms($post->ID, 'blog_tag');

                                          if( $category ):?>

                                            <div id="tz-portfolio-template-tag" class="tz-container-fluid">
                                              <div class="container-fluid">
                                                <div class="tz-row">
                                                  <div class="tz-col-lg-12 tz-col-md-12 tz-col-sm-12 tz-col-xs-12">
                                                    <div class="post-tags">
                                                      <i class="fa fa-tags"></i><span>Tags: </span>
	                                                    <?php $current_cat_id = $category[0]->term_id;
		                                                    $cat_posts_count = $category[0]->count;

		                                                    $catLeng = count($category);

		                                                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>
                                                          <a href="<?php echo get_home_url('/');?>/polezno-znat/tags?<?php echo $category[$i]->term_id;?>">
	                                                          <?php echo $category[$i]->name;?>
                                                          </a>,
		                                                    <?php endfor;?>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          <?php endif;?>
                                        <div id="tz-portfolio-template-social" class="tz-container-fluid">
                                          <div class="container-fluid">
                                            <div class="tz-row">
                                              <div class="tz-col-lg-12 tz-col-md-12 tz-col-sm-12 tz-col-xs-12">
                                                <div class="share-post">
                                                  <span class="sh">Поділіться цією публікацією: </span>
                                                  <ul>
                                                    <!-- Facebook Button -->
                                                    <li>
                                                      <a href="javascript:" onclick="popUp=window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false" class="main-bg">
                                                        <i class="fa fa-facebook"></i>
                                                      </a>
                                                    </li>
                                                    <!-- End Facebook Button -->
                                                    <!-- Twitter Button -->
                                                    <li>
                                                      <a href="javascript:" onclick="popUp=window.open('https://twitter.com/intent/tweet?url=<?php the_permalink();?>&amp;via=Templaza&amp;text=<?php the_title();?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false" class="main-bg">
                                                        <i class="fa fa-twitter"></i>
                                                      </a>
                                                    </li>
                                                    <!-- End Twitter Button -->
                                                    <!-- Pinterest Button -->
                                                    <!-- Pinterest Button -->
                                                    <!-- Linkedin Button -->
                                                    <li>
                                                      <a href="javascript:" onclick="popUp=window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&amp;title=<?php the_title();?>&amp;source=Templaza', 'popupwindow', 'scrollbars=yes,width=1000,height=400'); popUp.focus();return false" class="main-bg">
                                                        <i class="fa fa-linkedin"></i>
                                                      </a>
                                                    </li>
                                                    <!-- Linkedin Button -->
                                                  </ul>
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
												    </div>
											    </div>
										    </section>
									    </div>
								    </div>
							    </section>
						    </div>
					    <?php endif;?>


              <aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
			      <?php

				      $terms = get_terms( array(
					      'taxonomy'   => 'blog_tag',
					      'hide_empty' => false,
				      ) );

				      if ( $terms ):
					      ?>
                        <div class="tz-module module " id="Mod223">
                          <div class="module-inner">
						      <?php
							      $blogPopularTag = carbon_get_theme_option('aiss_option_blog_popular_tags');
							      $blogPopularPosts = carbon_get_theme_option('aiss_option_blog_popular_posts');
						      ?>
                            <h3 class="module-title widget-head"><?php echo $blogPopularTag;?></h3>
                            <div class="module-ct">
                              <div class="widget tags-w fx" style="opacity: 1!important;" data-animate="fadeInRight">
                                <div class="widget-content">
                                  <div class="tags">
								      <?php foreach( $terms as $tag ):?>
                                        <a href="<?php echo get_home_url('/');?>/polezno-znat/tags?<?php echo $tag->term_id;?>" class="blob-tag"><?php echo $tag->name;?></a>
								      <?php endforeach;?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
				      <?php endif;?>
                <div class="tz-module module " id="Mod220">
                  <div class="module-inner">
                    <h3 class="module-title widget-head"><?php echo $blogPopularPosts;?></h3>
                    <div class="module-ct">
                      <div class="widget r-posts-w fx" data-animate="fadeInRight">

                        <div class="widget-content">
						    <?php
							    wp_nav_menu(
								    array(
									    'theme_location' => 'menu_4',
									    'menu_id'        => 'footer-posts-blog',
									    'container' => false,
									    'menu_class' => 'footer-posts menu',
									    'walker'     => new Footer_Posts_Walker_Nav_Menu()
								    )
							    );
						    ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
			      <?php
				      $smallSaleBanner = carbon_get_theme_option('aiss_option_small_banner_image');

				      if ( $smallSaleBanner ):
					      ?>
                        <div class="tz-module module " id="Mod440">
                          <div class="module-inner">
                            <div class="module-ct">
                              <div class="custom small-banner">
                                <img src="<?php echo $smallSaleBanner;?>" alt=""/>
                              </div>
                            </div>
                          </div>
                        </div>
				      <?php endif;?>
              </aside>
				    </div>
			    </div>
		    </section>

<?php get_footer();
