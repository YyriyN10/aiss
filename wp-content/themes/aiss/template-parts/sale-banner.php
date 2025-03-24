<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<section id="tz-position-10-wrapper" class="sale-block">

	<div class="container">
		<div class="row" id="position-10">
			<div id="tz-position-10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
				<div class="tz-module module mine-tania " id="Mod345">
					<div class="module-inner">
						<div class="module-ct">

							<div class="custom mine-tania"  >
								<style>.mine-tania .desktop p.form{font-weight: 700;}</style>

								<div class="desktop">
									<div class="row contact-container" style="background: url(<?php echo carbon_get_theme_option('aiss_option_big_banner_image');?>) 100% 100% no-repeat; ">
										<div class="col-md-7"></div>
										<div class="col-md-4" style="padding: 20px; background: white; border: 1px solid #d2d2d2;">
											<p style="text-align: center; margin: 5px 0px; color: black; font-size: 20px; font-weight: bold;"><?php echo $args['title'];?></p>
											<p style="text-align: center; margin: 5px 0px; font-size: 18px; color: #333333;"></p>
											<hr style="border: 2px solid red; width: 240px; margin: 0px auto;" />
											<?php
												$contactsList = carbon_get_theme_option('aiss_option_contact_city');

												if ($contactsList):?>
													<?php foreach( $contactsList as $item ):?>

                                <?php if( !empty( $args['phone_list']) ):?>
                                  <div class="row" style="margin-top: 20px; margin-left: 0px; margin-right: 0px;">
                                    <div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo THEME_PATH;?>/assets/img/viber1.png" /></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 0px;">
                                      <?php foreach( $args['phone_list'] as $customPhone ):?>
                                        <p class="form"><?php echo $customPhone['custom_phone'];?></p>
                                      <?php endforeach;?>
                                    </div>
                                  </div>
                                <?php else:?>
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
                                <?php endif;?>

                                <?php if( !empty( $args['email_list'] ) ):?>

                                      <div class="row" style="margin-top: 5px; margin-left: 0px; margin-right: 0px;">
                                        <div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo THEME_PATH;?>/assets/img/mail.png" /></div>
                                        <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 0px;">
	                                        <?php foreach( $args['email_list'] as $customEmail ):?>
                                              <p class="form">
                                                                              <span id="cloak51732">
                                                                                <a href="mailto:<?php echo antispambot($customEmail['custom_email'], 1);?>">
                                                                                  <?php echo antispambot($customEmail['custom_email'], 0);?>
                                                                                </a>
                                                                              </span>
                                              </p>
                          <?php endforeach;?>
                                        </div>
                                      </div>

                                <?php else:?>
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
                                <?php endif;?>


													<?php endforeach;?>
												<?php endif;?>
											<p style="margin-top: 10px; text-align: center;"><a href="#" data-toggle="modal" data-target="#formModal" class="btn btn-medium main-bg"><?php echo $args['btn_text'];?></a>
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
