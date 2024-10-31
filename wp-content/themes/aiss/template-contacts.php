<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки контакти
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header(); ?>

	<?php
	    $contactImage = carbon_get_post_meta(get_the_ID(), 'aiss_contact_page_image');

	    if( $contactImage ):?>
	    <!-- -->
		    <section id="tz-banner-wrapper" class=" ">
			    <div class="container-fluid">
				    <div class="row" id="banner">
					    <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

						    <div class="custom"  >
							    <div class="desktop" style="background: url(<?php echo $contactImage;?>) 100% 100% no-repeat;"></div>
						    </div>
					    </div>
				    </div>
			    </div>
		    </section>
	<?php endif;?>

<?php get_template_part('template-parts/breadcrumbs');?>

    <?php
        $contactMainTitle = carbon_get_post_meta(get_the_ID(), 'aiss_contact_page_title');
	      $contactMainText = carbon_get_post_meta(get_the_ID(), 'aiss_contact_page_text');

        if( $contactMainText || $contactMainTitle ):?>
        <!-- -->
          <section id="tz-contacts-wrapper" class=" ">
            <div class="container">
              <div class="row" id="contacts">
                <div id="tz-block-2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="tz-module module " id="Mod380">
                    <div class="module-inner">
                      <div class="module-ct">

                        <div class="custom"  >
                          <?php if( $contactMainTitle ):?>
                            <h1 class="block-head" style="padding-top: 20px; text-transform: uppercase;"><?php echo $contactMainTitle;?></h1>
                          <?php endif;?>
                          <?php if( $contactMainText ):?>
                            <div class="cell-12 contact-detalis">
                              <?php echo wpautop( $contactMainText );?>
                            </div>
                          <?php endif;?>
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
        $contactCityList = carbon_get_theme_option( 'aiss_option_contact_city');

        if( $contactCityList ):?>
        <!-- -->
          <section id="tz-map---cont-wrapper" class=" ">
            <div class="container">
              <?php foreach( $contactCityList as $city ):?>
                <div class="row" id="map---cont">
                  <div id="tz-block-4" class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="tz-module module " id="Mod434">
                      <div class="module-inner">
                        <div class="module-ct">
                          <div class="custom"  >
                            <h2 class="block-head" style="padding-top: 20px;"><?php echo $city['city_name'];?></h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tz-module module" id="Mod384">
                      <div class="module-inner">
                        <div class="module-ct">
                          <div class="map-canvas" style="height: 300px; width: 100%">
                            <iframe src="<?php echo $city['map_link'];?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="tz-block-3" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="tz-module module " id="Mod383">
                      <div class="module-inner">
                        <div class="module-ct">
                          <div class="custom"  >
                            <div class="cell-12 contact-detalis" style="padding: 0px;">
                              <div class="fx row  animated fadeInRight" data-animate="fadeInRight" >
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-list" style="padding: 0px;">
                                  <?php if( $city['address'] ):?>
                                    <div class="row row-item">
                                      <div class="col-md-2 col-sm-3 col-xs-3">
                                        <img src="<?php echo THEME_PATH;?>/assets/img/Ic_1.png" width="35">
                                      </div>
                                      <div class="col-md-10 col-sm-9 col-xs-9">
                                        <p><?php echo $city['address'];?></p>
                                      </div>
                                    </div>
                                  <?php endif;?>
                                  <?php if( $city['mobile_phone_list'] ):?>
                                    <div class="row row-item">
                                      <div class="col-md-2 col-sm-3 col-xs-3">
                                        <img src="<?php echo THEME_PATH;?>/assets/img/Ic_2.png" width="35">
                                      </div>
                                      <div class="col-md-10 col-sm-9 col-xs-9">
                                        <?php foreach( $city['mobile_phone_list'] as $phone ):?>
                                          <p><?php echo $phone['phone'];?></p>
                                        <?php endforeach;?>
                                      </div>
                                    </div>
                                  <?php endif;?>
                                  <?php if( $city['landline_phone'] ):?>
                                    <div class="row row-item">
                                      <div class="col-md-2 col-sm-3 col-xs-3">
                                        <img src="<?php echo THEME_PATH;?>/assets/img/Ic_3.png" width="35">
                                      </div>
                                      <div class="col-md-10 col-sm-9 col-xs-9">
                                        <p><?php echo $city['landline_phone'];?></p>
                                      </div>
                                    </div>
                                  <?php endif;?>
                                  <?php if( $city['email_list'] ):?>
                                    <div class="row row-item">
                                      <div class="col-md-2 col-sm-3 col-xs-3">
                                        <img src="<?php echo THEME_PATH;?>/assets/img/Ic_4.png" width="35">
                                      </div>
                                      <div class="col-md-10 col-sm-9 col-xs-9">
                                        <?php foreach( $city['email_list'] as $email ):?>
                                          <p>
                                            <a href="mailto:<?php echo antispambot($email['email'], 1) ;?>">
                                              <?php echo antispambot( $email['email'], 0);?>
                                            </a>
                                          </p>
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
                </div>
              <?php endforeach;?>

                <?php
                  $managerName = carbon_get_theme_option( 'aiss_option_contact_main_manager');
	                $managerPosition = carbon_get_theme_option( 'aiss_option_contact_main_manager_post');
	                $managerPhone = carbon_get_theme_option( 'aiss_option_contact_main_manager_phone');

	                if ( $managerName && $managerPhone && $managerPosition ):
                ?>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 manager-wrapper" >
                    <div class="row">
                      <div class="col-md-12 col-sm-9 col-xs-9">
                        <h3><?php echo $managerName;?></h3>
                        <p><?php echo $managerPosition;?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1 col-sm-3 col-xs-3">
                        <img src="<?php echo THEME_PATH;?>/assets/img/Ic_2.png" width="35">
                      </div>
                      <div class="col-md-11 col-sm-9 col-xs-9">
                        <p><?php echo $managerPhone;?></p>
                      </div>
                    </div>
                  </div>
                <?php endif;?>
            </div>
          </section>
    <?php endif;?>
<?php get_footer();
