  <?php get_header(); ?>
  <!-- 02. home area start -->
  <?php $banner_fields = get_field('banner_fields') ?>
  <div class="home_wrapper" style="background-image: url(<?php echo $banner_fields['banner_bg_image']; ?>);" id="home">
    <div class="home_shape">
      <img class="shape_ab animate heardbeat round1" src="<?php bloginfo('template_directory') ?>/assets/img/shape1.png" alt="">
      <img class="shape_ab animate heardbeat round2" src="<?php bloginfo('template_directory') ?>/assets/img/shape1.png" alt="">
      <img class="shape_ab animate heardbeat round3" src="<?php bloginfo('template_directory') ?>/assets/img/shape1.png" alt="">
      <img class="shape_ab animate rotateme round_4" src="<?php bloginfo('template_directory') ?>/assets/img/shape2.png" alt="">
      <img class="shape_ab animate heardbeat round_5" src="<?php bloginfo('template_directory') ?>/assets/img/shape3.png" alt="">
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-12">
          <div class="home_box">
            <div class="homefirst_txt d-inline-flex align-items-center">
              <img src="<?php bloginfo('template_directory') ?>/assets/img/home_icon.png" class="img-fluid" alt="">
              <p><?php echo $banner_fields['small_tag']; ?></p>
            </div>
            <h2><?php echo $banner_fields['banner_main_title']; ?></h2>
            <p class="mt_10"><?php echo $banner_fields['banner_sub_title']; ?></p>
            <div class="mt_35">
              <a class="button" href="<?php echo $banner_fields['banner_1st_btn_link']; ?>"><?php echo $banner_fields['banner_1st_btn']; ?></a>
              <a href="<?php echo $banner_fields['banner_2nd_btn_link']; ?>" id="#" class="watch_btn"><?php echo $banner_fields['banner_2nd_btn_vedio_title']; ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="home_img text-center text-lg-right">
            <img src="<?php echo $banner_fields['banner_side_image']; ?>" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 02. home area end -->

  <main>
    <!-- 03. client area start -->
    <div class="client_wrapper section_padd">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 mt_30">
            <div class="client_head text-center">
              <p>Trusted by companies like</p>
            </div>


            <div class="owl-carousel client_carousel">

            <?php 
                $images = get_field('company_logo');
                if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                            <div class="item d-flex align-items-center justify-content-center">
                              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" class="img-fluid" alt="">
                            </div>
                        <?php endforeach; ?>
                <?php endif; ?>
     
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 03. client area end -->

  <?php $app_feature = get_field('apps_feature'); ?>
    <!-- 04. app feature area start -->
    <div class="awesomeapp_wrapper section_padd" id="key_feature">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-5 mt_30">
            <div class="awesomeapp_img">
              <img src="<?php echo $app_feature['right_side_app_feature_image']; ?>" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 mt_30">
            <div>
              <div class="appfeature_head">
                <h2 class="title_head mb_30"><?php echo $app_feature['main_title']; ?></h2>
                <p><?php echo $app_feature['sub_title']; ?></p>
              </div>
              <div class="app_item d-flex align-items-center">
                <div class="appimg_bg appimg_bg1">
                  <img src="<?php echo $app_feature['1st_feature_icon']; ?>" class="img-fluid" alt="">
                </div>
                <div class="app_subitem">
                  <h3 class="sub_title default_color1 mb_20"><?php echo $app_feature['1st_feature_title']; ?></h3>
                  <p><?php echo $app_feature['1st_feature_sub_title']; ?></p>
                </div>
              </div>
              <div class="app_item d-flex align-items-center">
                <div class="appimg_bg appimg_bg2">
                  <img src="<?php echo $app_feature['2nd_feature_icon']; ?>" class="img-fluid" alt="">
                </div>
                <div class="app_subitem">
                  <h3 class="sub_title default_color2 mb_20"><?php echo $app_feature['2nd_feature_title']; ?></h3>
                  <p><?php echo $app_feature['2nd_feature_sub_title']; ?></p>
                </div>
              </div>
              <div class="app_item d-flex align-items-center">
                <div class="appimg_bg appimg_bg3">
                  <img src="<?php echo $app_feature['3rd_feature_icon']; ?>" class="img-fluid" alt="">
                </div>
                <div class="app_subitem">
                  <h3 class="sub_title default_color3 mb_20"><?php echo $app_feature['3rd_feature_title']; ?></h3>
                  <p><?php echo $app_feature['3rd_feature_sub_title']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 04. app feature area end -->

    <?php $smart_jackpot = get_field('smart_jackpots') ?>
    <!-- 05. smart jackpot area start -->
    <div class="smartjack_wrapper section_padd">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mt_30">
            <div class="smartjack_head">
              <h2 class="title_head"><?php echo $smart_jackpot['right_title'] ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mt_30">
            <div class="smartjack_subhead">
              <p><?php echo $smart_jackpot['left_text'] ?></p>
            </div>
          </div>
          <?php

        // Check rows exists.
        if( have_rows('small_jackpot_types') ): ?>

            <?php  while( have_rows('small_jackpot_types') ) : the_row(); 
            
              $smart_image = get_sub_field('image');
              $smart_title = get_sub_field('title');
              $smart_desc = get_sub_field('desc');

            ?>

            <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="smartjact_item">
              <div class="appimg_bg appimg_bg1 mb_30">
                <img src="<?php echo $smart_image; ?>" class="img-fluid" alt="">
              </div>
              <h3 class="sub_title default_color1"><?php echo $smart_title; ?></h3>
              <p class="mt_15"><?php echo $smart_desc; ?>
              </p>
            </div>
          </div>

          <?php endwhile; ?>

    
     <?php endif; ?>
          
        </div>
      </div>
    </div>
    <!-- 05. smart jackpot area end -->


    <!-- 06. design & build area start -->
    <?php $design_build = get_field('design_tech') ?>
    <div class="designbuild_wrapper border_bottm section_padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 order-sm-last order-md-first mt_30">
            <div class="desingbuild_img">
              <img src="<?php echo $design_build['left_image'] ?>" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xl-5 offset-xl-1 order-sm-first order-md-last mt_30">
            <div class="designbuild_box">
              <h2 class="title_head mb_30"><?php echo $design_build['title'] ?></h2>
              <p><?php echo $design_build['desc'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 06. design & build area end -->


    <!-- 07. choose our app area start -->
    <?php $app_sec = get_field('choose_our_app');?>
    <div class="chooseourapp_wrapper section_padd">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 mt_30 text-center">
            <div class="chooseourapp_head">
              <h2 class="title_head"><?php echo $app_sec['title'] ?></h2>
              <p><?php echo $app_sec['sub_title'] ?></p>
            </div>
          </div>

          <?php

            // Check rows exists.
            if( have_rows('app_steps') ): ?>

                
               <?php while( have_rows('app_steps') ) : the_row(); 
                $app_image = get_sub_field('image');
                $app_title = get_sub_field('title');
                $app_desc = get_sub_field('desc');
               ?>
              <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                <div class="chooseapp_item">
                  <div class="appimg_bg appimg_bg1">
                    <img src="<?php echo $app_image ?>" class="img-fluid" alt="">
                  </div>
                  <h3 class="sub_title mt_30"><?php echo $app_title ?></h3>
                  <p><?php echo $app_desc ?></p>
                </div>
              </div>
                   
                <?php endwhile; ?>

           <?php endif; ?>
          
         
        </div>
      </div>
    </div>
    <!-- 07. choose our app area end -->


    <!-- 08. ultimate area start -->

    <?php $ultimate_sec = get_field('ultimate_feature');?>
    <div class="ultimatefe_wrapper section_padd overflow-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-start">
          <div class="col-lg-7 col-md-12 mt_30">
            <div class="ultimate_box">
              <h2 class="title_head mb_30"><?php echo $ultimate_sec['title'] ?></h2>
              <p><?php echo $ultimate_sec['sub_title'] ?></p>
            </div>
            <div class="row">
              <?php // Check rows exists.
            if( have_rows('feature_steps') ): ?>

                
               <?php while( have_rows('feature_steps') ) : the_row(); 
                $app_image = get_sub_field('image');
                $app_title = get_sub_field('title');
                $app_desc = get_sub_field('desc');
               ?>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="smartjact_item">
                  <div class="appimg_bg appimg_bg1 mb_30">
                    <img src="<?php echo $app_image ?>" class="img-fluid" alt="">
                  </div>
                  <h3 class="sub_title"><?php echo $app_title ?></h3>
                  <p class="mt_15"><?php echo $app_desc ?></p>
                </div>
              </div>
                   
                <?php endwhile; ?>

           <?php endif; ?>

              
         
              <div class="col-lg-12">
                <div class="ultimate_btn">
                  <a href="<?php echo $ultimate_sec['link'] ?>" class="button"><?php echo $ultimate_sec['see_more_text'] ?></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-9 mt_30 ultimate_ab">
            <div class="ultimate_image">
              <img src="<?php echo $ultimate_sec['right_img'] ?>" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 08. ultimate area  end -->


    <!-- 09. awesome feature area start -->
    <div class="getfeature_wrapper border_bottm section_padd" id="pricing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt_30 text-center">
            <div class="getfe_head">
              <h2 class="title_head">Get awesome features, without extra charges</h2>
              <p>The rise of mobile devices transforms the way we consume information entirely and the world's most
                elevant channels such as Facebook.</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 mt_30">
            <nav class="text-center">
              <div class="nav getbtn" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                  aria-controls="nav-home" aria-selected="true">Monthly</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                  aria-controls="nav-profile" aria-selected="false">Yearly</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                <div class="row">
                  <div class="col-lg-4 col-md-6 mt_30 text-center">
                    <div class="getfe_item">
                      <div class="getfe_txt">
                        <h2>$0<span>/ month</span></h2>
                        <h3>Business Class</h3>
                        <p>For small teams or office</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button">Start free trail</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-3">
                    <div class="getfe_item">
                      <div class="getfe_txt">
                        <h2>$60<span>/ month</span></h2>
                        <h3>Premium</h3>
                        <p>For small teams or office</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button">Start free trail</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-2">
                    <div class="getfe_item getfe_border">
                      <div class="getfe_txt">
                        <h2>$99<span>/ month</span></h2>
                        <h3>Pro Master</h3>
                        <p>For Best opportunities</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button mb_30">Subscribe Now</a>
                        <p>Or Start 14 days trail</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                <div class="row">
                  <div class="col-lg-4 col-md-6 mt_30 text-center">
                    <div class="getfe_item">
                      <div class="getfe_txt">
                        <h2>$0<span>/ Year</span></h2>
                        <h3>Business Class</h3>
                        <p>For small teams or office</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button">Start free trail</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-3">
                    <div class="getfe_item">
                      <div class="getfe_txt">
                        <h2>$60<span>/ Year</span></h2>
                        <h3>Premium</h3>
                        <p>For small teams or office</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button">Start free trail</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-2">
                    <div class="getfe_item getfe_border">
                      <div class="getfe_txt">
                        <h2>$99<span>/ Year</span></h2>
                        <h3>Pro Master</h3>
                        <p>For Best opportunities</p>
                      </div>
                      <div class="getfe_second">
                        <ul>
                          <li>Drag & Drop Builder</li>
                          <li>1,000's of Templates</li>
                          <li>Blog Support Tools</li>
                          <li>eCommerce Store</li>
                        </ul>
                        <a href="#" class="button mb_30">Subscribe Now</a>
                        <p>Or Start 14 days trail</p>
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
    <!-- 09. awesome feature area end -->


    <!-- 10. meet client area start -->
    <?php $client_sec = get_field('testimonials_section'); ?>
    <div class="meetclient_wrapper section_padd" id="testimonial">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-lg-6 mt_30 meetimg_ab">
            <div class="meetclient_img">
              <img src="<?php echo $client_sec['image'] ?>" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 mt_30">
            <div class="meetclient_box">
              <div class="meet_head">
                <h2 class="title_head mb_30"><?php echo $client_sec['title'] ?></h2>
                <p><?php echo $client_sec['sub_title'] ?></p>
              </div>
              <div class="owl-carousel testi_slide">
              <?php // Check rows exists.
            if( have_rows('add_testimonials') ): ?>

                
               <?php while( have_rows('add_testimonials') ) : the_row(); 
                $test_title = get_sub_field('title');
                $test_desc = get_sub_field('desc');
                $test_img = get_sub_field('image');
                $test_name = get_sub_field('name');
                $test_designation = get_sub_field('designation');
               ?>
              <div class="friendcustomize_box">
                  <div class="d-flex rating_icon">
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                  </div>
                  <h3 class="sub_title mt_30"><?php echo $test_title; ?></h3>
                  <p class="mt_30"><?php echo $test_desc; ?></p>
                  <div class="meet_man d-flex align-items-center">
                    <img src="<?php echo $test_img; ?>" class="meet_size" alt="">
                    <div class="meet_txt">
                      <h4><?php echo $test_name; ?></h4>
                      <span><?php echo $test_designation; ?></span>
                    </div>
                  </div>
                </div>
                   
                <?php endwhile; ?>

           <?php endif; ?>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 10. meet client area end -->


    <!-- 11. freequently area start -->
    <?php $faq_sec = get_field('faq_section') ?>
    <div class="frequently_wrapper section_padd border_bottm" id="faq">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 mt_30 text-center">
            <div class="frequently_head">
              <h2 class="title_head mb_30"><?php echo $faq_sec['title'] ?></h2>
              <p><?php echo $faq_sec['sub_title'] ?></p>
            </div>
          </div>
          <div class="col-lg-10 mt_30">
            <div class="accordion">
              <div class="card">
                <div class="card-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to contact with
                      riders<br> emergency?
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                  <div class="card-body">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                  </div>
                </div>
              </div>

              <div class="card mt_15">
                <div class="card-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse"
                      data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">App installation
                      failed, how to<br> update system information?</button>
                  </h2>
                </div>
                <div id="collapsetwo" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                  </div>
                </div>
              </div>

              <div class="card mt_15">
                <div class="card-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse"
                      data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">Website reponse
                      taking<br> time, how to improve?</button>
                  </h2>
                </div>
                <div id="collapsethree" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                  </div>
                </div>
              </div>

              <div class="card mt_15">
                <div class="card-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse"
                      data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">New update fixed
                      all bug <br> and issues</button>
                  </h2>
                </div>
                <div id="collapsefour" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                  </div>
                </div>
              </div>

              <div class="card mt_15">
                <div class="card-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse"
                      data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">How to contact with
                      riders <br> emergency?</button>
                  </h2>
                </div>
                <div id="collapsefive" class="collapse" data-parent=".accordion">
                  <div class="card-body">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 11. freequently area start -->


    <!-- 12. download area start -->
    <?php $download_app = get_field('download_app');?>
    <div class="download_wrapper section_padd overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 mt_30">
            <div class="download_box">
              <h2 class="title_head mb_30"><?php echo $download_app['title'];?></h2>
              <p><?php echo $download_app['desc'];?></p>
              <div class="d-flex align-items-center flex-wrap">
                <a href="#"><img src="<?php echo $download_app['google_app_img'];?>" class="img-fluid mr_30" alt=""></a>
                <a href="#"><img src="<?php echo $download_app['ios_app_img'];?>" class="img-fluid" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 download_ab">
            <div class="download_img">
              <img src="<?php echo $download_app['right_image'];?>" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 12. download area end -->


  </main>
  <?php get_footer(); ?>