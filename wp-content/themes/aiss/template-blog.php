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
									<div class="desktop tst2" style="background: url(<?php echo $blogMainImage;?>) 100% 100% no-repeat;">
										<div class="row" >
											<div>
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
                        <div class="row post-list">
                           <?php

                           	$blogArgs = array(
                           		'posts_per_page' => 6,
                           		'orderby' 	 => 'date',
                           		'post_type'  => 'blog',
                           		'post_status'    => 'publish',
                              'paged' => $wp_query->get( 'paged' ),
                           	);

                           	$blogList = new WP_Query( $blogArgs );

                           		  if ( $blogList->have_posts() ) :

                           			  while ( $blogList->have_posts() ) : $blogList->the_post();
                           		?>

                                 <div class="cell-6 fx blog-post-item" data-animate="fadeInLeft">

                                      <div class="TzItem">
                                        <div class="row ">
                                          <div class="cell-12 ">
                                            <div class="post-image   ">
                                              <a href="<?php the_permalink();?>" class="preview">
                                                <div class="mask"></div>
                                                <div class="post-lft-info">
                                                  <div class="main-bg">

	                                                  <?php echo get_the_date('j');?><br>
	                                                  <?php echo get_the_date('M');?><br>
	                                                  <?php echo get_the_date('Y');?>
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
                                              <div class="description">
                                                <?php the_excerpt();?>
                                                <a class="read-more" href="<?php the_permalink();?>">
                                                  Детальніше
                                                </a>
                                              </div>
                                            </article>
                                          </div>
                                        </div>
                                        <div class="item-separator"></div>
                                        <div class="clr"></div>
                                      </div>
                                    </div>
                           		<?php endwhile;?>
                           	<?php endif; ?>
                        </div>

                        <div class="pagin pager skew-25">
                        <?php

                          $big = 999999999;
                           $blogPagination =  paginate_links( array(
	                            'prev_next' => false,
                              'end_size' => 4,
                              'mid_size' => 1,
                              'type' => 'list',
                              'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                              'format' => '?paged=%#%',
                              'current' => max( 1, get_query_var('paged') ),
                              'total' => $blogList->max_num_pages
                          ) );?>


                          <ul>
	                          <?php global $wp_query;
		                          $current_page = $wp_query->get( 'paged' );

		                          $prev_url = strtok(get_previous_posts_page_link(), '?');

		                          if($prev_url && $current_page!=1 && $_REQUEST['set_posts_per_page']!='')
			                          $prev_url.="?set_posts_per_page=".$_REQUEST['set_posts_per_page'];

		                          if($prev_url && $current_page!=0) : ?>
                                    <?php
                                    $first_page = 1;

                                    if ( $current_page != $first_page ):?>
                                       <li>
                                         <a href="<?php echo get_pagenum_link( $first_page ); ?>">
                                           <i class="fa fa-angle-double-left"></i>
                                         </a>
                                       </li>
		                                <?php endif;?>
                                <li>
                                  <a href="<?php echo $prev_url; ?>">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                </li>
                               <?php else:?>
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
		                          <?php endif;?>

                              <?php echo $blogPagination;?>
	                          <?php if ( $next_url = get_next_posts_page_link( $blogList->max_num_pages )): ?>
                              <li>
                                <a title="Вперёд" href="<?php echo $next_url ?>" class="pagenav skew25">
                                  <i class="fa fa-angle-right"></i>
                                </a>
                              </li>
	                            <?php
                                $last_page = $blogList->max_num_pages;

                                if ( $current_page != $last_page ):?>
                                  <li>
                                    <a title="В конец" href="<?php echo get_pagenum_link( $last_page ); ?>" class="pagenav skew25">
                                      <i class="fa fa-angle-double-right"></i>
                                    </a>
                                  </li>
                              <?php endif;?>
                            <?php else:?>
                              <li class="disabled">
                                <a>
                                  <i class="fa fa-angle-right"></i>
                                </a>
                              </li>
                              <li class="disabled">
                                <a>
                                  <i class="fa fa-angle-double-right"></i>
                                </a>
                              </li>
	                          <?php endif; ?>
                          </ul>
	                        <?php wp_reset_postdata();?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>

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
