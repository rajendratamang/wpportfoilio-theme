<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon icon -->
  <?php if (function_exists('has_site_icon') && has_site_icon()) : ?>
    <link rel="icon" href="<?php echo get_site_icon_url(); ?>" type="image/png">
  <?php else : ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
  <?php endif; ?>

  <!-- site name -->
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- header section -->
  <section class="banner" role="banner">
    <header id="header">
      <!-- navigation section  -->
      <!-- <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/logo.png" alt="Mafolio"></a> -->
      <div class="header-content clearfix">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else { ?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"> -->
            <h4 class="logo-text">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
              </a>
            </h1>
          <?php } ?>
        </a>
      </div>

      <nav class="navigation" role="navigation">
        <?php wp_nav_menu( array('theme_location' =>) ); ?>
        <!-- <ul class="primary-nav">
          <li><a href="#aboutme">About Me</a></li>
          <li><a href="#works">Works</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->


      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
      <!-- navigation section  -->
    </header>

    <!-- banner text -->
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <?php
          if (is_active_sidebar('banner')) {
            dynamic_sidebar('banner');
          }
          ?>
          <!-- banner text -->
        </div>
      </div>
    </div>
  </section>
  <!-- header section -->
  <!-- description text section -->
  <section id="aboutme" class="section descripton">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 text-center">
        <?php
        if (is_active_sidebar('about-me')) {
          dynamic_sidebar('about-me');
        }
        ?>
        <!-- <img src="images/designer-pic.jpg" alt="Mafolio">
        <h1>Johnathan Doe</h1>
        <p>UX Designer/ Developer</p>
        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
      -->
      </div>
    </div>
  </section>
  <!-- description text section -->
  <!-- portfolio section -->
  <section id="works" class="works section no-padding">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-1.jpg" class="work-box"> <img src="images/work-1.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Logo Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-2.jpg" class="work-box"> <img src="images/work-2.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Website Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-3.jpg" class="work-box"> <img src="images/work-3.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Branding</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Graphic Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Website Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Logo Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Branding</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
        <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5>Project Name</h5>
                <p>Website Design</p>
              </div>
            </div>
            <!-- overlay -->
          </a> </div>
      </div>
    </div>
  </section>
  <!-- portfolio section -->


  <!-- hire me section -->
  <section id="hireme" class="section hireme">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <?php
        if (is_active_sidebar('hire-me')) {
          dynamic_sidebar('hire-me');
        }
        ?>
        <a href="#contact" class="btn btn-large">Hire me</a>
      </div>
    </div>
  </section>
  <!-- hire me section -->



  <section id="contact" class="section contact">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h3>Drop me a line</h3>
        <p>I am honest, discreet and always focus on your goals. If you are looking for a strategist and experienced designer, just leave me a message and I'll contact you soon.</p>
        <!--contact form start-->
        <div class="col-md-6 col-md-offset-3 conForm">
          <div id="message"></div>
          <form method="post" action="php/contact.php" name="cform" id="cform">
            <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name...">
            <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address...">
            <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea>
            <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
            <div id="simple-msg"></div>
          </form>
        </div>
        <!--contact form end-->
      </div>
    </div>
  </section>


  <!-- footer -->
  <footer class="section footer">
    <div class="footer-bottom">
      <div class="container">
        <div class="col-md-12">
          <p>
          <ul class="footer-share">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
          </ul>
          </p>
          <p>© 2024 All rights reserved. All Rights Reserved<br>
            Made with <i class="fa fa-heart pulse"></i> by <a href="">Rajendra Tamang</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- JS FILES -->

  <?php wp_footer(); ?>

</body>

</html>