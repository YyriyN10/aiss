<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aiss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('com_tz_portfolio view-featured'); ?>>
<?php wp_body_open(); ?>
<div class="custom"  >
  <div class="page-loader">
    <div class="loader-in">

    </div>
  </div>
</div>
<div class="pageWrapper fixedPage">

  <section id="tz-top-bar-wrapper" class="top-bar">
    <div class="container"><div class="row" id="top-bar">
        <div id="tz-top-bar-1" class="col-lg-5 col-md-5 col-sm-6 col-xs-12 ">
          <div class="tz-module module " id="Mod137">
            <div class="module-inner">
              <div class="module-ct">

                <div class="custom"  >
                  <ul class="right-bar">
                      <?php
                        $mainEmail = carbon_get_theme_option('aiss_option_contact_main_email');
                        $mainPhone = carbon_get_theme_option('aiss_option_contact_main_phone');

	                      $phoneToColl = preg_replace( '/[^0-9]/', '', $mainPhone);

                        if ( $mainEmail ):
                      ?>
                    <li>
                      <span>
                         <a href="mailto:<?php echo antispambot($mainEmail, 1);?>>">
                           <i class="fa fa-envelope"></i><?php echo antispambot($mainEmail, 0);?>
                         </a>
                      </span>
                    </li>
                    <?php endif;?>
	                  <?php if( str_contains(strval($mainPhone), '+') ):?>
                      <li>
                        <span>
                          <a href="tel:+<?php echo $phoneToColl;?>">
                            <i class="fa fa-phone"></i> <?php echo $mainPhone;?>
                          </a>
                        </span>
                      </li>
	                  <?php else :?>
                      <li>
                        <span>
                          <a href="tel:<?php echo $phoneToColl;?>">
                            <i class="fa fa-phone"></i> <?php echo $mainPhone;?>
                          </a>
                        </span>
                      </li>
	                  <?php endif;?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="tz-top-bar-2" class="col-lg-7 col-md-7 col-sm-6 col-xs-12  pull-right">
          <div class="tz-module module " id="Mod336">
            <div class="module-inner">
              <div class="module-ct">
                <div class="custom">
	                <?php
                     wp_nav_menu(
                      array(
                          'theme_location' => 'menu_1',
                          'menu_id'        => 'header-top',
                           'container' => false,
                           'menu_class' => 'right',
                          'walker'          => new Header_Top_Walker_Nav_Menu()

                        )
                      );
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<header id="tz-header-wrapper" class="site-header top-head">
    <div class="container">
      <div class="row" id="header">
	      <?php if( is_front_page() ):?>
          <div id="tz-logo" class="col-lg-4 col-md-3 col-sm-12 col-xs-12  marg-top-20">
            <div id="tzlogo">
              <img src="<?php echo carbon_get_theme_option('aiss_option_logo');?>" alt="aiss.com.ua - "/>
            </div>
          </div>
	      <?php else:?>
          <div id="tz-logo" class="col-lg-4 col-md-3 col-sm-12 col-xs-12  marg-top-20">
            <a href="<?php echo get_home_url('/');?>" id="tzlogo">
              <img src="<?php echo carbon_get_theme_option('aiss_option_logo');?>" alt="aiss.com.ua - "/>
            </a>
          </div>
	      <?php endif;?>

        <div id="tz-menu" class="col-lg-8 col-md-9 col-sm-12 col-xs-12  pull-right">
          <nav id="plazart-mainnav" class="wrap plazart-mainnav  navbar navbar-default">
            <div class="navbar-inner">
              <div class="navbar-header">
                <button type="button" class=" btn-navbar menuBtn navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                  <i class="fa fa-bars"></i>
                </button>
              </div>

              <div class="top-nav nav-collapse navbar-collapse no-padding collapse always-show nav-3" data-sticky="true" >
                <h3 class="title_menu">Menu Navigation</h3>
                <div class="plazart-megamenu animate zoom always-show" data-duration="400">
	                <?php
		                wp_nav_menu(
			                array(
				                'theme_location' => 'menu_2',
				                'menu_id'        => 'header-main',
				                'container' => false,
				                'menu_class' => 'nav navbar-nav level0',
				                'walker'          => new Header_Main_Walker_Nav_Menu()

			                )
		                );
	                ?>
                 <!-- <ul class="nav navbar-nav level0">
                    <li class="current active" data-id="137" data-level="1" data-xicon="fa fa-home">
                      <a class="" href="index.html%3Fview=featured&amp;format=feed&amp;type=atom.html">
                        <i class="fa fa-home"></i>Головна
                      </a>
                    </li>
                    <li  data-id="110" data-level="1" data-hidesub="1" data-xicon="fa fa-gift">
                      <a class="" href="products.html"  >
                        <i class="fa fa-gift"></i>Продукція
                      </a>
                    </li>
                    <li class="dropdown mega" data-id="111" data-level="1" data-xicon="fa fa-copy">
                      <a class=" dropdown-toggle" href="servis%3Fview=featured.html"   data-toggle="dropdown">
                        <i class="fa fa-copy"></i>Сервіс <b class="caret"></b>
                      </a>
                      <div class="nav-child dropdown-menu mega-dropdown-menu"  >
                        <div class="mega-dropdown-inner">
                          <div class="row">
                            <div class="col-md-12 mega-col-nav" data-width="12">
                              <div class="mega-inner">
                                <ul class="mega-nav level1">
                                  <li  data-id="495" data-level="2">
                                    <a class="" href="servis/remont-sektsionnykh-vorot-garazhnykh-i-promyshlennykh.html"  >Ремонт секційних воріт гаражних та промислових </a>
                                  </li>
                                  <li  data-id="496" data-level="2">
                                    <a class="" href="servis/remont-otkatnykh-vorot.html"  >Ремонт відкатних воріт </a>
                                  </li>
                                  <li  data-id="497" data-level="2">
                                    <a class="" href="servis/remont-rolstavnej-rollet.html"  >Ремонт рольставнів ролет </a>
                                  </li>
                                  <li  data-id="499" data-level="2">
                                    <a class="" href="servis/remont-avtomatiki-dlya-vorot-potolochnoj-otkatnoj-raspashnoj.html"  >Ремонт автоматики для воріт стельової відкатної розстібної </a>
                                  </li>
                                  <li  data-id="500" data-level="2">
                                    <a class="" href="servis/remont-shlagbaumov.html"  >Ремонт шлагбаумів </a>
                                  </li>
                                </ul>
                              </div></div>
                          </div>
                        </div></div>
                    </li>
                    <li  data-id="112" data-level="1" data-xicon="fa fa-suitcase">
                      <a class="" href="primery-rabot%3Fkartinka-avtomaticheskih-raspashnih-vorot-s-kovkoy-na-chastnom-objekte.html"  >
                        <i class="fa fa-suitcase"></i>Приклади робіт
                      </a>
                    </li>
                    <li  data-id="127" data-level="1" data-xicon="fa fa-leaf">
                      <a class="" href="polezno-znat%3Flimitstart=0.html"  ><i class="fa fa-leaf"></i>Корисно знати </a>
                    </li>
                    <li  data-id="114" data-level="1" data-xicon="fa fa-phone">
                      <a class="" href="contact.html"  ><i class="fa fa-phone"></i>Контакти </a>
                    </li>
                  </ul>-->
                </div>

              </div>
              <div class="top-search">

              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
	</header>
  <main>
