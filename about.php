<?php
include ("includes/include.php")
?>
    <!-- body -->
    <body>
    <?php
      include ("includes/header.php")
      ?>
      <div class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="feature.php">Feature</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.php">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section end -->
      </div>
      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="image_2"><img src="images/img-2.png"></div>
            </div>
            <div class="col-md-6">
              <h1 class="makes_text">What Makes Us Different</h1>
              <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and</p>
              <div class="read_bt"><a href="#">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h1 class="about_text">About Us</h1>
              <p class="lorem_footer_text">It is a long established fact that a reader will be distracted by the readable LoremIt is a long established fact that a reader will be distracted</p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <h1 class="about_text">Contact Us</h1>
              <p class="lorem_footer_text">It is a long established fact that a reader will be distracted by the readable LoremIt is a long established fact that a reader will be distracted</p>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="footer_section_2">
            <div class="row">
              <div class="col-md-6">
              <form action="subscribe.php" method="post">
                <input type="text" class="email_bt_2" placeholder="Phone Numbar" name="phone">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
              </form>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
                <div class="social-box">
                  <a href="">
                    <img src="images/fb-icon.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/twitter-icon.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/linkedin-icon.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/instagram-icon.png" alt="">
                  </a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <?php
include ("includes/copyright.php")
?>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   </html>