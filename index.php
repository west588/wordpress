<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
    <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <!--<link href="http://fonts.useso.com/css?family=Cardo:400italic,400|Lato:400,400italic,700" rel="stylesheet">-->
    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/file/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/file/screen.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/file/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/zhezhaojs/css/zzsc.css">
    <style type="text/css">
    div, h1, h2, h3, p, span, a {
      font-family: "微软雅黑";
    }
    </style>
    <!-- All JavaScript at the bottom, except this Modernizr build.  -->
    <script src="<?php bloginfo('template_directory'); ?>/file/modernizr-2.5.3.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/file/respond.min.js"></script>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="<?php bloginfo('template_directory'); ?>/file/jquery.min.js"></script>
    <!-- scripts  -->
    <script src="<?php bloginfo('template_directory'); ?>/file/jquery.easing.1.3.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/file/general.js"></script>
    <!-- carousel -->
    <script src="<?php bloginfo('template_directory'); ?>/file/jquery.jcarousel.min.js"></script>
    <!-- sliders -->
    <script src="<?php bloginfo('template_directory'); ?>/file/slides.min.jquery.js"></script>
    <!--/ sliders -->
  </head>
  <body style="background-image:url(<?php bloginfo('template_directory'); ?>/file/pattern_3.png); font-family:'微软雅黑';">
    <div class="body_wrap">
      <div class="header_container">
        <?php get_header(); ?>
        <div class="header_slider">
          <div class="top_slider">
            <div class="slides_container">
              <?php
              $sticky = get_option('sticky_posts');
              rsort( $sticky );
              $sticky = array_slice( $sticky, 0, 3);
              query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1,'showposts' => 3,'cat' =>1) );
              ?>
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="slide"> <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('homecase', array( 'alt' => trim(strip_tags( $post->post_title )),'class' => 'homebanner', )); ?>
              </a>
              <div class="caption">
                <p><span style="font-size:14px;">
                  <?php the_title(); ?>
                  </span> <a href="<?php the_permalink() ?>" class="link-more">Know More</a></p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php else : ?>
              <?php endif; ?>
            </div>
          </div>
          <script>
              jQuery(document).ready(function($) {
                $('.top_slider').slides({
                  play: 7000,
                  pause: 7000,
                  hoverPause: true,
                  generateNextPrev: false,
                  effect: 'slide',
                  fadeSpeed: 250,
                  slideSpeed: 700,
                  slideEasing: 'easeInOutExpo',
                  preloadImage: 'images/loading.gif'
                });
                var pageItem = $('.top_slider .pagination li');
                var pageItemWidth = 0 / pageItem.length;
                    pageItem.css("width",""+ pageItemWidth + "%");
              });
          </script>
        </div>
        <!--/ top Slider/Image -->
      </div>
      <div class="copyrights">Collect from <a href=""  title=""></a></div>
      <div class="container">
        <!-- middle -->
        
        <div class="content" role="main" style="margin-top:50px;">
          <article class="post-detail">
            <div class="entry">
              
              <!-- 2/5 + 3 x 1/5 columns -->
              <div class="row">
                <div class="col col_2_5">
                  <div class="inner">
                    
                    <!-- text slider -->
                    <div id="slides11" class="slideshow slideText">
                      <div class="slides_container">
                        
                        
                        <?php $goa = of_get_option( 'goa'); ?>
                        <?php $goa = explode(",", $goa); ?>
                        <?php $post_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $goa ) );
                        while ($post_query->have_posts()) : $post_query->the_post();$post_ID = $post->ID; ?>
                        <div class="slide">
                          <h3 style="font-family:'微软雅黑';">
                          <?php the_title(); ?>
                          </h3>
                          <p><?php echo mb_strimwidth(strip_tags(get_the_excerpt()), 0,500,"..."); ?></p>
                          <a href="<?php the_permalink(); ?>" class="link-more">Know More</a> </div>
                          <?php endwhile;?>
                          <?php wp_reset_query(); ?>
                        </div>
                      </div>
                      <script>
                                      jQuery(document).ready(function($) {
                                        $('#slides11').slides({
                                          effect: 'fade',
                                          fadeSpeed: 0,
                                          play: 5000,
                                          pause: 5000,
                                          hoverPause: true,
                                          autoHeight: true
                                        });
                                          });
                      </script>
                    </div>
                  </div>
                  <?php $gob = of_get_option( 'gob'); ?>
                  <?php $gob = explode(",", $gob); ?>
                  <?php $post_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $gob ) );
                  while ($post_query->have_posts()) : $post_query->the_post();$post_ID = $post->ID; ?>
                  <div class="col col_1_5">
                    <div class="inner">
                      <div class="wp-caption alignnone" style="height:174px; width:158px">
                        <div class="banner"> <a href="<?php the_permalink(); ?>">
                          <!--  <img src="<?php bloginfo('template_directory'); ?>/file/framed_image_1.jpg" alt="General Practice" style="width:158px; height:126px;">-->
                          <?php the_post_thumbnail('thumbnail', array( 'alt' => trim(strip_tags( $post->post_title )),'class' => '158126 ', )); ?>
                        </a>
                        <p class="companyInfo"><img src="<?php bloginfo('template_directory'); ?>/file/hi.png"  style="margin-top:-60px;"></p>
                        <div class="cornerTL"></div>
                        <div class="cornerTR"></div>
                        <div class="cornerBL"></div>
                        <div class="cornerBR"></div>
                      </div>
                      <p class="wp-caption-text">
                        <?php the_title(); ?>
                      </p>
                    </div>
                  </div>
                </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>
              </div>
              <div id="middle" class="full_width">
                <div class="content" role="main">
                  <article class="post-detail">
                    <div class="entry">
                      
                      <!-- 2/5 + 3 x 1/5 columns -->
                      <div id="home-xm" class="row">
                        <h2><em>Service Collection</em></h2>
                        <p> <?php echo of_get_option( 'home-int' ); ?> </p>
                      </div>
                      <script>
                      $(document).ready(function(){
                        // 0.4代表遮罩的透明度
                        $('.banner div').css('opacity',0.2);
                        $('.banner').hover(function(){
                        
                          var el = $(this);
                          
                          // 先淡出阴影，后淡入文字
                          el.find('div').stop().animate({width:200,height:200},'slow',function(){
                            el.find('p').fadeIn('fast');
                          });
                        },function(){
                          var el = $(this);
                          
                          // 隐藏文字
                          el.find('p').stop(true,true).hide();
                          
                          // 去掉遮罩
                          el.find('div').stop().animate({width:60,height:60},'fast');
                        }).click(function(){
                          
                          // 点击图片时打开链接
                          
                          window.open($(this).find('a').attr('href'));
                          
                        });
                      });
                      </script>
                      <div class="clear"></div>
                      <!-- 2/5 + 3 x 1/5 columns -->
                      
                      <div class="row">
                        <?php $goc = of_get_option( 'goc'); ?>
                        <?php $goc = explode(",", $goc); ?>
                        <?php $post_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $goc ) );
                        while ($post_query->have_posts()) : $post_query->the_post();$post_ID = $post->ID; ?>
                        <div class="col col_1_6">
                          <div class="home-photo"> <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail', array( 'alt' => trim(strip_tags( $post->post_title )),'class' => ' 128*140', )); ?>
                          </a> <a href="<?php the_permalink(); ?>">
                          <h1 class="home-title-h1">
                          <?php the_title(); ?>
                          </h1>
                        </a> </div>
                      </div>
                      <?php endwhile;?>
                      <?php wp_reset_query(); ?>
                    </div>
                    <div class="divider_space"></div>
                    
                    <!-- latest news line -->
                    <div class="newsline">
                      <h2><a href="<?php echo get_category_link(2); ?>" style=" font-family:微软雅黑;">Fxbon News</a></h2>
                      <ul id="twitterlist48" class="jcarousel-skin-newsline">
                        <?php $posts = get_posts( "category=2&numberposts=3" ); ?>
                        <?php if( $posts ) : ?>
                        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                        <li><a href="<?php the_permalink() ?>">
                          <?php the_title(); ?>
                        </a></li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      </ul>
                    </div>
                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                    jQuery("#twitterlist48").jcarousel({
                    vertical: true,
                    scroll: 1,
                    animation: 300,
                    auto: 5, // Time interval in sec.
                    wrap: "circular",
                    initCallback: mycarousel_initCallback
                    });
                    });
                    </script>
                    <!--/ latest news line -->
                    
                    <div class="divider_space"></div>
                    
                    <!-- 2 Cols: 3/5 + 2/5 -->
                    <div id="home-bottom" class="row">
                      <?php $god = of_get_option( 'god'); ?>
                      <?php $god = explode(",", $god); ?>
                      <?php $post_query = new WP_Query( array( 'post_type' => 'page', 'post__in' =>$god ) );
                      while ($post_query->have_posts()) : $post_query->the_post();$post_ID = $post->ID; ?>
                      <div class="col col_1_2">
                        <div class="in-box">
                          <div id="in-bow-img">
                            <?php the_post_thumbnail('thumbnail', array( 'alt' => trim(strip_tags( $post->post_title )),'class' => ' ', )); ?>
                            <a href="<?php echo of_get_option( 'godlefthr' ); ?>">
                              <h1>
                              <?php the_title(); ?>
                              </h1>
                            </a> </div>
                            <p><?php echo mb_strimwidth(get_the_excerpt(),0,500,"...") ?></p>
                          </div>
                        </div>
                        <?php endwhile;?>
                        <?php wp_reset_query(); ?>
                        
                        
                        
                        <?php $goe = of_get_option( 'goe'); ?>
                        <?php $goe = explode(",", $goe); ?>
                        <?php $post_query = new WP_Query( array( 'post_type' => 'page', 'post__in' =>$goe ) );
                        while ($post_query->have_posts()) : $post_query->the_post();$post_ID = $post->ID; ?>
                        <div class="col col_1_2">
                          <div class="in-box">
                            <div id="in-bow-img">
                              <?php the_post_thumbnail('thumbnail', array( 'alt' => trim(strip_tags( $post->post_title )),'class' => ' ', )); ?>
                              <a href="<?php echo of_get_option( 'godrighthr' ); ?>">
                                <h1>
                                <?php the_title(); ?>
                                </h1>
                              </a> </div>
                              <p><?php echo mb_strimwidth(get_the_excerpt(),0,500,"...") ?></p>
                            </div>
                          </div>
                          <?php endwhile;?>
                          <?php wp_reset_query(); ?>
                          
                          
                        </div>
                        <!--/ 2 Cols: 3/5 + 2/5 -->
                        
                        <div class="clear"></div>
                        
                        
                        
                        
                        <!-- 2 Cols: 3/5 + numberposts=5 2/5 -->
                        <div id="home-text" class="row hometext" >
                          <?php $posts = get_posts( "category=1&numberposts=3" ); ?>
                          <?php if( $posts ) : ?>
                          <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                          
                          <div class="col col_1_3">
                            <div class="inner">
                              <h3>
                              <?php the_title(); ?>
                              </h3>
                              <p class="home-text-p"><?php echo mb_strimwidth(strip_tags(get_the_excerpt()), 0,200,"..."); ?><br>
                                <a  class="home-text-more" href="<?php the_permalink(); ?>">>>Read More</a></p>
                              </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                          </div>
                          <!--/ 2 Cols: 3/5 + 2/5 -->
                          
                          <div class="clear"></div>
                          
                          <!-- 2 Cols: 3/5 + 2/5 -->
                          <h2>FXBON Group</h2>
                          <div class="row">
                            <div class="col col_3_5">
                              <div class="inner">
                                <h3> </h3>
                                <img src="<?php bloginfo('template_directory'); ?>/file/map.jpg">
                                <div class="mapgo">
                                  <ul>
                                    <li><a href="">Shanghai</a></li>
                                    <li><a href="">London</a></li>
                                    <li><a href="">New York</a></li>
                                    <li><a href="">Sydney</a></li>
                                    <li><a href="">Limassol</a></li>
                                    <li><a href="">Vanuatu</a></li>
                                    
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col col_2_5">
                              <div class="inner">
                                <div class="widget-container newsletterBox">
                                  <h3>Contact Us:</h3>
                                  <?php echo do_shortcode( '[contact-form-7 id="351" title="联系表单 1"]' ); ?>
                                  <p style=" clear:both;"></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="clear"></div>
                          
                          <!-- 2 Cols: 3/5 + 2/5 -->
                          <div id="home-bottom" class="row">
                            <div class="col col_1_2">
                              <div class="inner">
                                <h3>Customer Recommendation:</h3>
                                <script type="text/javascript">
                                SyntaxHighlighter.defaults['gutter'] = false;
                                    SyntaxHighlighter.defaults['toolbar'] = true;
                                SyntaxHighlighter.all();
                                </script>
                                <div id="testimonials" class="slideshow slideQuotes" >
                                  <div class="slides_container" style="border:none;" >
                                    
                                    
                                    
                                    <?php  if (of_get_option( 'home-input1')) { ?>
                                    <div class="slide">
                                      <div class="quote-text" style="font-size:14px; width:350px;color:#595959;">
                                      <?php echo of_get_option( 'home-input1' ); ?> </div>
                                      <div class="quote-author"><span> <?php echo of_get_option( 'home-input1ad' ); ?></span></div>
                                    </div>
                                    <?php  }?>
                                    
                                    
                                    <?php  if (of_get_option( 'home-input2')) { ?>
                                    <div class="slide">
                                      <div class="quote-text" style="font-size:14px; width:350px;color:#595959;">
                                      <?php echo of_get_option( 'home-input2' ); ?> </div>
                                      <div class="quote-author"><span> <?php echo of_get_option( 'home-input2ad' ); ?></span></div>
                                    </div>
                                    <?php  }?>
                                    
                                    <?php  if (of_get_option( 'home-input3')) { ?>
                                    <div class="slide">
                                      <div class="quote-text" style="font-size:14px; width:350px;color:#595959;">
                                      <?php echo of_get_option( 'home-input3' ); ?> </div>
                                      <div class="quote-author"><span> <?php echo of_get_option( 'home-input3ad' ); ?></span></div>
                                    </div>
                                    <?php  }?>
                                    
                                    <?php  if (of_get_option( 'home-input4')) { ?>
                                    <div class="slide">
                                      <div class="quote-text" style="font-size:14px; width:350px;color:#595959;">
                                      <?php echo of_get_option( 'home-input4' ); ?> </div>
                                      <div class="quote-author"><span> <?php echo of_get_option( 'home-input4ad' ); ?></span></div>
                                    </div>
                                    <?php  }?>
                                    
                                    <?php  if (of_get_option( 'home-input5')) { ?>
                                    <div class="slide">
                                      <div class="quote-text" style="font-size:14px; width:350px;color:#595959;">
                                      <?php echo of_get_option( 'home-input5' ); ?> </div>
                                      <div class="quote-author"><span> <?php echo of_get_option( 'home-input5ad' ); ?></span></div>
                                    </div>
                                    <?php  }?>
                                    
                                    
                                  </div>
                                  <a href="#" class="prev">Prev</a> <a href="#" class="next">Next</a>
                                  <div class="clear"></div>
                                </div>
                                <script type="text/javascript">
                                              jQuery(document).ready(function($) {
                                                $('#testimonials').slides({
                                                  hoverPause: true,
                                                  play: 9000,
                                                  autoHeight: true,
                                                  pagination: false,
                                                  generatePagination: false,
                                                  effect: 'fade',
                                                  fadeSpeed: 150});
                                                  });
                                </script>
                              </div>
                            </div>
                            <div class="col col_1_2">
                              <div class="inner">
                                <div class="widget-container newsletterBox">
                                  <h3>Partner</h3>
                                  <a href="<?php echo of_get_option( 'pannerhr' ); ?>"><img src="<?php echo of_get_option( 'home-paner' ); ?>"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/ 2 Cols: 3/5 + 2/5 -->
                          
                          <div class="clear"></div>
                        </div>
                      </article>
                    </div>
                    <!--/ content -->
                    
                  </div>
                  <!--/ middle -->
                </div>
                <!--/ container -->
              </article>
            </div>
          </div>
          <?php get_footer(); ?>
        </div>
        <!-- /footer -->
      </body>
    </html>