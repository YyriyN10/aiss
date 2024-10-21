<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки Блогу
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
									<div class="desktop tst2" style="background: url(<?php echo $blogMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 200px; padding: 0px;">
										<div class="row" style="text-align: center;">
											<div style="width: 800px; margin: 0px auto;">
												<h1 style="font-weight: bold; font-size: 50px; text-transform: uppercase; border: 0px solid white; color: white; padding: 10px; margin-bottom: 5px; margin-top: 70px;"><?php echo $blogMainTitle;?></h1>
											</div>
										</div>
									</div>
									<div class="mobile" style="display: none; height: 100px; background: url(<?php echo $blogMainImage;?>) 100% 100% no-repeat; background-size: cover;">
										<div class="row">
											<div class="col-md-12" style="text-align: center; margin: 0px;">
												<h2 style="font-weight: bold; font-size: 19px; text-transform: uppercase; border: 0px solid white; color: white; padding: 7px; margin-bottom: 5px; margin-top: 30px;"><?php echo $blogMainTitle;?></h2>
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

  <section id="tz-main-body-wrapper" class="blob-main-content">
    <div class="container"><div class="row" id="main-body">
        <div id="tz-message-area" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
          <section id="tz-main-wrapper" class=" ">
            <div class="row" id="main">
              <div id="tz-component-area" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <section id="tz-component-wrapper">
                  <div id="tz-component">
                    <div class="TzBlog blog masonry " >
                      <div class="TzBlogInner ">
                        <div class=" row cols-2 row-0 " >
                           <?php
                           	$blogArgs = array(
                           		'posts_per_page' => -1,
                           		'orderby' 	 => 'date',
                           		'post_type'  => 'blog',
                           		'post_status'    => 'publish'
                           	);

                           	$blogList = new WP_Query( $blogArgs );

                           		  if ( $blogList->have_posts() ) :

                           			  while ( $blogList->have_posts() ) : $blogList->the_post();
                           		?>

                                 <div class="cell-6 fx blog-post-item" data-animate="fadeInLeft">

                                      <div class="TzItem column-1">
                                        <div class="row ">
                                          <div class="cell-12 ">
                                            <div class="post-image   ">
                                              <a href="<?php the_permalink();?>" class="preview">
                                                <div class="mask"></div>
                                                <div class="post-lft-info">
                                                  <div class="main-bg">


                                                    29                        <br>
                                                    дек                        <br>
                                                    2018
                                                    <span class="tri-col"></span>
                                                  </div>
                                                </div>

                                                <img

                                                   src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full')[0];?>"
                                                   alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                                                >
                                              </a>
                                            </div>
                                          </div>
                                          <div class="cell-12 ">
                                            <article class="post-content">
                                              <div class="post-info-container">
                                                <div class="post-info">
                                                  <h2 class="TzBlogTitle">
                                                    <a class="main-color" href="<?php the_permalink();?>" >
                                                      <?php the_title();?>
                                                    </a>
                                                  </h2>
                                                  <ul class="post-meta">

                                                  </ul>
                                                </div>
                                              </div>
                                              <p itemprop="description">
                                                <?php the_excerpt();?>
                                                <a class="read-more" href="<?php the_permalink();?>">
                                                  Детальніше
                                                </a>
                                              </p>
                                            </article>
                                          </div>
                                        </div>
                                        <div class="item-separator"></div>
                                        <div class="clr"></div>
                                      </div>
                                    </div>
                           		<?php endwhile;?>
                           	<?php endif; ?>
                           <?php wp_reset_postdata(); ?>
                        </div>

                        <div class="pagin pager skew-25">

                          <ul>
                            <li class="disabled">
                              <a>
                                <i class="fa fa-angle-double-left"></i>
                              </a>
                            </li>
                            <li class="disabled">
                              <a>
                                <i class="fa fa-angle-left"></i>
                              </a>
                            </li>
                            <li class="active" >
                              <a>1</a>
                            </li>
                            <li>
                              <a title="2" href="polezno-znat%3Fstart=6.html" class="pagenav skew25">2</a>
                            </li>
                            <li>
                              <a title="3" href="polezno-znat%3Fstart=12.html" class="pagenav skew25">3</a>
                            </li>
                            <li>
                              <a title="4" href="polezno-znat%3Fstart=18.html" class="pagenav skew25">4</a>
                            </li>
                            <li>
                              <a title="5" href="polezno-znat%3Fstart=24.html" class="pagenav skew25">...</a>
                            </li>
                            <li>
                              <a title="6" href="polezno-znat%3Fstart=30.html" class="pagenav skew25">6</a>
                            </li>
                            <li>
                              <a title="7" href="polezno-znat%3Fstart=36.html" class="pagenav skew25">7</a>
                            </li>
                            <li>
                              <a title="8" href="polezno-znat%3Fstart=42.html" class="pagenav skew25">8</a>
                            </li>
                            <li>
                              <a title="9" href="polezno-znat%3Fstart=48.html" class="pagenav skew25">9</a>
                            </li>
                            <li>
                              <a title="Вперёд" href="polezno-znat%3Fstart=6.html" class="pagenav skew25">
                                <i class="fa fa-angle-right"></i>
                              </a>
                            </li>
                            <li>
                              <a title="В конец" href="polezno-znat%3Fstart=48.html" class="pagenav skew25">
                                <i class="fa fa-angle-double-right"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>

        <aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "><div class="tz-module module " id="Mod223"><div class="module-inner"><h3 class="module-title widget-head">популярные теги</h3><div class="module-ct"><div class="widget tags-w fx" data-animate="fadeInRight">

                  <div class="widget-content">
                    <div class="tags">
                      <a href="polezno-znat/tags/ryterna/14.html">ryterna</a>

                      <a href="polezno-znat/tags/avtomatika-dlya-vorot/15.html">автоматика для ворот</a>

                      <a href="polezno-znat/tags/garazhnye-vorota/13.html">гаражные ворота</a>

                      <a href="polezno-znat/tags/remont-vorot/12.html">ремонт ворот</a>


                    </div>
                  </div>
                </div></div></div></div><div class="tz-module module " id="Mod220"><div class="module-inner"><h3 class="module-title widget-head">популярные статьи</h3><div class="module-ct">
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
                                                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        дек 29, 2018,                                    </span>
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
                                                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        дек 28, 2018,                                    </span>
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
                                                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        дек 26, 2018,                                    </span>
                            <a href="polezno-znat/dva-tipa-firmennykh-sdvizhnykh-vorot-aiss-grupp-dlya-vashego-ob-ekta/161.html">
                              <i class="fa fa-comments"></i>0                                    </a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div></div></div></div><div class="tz-module module " id="Mod440"><div class="module-inner"><div class="module-ct">

                <div class="custom"  >
                  <img src="images/card1.jpg" alt=""/></div>
              </div></div></div></aside>
      </div></div></section>

<?php get_footer();
