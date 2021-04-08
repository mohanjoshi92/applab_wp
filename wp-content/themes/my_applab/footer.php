  <!-- 13. footer area start -->
  <footer class="section_padd">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt_30 text-center">
        <?php $flogo = get_field('logo') ?>
          <div class="footer_box">
            <a href="#"><img src="<?php echo $flogo['footer_logo'] ?>" class="img-fluid" alt=""></a>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#key_feature">Key Features</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#testimonial">Testiminial</a></li>
              <li><a href="#faq">FAQ</a></li>
            </ul>
            <div class="footer_icon">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-slack-hash"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <span>Copyright © AppLab 2019. All rights reserved</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- 13. footer area end -->




  <!--====== BACK TO TOP START ======-->
  <a href="#" class="back-to-top"><i class="fal fa-angle-up"></i></a>
  <!--====== BACK TO TOP ENDS ======-->

  <!-- all js here -->
  <?php wp_footer(); ?>
</body>

</html>