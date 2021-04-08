<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- title -->
  <title>App Lab</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon -->
  <!--<link href="assets/img/favicon.png" type="image/png" rel="icon">-->

  <!-- all scss and css here -->
  <?php wp_head(); ?>

</head>

<body data-spy="scroll" data-target="#menu" data-offset="80">

  <!-- 01 header area start -->
  <header>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-10 text-left">
          <!--logo start-->
          <?php $hlogo = get_field('logo') ?>
          <div class="logo">
            <a href="#">
              <img src="<?php echo $hlogo['header_logo'] ?>" alt="">
            </a>
          </div>
          <!--logo end-->
        </div>
        <div class="col-lg-10 col-md-9 col-2">
          <div class="try_btn">
            <a href="<?php echo $hlogo['link'] ?>" class="button"><?php echo $hlogo['try_for_free'] ?></a>
          </div>
          <!--menu start-->
          <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class' ) ); 
          ?>
          <!-- <ul id="menu">
            <li class="nav-item">
              <a href="#home" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="#key_feature" class="nav-link menu_link">Key Features</a>
            </li>
            <li class="nav-item">
              <a href="#pricing" class="nav-link menu_link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="#testimonial" class="nav-link menu_link">Testiminial</a>
            </li>
            <li class="nav-item">
              <a href="#faq" class="nav-link menu_link">FAQ</a>
            </li>
          </ul> -->
          <!--menu end-->

          <div class="hamburger-menu">
            <span class="line-top"></span>
            <span class="line-center"></span>
            <span class="line-bottom"></span>
          </div>

        </div>
      </div>
    </div>
  </header>
  <!-- 01 header area end -->