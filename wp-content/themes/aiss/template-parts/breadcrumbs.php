<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	?>

<section id="tz-breadcrumbs-wrapper" class="page-title title-3 custom-breadcrumbs">
  <div class="container">
    <div class="row" id="breadcrumbs">
      <div id="tz-breadcrumbs" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
        <div class="tz-module module " id="Mod17">
          <div class="module-inner">
            <div class="module-ct">
              <div class="breadcrumbs main-bg fx animated fadeInUp" data-animate="fadeInUp">
                <ul class="breadcrumb">
                  <li class="active">
                    <span class="divider icon-location">

                    </span>
                  </li>
                  <li>
                    <a href="<?php echo get_home_url('/');?>" class="pathway">Головна</a>
                    <span class="divider"></span>
                  </li>
                    <?php
	                    global $post;

	                    $termService = get_the_terms( get_the_ID(), 'service_tax' );
	                    $termProduct = get_the_terms( get_the_ID(), 'product_page_tax' );
	                    $termProductSingle = get_the_terms( get_the_ID(), 'products_tax' );

	                    $termBlogSingle = get_the_category($post->ID);

	                    $singleBlogTemplateArgs = [
		                    'post_type' => 'blog',
		                    'fields' => 'ids',
		                    'nopaging' => true,
		                    'meta_key' => '_wp_page_template',
		                    'meta_value' => 'template-blog-post.php'
	                    ];

	                    $termBlogSingle = get_posts( $singleBlogTemplateArgs );

	                    if( $termService ):

	                      $term = array_shift( $termService );
                          ?>
                        <li>
                          <a href="<?php echo carbon_get_term_meta($term->term_id, 'aiss_service_post_fields_category_link');?>" class="pathway">Сервіс</a>
                          <span class="divider"></span>
                        </li>
                      <?php elseif ( $termProduct ):



                        if ( $post->post_parent ):?>

                          <li>
                            <a href="<?php echo get_permalink( $post->post_parent );?>" class="pathway"><?php echo get_the_title( $post->post_parent );?></a>
                            <span class="divider"></span>
                          </li>
                        <?php else:?>
	                        <?php
                            $innerProductCrumbArgs = array(
                              'tax_query' => array(
                                array(
                                  'taxonomy' => 'product_page_tax',
                                  'field' => 'id',
                                  'lang' => false,
                                  'suppress_filters' => false,
                                  'terms' => $termProduct[0]->term_id

                                )
                              ),
                              'post_type' => 'page',
                              'orderby' 	 => 'date',
                              'suppress_filters' => false,
                              'lang' => false,
                              'posts_per_page' => -1

                            );

	                        $innerProductCrumbList = new WP_Query( $innerProductCrumbArgs );

	                        if ( $innerProductCrumbList->have_posts() ) :?>
	                          <?php	while ( $innerProductCrumbList->have_posts() ) : $innerProductCrumbList->the_post(); ?>
                              <li>
                                <a href="<?php echo get_permalink( wp_get_post_parent_id(get_the_ID()) );?>" class="pathway">
                                    <?php echo get_the_title( wp_get_post_parent_id(get_the_ID()) );?>
                                </a>
                                <span class="divider"></span>
                              </li>
                              <li>
                                <a href="<?php echo get_permalink();?>" class="pathway">
			                        <?php echo get_the_title( );?>
                                </a>
                                <span class="divider"></span>
                              </li>
	                          <?php endwhile;?>
                          <?php endif; ?>
	                        <?php wp_reset_postdata(); ?>

                        <?php endif;?>
                      <?php elseif( $termBlogSingle ):?>

                          <?php foreach( $termBlogSingle as $thisBlogPost):?>
                              <?php if( $thisBlogPost == get_the_ID() ):?>

                                  <?php
                                    $blogTemplateArgs = array(
                                      'post_type' => 'page',
                                      'fields' => 'ids',
                                      'nopaging' => true,
                                      'meta_key' => '_wp_page_template',
                                      'meta_value' => 'template-blog.php'
                                    );

                                    $blogPages = get_posts( $blogTemplateArgs );

                                    $tagsTemplateArgs = array(
                                      'post_type' => 'page',
                                      'fields' => 'ids',
                                      'nopaging' => true,
                                      'meta_key' => '_wp_page_template',
                                      'meta_value' => 'template-tags.php'
                                    );

                                    $tagPages = get_posts( $tagsTemplateArgs );
                                  ?>
                                  <?php
                                  if ( $blogPages ):?>
                                    <?php if( $tagPages[0] != get_the_ID() && $blogPages[0] != get_the_ID() ):?>
                                            <li>
                                              <a href="<?php the_permalink( $blogPages[0]);?>" class="pathway">
                                      <?php echo get_the_title( $blogPages[0] );?>
                                              </a>
                                              <span class="divider"></span>
                                            </li>
                                    <?php else:?>
                                            <li class="active">
                                              <span><?php echo get_the_title( $blogPages[0] );?></span>
                                            </li>
                                    <?php endif;?>
                                  <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>

                      <?php endif;?>
                  <?php if( $tagPages[0] != get_the_ID() && $blogPages[0] != get_the_ID()):?>
                    <li class="active">
                      <span><?php the_title();?></span>
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
