<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aiss
 */

?>
</main>
	<footer class="site-footer">
    <section id="tz-footer-top-wrapper" class="footer-top no-border ">
      <div class="container">
        <div class="row" id="footer-top">
          <div id="tz-footer-1" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="tz-module module " id="Mod407">
              <div class="module-inner">
                <p class="module-title block-head main-footer-p"><?php echo carbon_get_theme_option('aiss_option_footer_menu_name');?></p>
                <div class="module-ct">
                  <div class="custom">
	                  <?php
		                  wp_nav_menu(
			                  array(
				                  'theme_location' => 'menu_3',
				                  'menu_id'        => 'footer-main',
				                  'container' => false,
				                  'menu_class' => 'footer-menu menu',
			                  )
		                  );
	                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tz-footer-4" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "></div>
          <div id="tz-footer-3" class="col-lg-3 col-md-3 col-sm-6 col-xs-12  clear_both_sm">
            <div class="tz-module module " id="Mod306">
              <div class="module-inner">
                <p class="module-title block-head main-footer-p"><?php echo carbon_get_theme_option('aiss_option_footer_posts_name');?></p>
                <div class="module-ct">
                  <div class="widget r-posts-w fx" data-animate="fadeInRight">
                    <div class="widget-content">
                      <ul>
                        <li>
                          <div class="post-img">
                            <img src="media/tz_portfolio/article/cache/5c27d82860994tz_portfolio_1546115112-163_XL.jpg" alt="">
                          </div>
                          <div class="widget-post-info">
                            <p style="font-weight: 400;overflow: hidden;margin-bottom: 8px;height: 18px;-ms-text-overflow: ellipsis;-o-text-overflow: ellipsis;text-overflow: ellipsis;white-space: nowrap;font-size: 13px;">
                              <a href="polezno-znat/avtomaticheskie-vorota-s-nuzhnymi-razmerami-po-nizkoj-tsene/163.html">
                                Автоматические ворота с нужными размерами по низкой цене.                                    </a>
                            </p>
                            <div class="meta">
                              <a href="polezno-znat/avtomaticheskie-vorota-s-nuzhnymi-razmerami-po-nizkoj-tsene/163.html">
                                <i class="fa fa-comments"></i>0                                    </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-img">
                            <img src="media/tz_portfolio/article/cache/5c25d935d74a9tz_portfolio_1545984309-162_XL.jpg" alt="">
                          </div>
                          <div class="widget-post-info">
                            <p style="font-weight: 400;overflow: hidden;margin-bottom: 8px;height: 18px;-ms-text-overflow: ellipsis;-o-text-overflow: ellipsis;text-overflow: ellipsis;white-space: nowrap;font-size: 13px;">
                              <a href="polezno-znat/gde-zakazat-avtomaticheskie-vorota-s-oplatoj-nalichnymi-ili-v-rassrochku/162.html">
                                Где заказать автоматические ворота с оплатой наличными или в рассрочку?                                    </a>
                            </p>

                            <div class="meta">
                              <a href="polezno-znat/gde-zakazat-avtomaticheskie-vorota-s-oplatoj-nalichnymi-ili-v-rassrochku/162.html">
                                <i class="fa fa-comments"></i>0                                    </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-img">
                            <img src="media/tz_portfolio/article/cache/dva-tipa-firmennykh-sdvizhnykh-vorot-aiss-grupp-dlya-vashego-ob-ekta-161_XL.jpg" alt="">
                          </div>
                          <div class="widget-post-info">
                            <p style="font-weight: 400;overflow: hidden;margin-bottom: 8px;height: 18px;-ms-text-overflow: ellipsis;-o-text-overflow: ellipsis;text-overflow: ellipsis;white-space: nowrap;font-size: 13px;">
                              <a href="polezno-znat/dva-tipa-firmennykh-sdvizhnykh-vorot-aiss-grupp-dlya-vashego-ob-ekta/161.html">
                                Два типа фирменных сдвижных ворот «Аисс Групп» для вашего объекта.                                     </a>
                            </p>

                            <div class="meta">
                              <a href="polezno-znat/dva-tipa-firmennykh-sdvizhnykh-vorot-aiss-grupp-dlya-vashego-ob-ekta/161.html">
                                <i class="fa fa-comments"></i>0                                    </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="tz-footer-5" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="tz-module module " id="Mod173">
              <div class="module-inner">
                <p class="module-title block-head main-footer-p"><?php echo carbon_get_theme_option('aiss_option_footer_contacts_name');?></p>
                <div class="module-ct">

                  <div class="custom"  >
                    <style>.main-footer-p{font-size: 15px;}</style>

                    <ul>
                        <?php
	                        $contactsList = carbon_get_theme_option('aiss_option_contact_city');

	                        if ($contactsList):?>
                              <?php foreach( $contactsList as $item ):?>
                                <?php if( $item['mobile_phone_list'] ):?>
                                  <?php foreach( $item['mobile_phone_list'] as $phoneItem ):
			                                $phoneItemToColl = preg_replace( '/[^0-9]/', '', $phoneItem['phone']);
                                      ?>
                                    <?php if( str_contains(strval($phoneItem['phone']), '+') ):?>
                                      <li class="footer-contact">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:+<?php echo $phoneItemToColl;?>"><?php echo $phoneItem['phone'];?></a></span>
                                      </li>
                                    <?php else :?>
                                        <li class="footer-contact">
                                          <i class="fa fa-phone"></i>
                                          <span><a href="tel:<?php echo $phoneItemToColl;?>"><?php echo $phoneItem['phone'];?></a></span>
                                        </li>
                                     <?php endif;?>
                                  <?php endforeach;?>
                                <?php endif;?>
                                  <?php if( $item['email_list'] ):?>
                                      <?php foreach( $item['email_list'] as $emailItem ):?>
                                        <li class="footer-contact">
                                          <i class="fa fa-envelope"></i>
                                          <span>
                                            <a href="mailto:<?php echo antispambot($emailItem['email'], 1);?>">
                                                <?php echo antispambot($emailItem['email'], 0);?>
                                            </a>
                                          </span>
                                        </li>
                                      <?php endforeach;?>
                                  <?php endif;?>
                              <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="tz-footer-bottom-wrapper" class="footer-bottom ">
      <div class="container">
        <div class="row" id="footer-bottom">
          <div id="tz-footer-9" class="col-lg-5 col-md-6 col-sm-12 col-xs-12  copyrights">
            <div class="tz-module module " id="Mod166">
              <div class="module-inner">
                <div class="module-ct">

                  <div class="custom"  >
                    <div class="copyrights">© Copyrights 2007 - <?php echo date('Y');?>. All rights reserved.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="tz-footer-10" class="col-lg-7 col-md-6 col-sm-12 col-xs-12 ">
            <div class="tz-module module " id="Mod167">
              <div class="module-inner">
                <div class="module-ct">

                  <div class="custom"  >
                    <ul class="social-list right">
                        <?php
                          $fbLink = carbon_get_theme_option('aiss_option_social_facebook_link');
                          $instLink = carbon_get_theme_option('aiss_option_social_instagram_link');
                          $youLink = carbon_get_theme_option('aiss_option_social_youtube_link');
                          $inLink = carbon_get_theme_option('aiss_option_social_linkedin_link');
                          $twLink = carbon_get_theme_option('aiss_option_social_twitter_link');
                          $googleLink = carbon_get_theme_option('aiss_option_social_google_link');
	                        $pinLink = carbon_get_theme_option('aiss_option_social_pinterest_link');
                        ?>

                      <?php if( $fbLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="facebook" href="<?php echo $fbLink;?>" target="_blank">
                            <span class="fa fa-facebook skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $instLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="instagram" href="<?php echo $instLink;?>" target="_blank">
                            <span class="fa fa-instagram skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $youLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="YouTube" href="" target="_blank">
                            <span class="fa fa-youtube skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $inLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="linkedin" href="" target="_blank">
                            <span class="fa fa-linkedin skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $twLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="twitter" href="<?php echo $twLink;?>" target="_blank">
                            <span class="fa fa-twitter skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $googleLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="Google+" href="<?php echo $googleLink;?>" target="_blank">
                            <span class="fa fa-google-plus skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>

                      <?php if( $pinLink ):?>
                        <li class="skew-25">
                          <a data-tooltip="true" rel="nofollow" data-title="Pinterest" href="" target="_blank">
                            <span class="fa fa-pinterest skew25"></span>
                          </a>
                        </li>
                      <?php endif;?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
