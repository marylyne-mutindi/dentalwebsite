<?php
include("includes/include.php")
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
      <!-- team section start -->
      <div class="team_section layout_padding padding_top_0">
        <div class="container">
          <p class="who_text">Professionals who are immensely experienced</p>
          <h1 class="highly_text">Highly Qualified Team Of Dentists</h1>
          <div class="team_section_2">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="image_4"><img src="images/img-4.png"></div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <p class="lorem_ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of </p>
                <div class="read_bt_main">
                  <div class="read_bt_2"><a href="#">Read More</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="image_5"><img src="images/img-5.png"></div>
                <h2 class="johanson_text">Dr. Johnson Deo</h2>
                <h3 class="orthodontist_text">M.D, Orthodontist</h3>
                <div class="image_5"><img src="images/img-7.png"></div>
                <h2 class="johanson_text">Dr. Johnson Mark</h2>
                <h3 class="orthodontist_text">D.D, Orthodontist</h3>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="image_5"><img src="images/img-6.png"></div>
                <h2 class="johanson_text">Dr. Johnson Mark</h2>
                <h3 class="orthodontist_text">L.D, Orthodontist</h3>
                <div class="image_5"><img src="images/img-8.png"></div>
                <h2 class="johanson_text">Dr. Johnson Mark</h2>
                <h3 class="orthodontist_text">D.D, Orthodontist</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- team section end -->
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