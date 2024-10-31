<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки сервиси
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>

	<?php
	    $servicesMainScreenTitle = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_main_screen_title');
	    $servicesMainScreenPhone = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_main_screen_phone');
	    $servicesMainScreenText = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_main_screen_work_time');
	    $servicesMainScreenImage = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_main_screen_image');

	    if( $servicesMainScreenImage && $servicesMainScreenPhone && $servicesMainScreenTitle && $servicesMainScreenText ):
	 ?>
	    <!-- -->
		    <section id="tz-position-1-wrapper" class="position1 main-screen">
			    <div class="container-fluid">
				    <div class="row" id="position-1">
					    <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod501">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <div class="desktop tst2 desktop-head-main" style="background: url('<?php echo $servicesMainScreenImage;?>') 100% 100% no-repeat; background-size: cover; height: 525px; padding: 0px;">
											    <div class="row" style="text-align: center;">
												    <div style="width: 800px; margin: 0px auto;">
													    <p class="h1"><?php echo $servicesMainScreenTitle;?></p>
												    </div>
												    <div style="width: 550px; margin: 0px auto;">
													    <p class="h2"><?php echo $servicesMainScreenPhone;?></p>
												    </div>
												    <p class="h3"><?php echo $servicesMainScreenText;?></p>
											    </div>
										    </div>
										    <div class="mobile mobile-head-main" style="display: none; height: 250px; background: url(<?php echo $servicesMainScreenImage;?>) 100% 100% no-repeat; background-size: cover;">
											    <div class="row">
												    <div class="col-md-12" style="text-align: center; margin: 0px;">
													    <p class="h2"><?php echo $servicesMainScreenTitle;?></p>
													    <p class="h3"><span style="background: red; padding: 5px 15px;"><?php echo $servicesMainScreenPhone;?></span></p>
													    <p class="h4"><?php echo $servicesMainScreenText;?></p>
												    </div>
											    </div>
										    </div>
                      </div>
								    </div>
                  </div>
                </div>
                  <?php
	                  $serviceCatArgs = array(
		                  'post_type' => 'service',
		                  'orderby' 	 => 'date',
		                  'suppress_filters' => false,
		                  'lang' => false,
		                  'posts_per_page' => -1
	                  );

                    $serviceCatList = new WP_Query( $serviceCatArgs );

                    if ( $serviceCatList->have_posts() ) :
                  ?>
                <div class="tz-module module " id="Mod502">
                  <div class="module-inner">
                    <div class="module-ct">

									    <div class="custom"  >
										    <div class="row main-rov-prodact">
                          <?php	while ( $serviceCatList->have_posts() ) : $serviceCatList->the_post(); ?>
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
               <?php endif;?>
			      <?php wp_reset_postdata(); ?>
              </div>
				    </div>
          </div>
        </section>
	<?php endif;?>

    <?php get_template_part('template-parts/breadcrumbs');?>

    <?php
        $servicesContentTitle1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_title');
	      $servicesContentTextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_text_before');
	      $servicesContentVideo = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_video');
	      $servicesContentTextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_text_after');
	      $servicesContentImageList1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_logo_list');
	      $servicesContentTitle2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_garage_title');
	      $servicesContentTextBefore2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_garage_text_before');
	      $servicesContentImageList2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_garage_text_image_list');
	      $servicesContentTextAfter2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_auto_gate_garage_text_after');
	      $servicesContentTitle3 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_service_gate_title');
	      $servicesContentText3 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_service_gate_text');
	      $servicesContentTitle4 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_gate_auto_title');
	      $servicesContentText4 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_gate_auto_text');
	      $servicesContentImageList3 = carbon_get_post_meta(get_the_ID(), 'aiss_service_page_info_repair_gate_auto_image_list');


        if( $servicesContentTitle1 && $servicesContentTextBefore1 ):?>
        <!-- -->
          <section id="tz-position-10-wrapper" class="services-content">
            <div class="container">
              <div class="row" id="position-10">
                <div id="tz-position-10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
                  <div class="tz-module module " id="Mod390">
                    <div class="module-inner">
                      <div class="module-ct">
                        <div class="custom"  >
                          <div class="row" style="margin-right: 15px!important;margin-left: 15px!important;">
                            <h2 class="block-head" style="text-transform: uppercase;"><?php echo $servicesContentTitle1;?></h2>
                            <div class="text"><?php echo wpautop($servicesContentTextBefore1);?></div>

                            <?php if( $servicesContentVideo ):?>
                              <div class="video-max-Wrapper">
                                <div class="videoWrapper" data-video="<?php echo $servicesContentVideo;?>">
                                  <div class="youtube" id="<?php echo $servicesContentVideo;?>"></div>
                                </div>
                              </div>
                            <?php endif;?>
                            <?php if( $servicesContentTextAfter1 ):?>
                              <div class="text"><?php echo wpautop($servicesContentTextAfter1);?></div>
                            <?php endif;?>

                            <?php if( $servicesContentImageList1 ):?>
                              <div class="desktop-duo-img">
                                <div class="row">
                                  <?php foreach( $servicesContentImageList1 as $item ):?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
                                      <img
                                         src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                                         alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                                      >
                                    </div>
                                  <?php endforeach;?>
                                </div>
                              </div>
                            <?php endif;?>

                            <?php if( $servicesContentTitle2 ):?>
                              <h2 class="block-head" style="padding-top: 20px;"><?php echo $servicesContentTitle2;?></h2>
                            <?php endif;?>

                            <?php if( $servicesContentTextBefore2 ):?>
                                <div class="text" <?php echo wpautop($servicesContentTextBefore2);?></div>
                            <?php endif;?>

                            <?php if( $servicesContentImageList2 ):?>
                              <div class="desktop-duo-img">
                                <div class="row">
                                  <?php foreach( $servicesContentImageList2 as $item ):?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
                                      <a href="#fca-widget">
                                        <img
                                           src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                                           alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                                        >
                                      </a>
                                    </div>
                                  <?php endforeach;?>
                                </div>
                              </div>
                            <?php endif;?>

                            <?php if( $servicesContentTextAfter2 ):?>
                                <div class="text"><?php echo wpautop($servicesContentTextAfter2);?></div>
                            <?php endif;?>

                            <?php if( $servicesContentTitle3 ):?>
                              <h2 class="block-head" style="padding-top: 20px;"><?php echo $servicesContentTitle3;?></h2>
                            <?php endif;?>

                            <?php if( $servicesContentText3 ):?>
                                <div class="text"><?php echo wpautop($servicesContentText3);?></div>
                            <?php endif;?>

                            <div class="row">
                              <div class="col-md-6">
                              </div>
                            </div>

                            <?php if( $servicesContentTitle4 ):?>
                              <h2 class="block-head" style="padding-top: 20px;"><?php echo $servicesContentTitle4;?></h2>
                            <?php endif;?>

                            <?php if( $servicesContentText4 ):?>
                                <div class="text"><?php echo wpautop($servicesContentText4);?></div>
                            <?php endif;?>

                            <?php if( $servicesContentImageList3 ):?>
                              <div class="desktop-duo-img">
                                <div class="row">
                                  <?php foreach( $servicesContentImageList3 as $item ):?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center item">
                                      <a href="#fca-widget">
                                        <img
                                           src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                                           alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                                        >
                                      </a>
                                    </div>
                                  <?php endforeach;?>
                                </div>
                              </div>
                            <?php endif;?>
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
