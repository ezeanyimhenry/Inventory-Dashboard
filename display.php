<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EMKAS|Display</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="" rel="">
  <link href="" rel="">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style type="text/css">
    .input-txt{
    border: solid 2px ;
    -webkit-appearance:none;
    padding: 10px 5px;
    border-radius: 5px;
    border-color: #4682B4;
    }
    .input-tx:focus{
      color:#000;
    }
@media(max-width: 767px){
  ul{
   text-align: center;
  }
  </style>
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o" style="color:#4682B4;"></i> <a href="#">helpdesk@bsigroupeurope.com</a>
        <i class="fa fa-phone" style="color:#4682B4;"></i> +49 69 224489289
      </div>
      <!--
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    -->
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto"><img src="images/logo.jpg" width="60px" height="40px"><span></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="sold.php">Sell Product </a></li>
          <li><a href="bought.php">Buy Product </a></li>
          <li class="menu-active"><a href="display.php">Display Stock </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2> Available Products in Stock</h2>
     
      <h4> View product available in the database. </h4>
      
      <?php
      if(isset($msg)){

        echo "<span style='color:red; padding-top:15px;'>".$msg."</msg>";
      }

      ?>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Services Section
    ============================-->
    <br><br>
    <section id="services">
      <div class="container">
        

        <div class="row">

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              
              <h5 class="title"><a href="">Sell a Product</a></h5>
             <br>
              <div class="text-center">
              <img src="images/logo.jpg" width="70px" height="20px">
              </div>

              <br>
              <a href="">
              <p> 
             <a href="apply.php">   SELL <i class="fa fa-arrow-right"></i> </a>
              </p>
            </a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow  fadeInUp" data-wow-delay="0.2s">
              
              <h5 class="title"><a href="">Buy a Product</a></h5>
              <br>
               <div class="text-center">
              <img src="images/logo.jpg" width="70px" height="20px">
              </div>
              <br>
              <a href="">
              <p> 
              <a href="login.php"> BUY <i class="fa fa-arrow-right"></i> </a>
              </p>
            </a>
            </div>

          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight " data-wow-delay="0.2s">
              
              <h5 class="title"><a href="">Display Stock</a></h5>
              <br>
               <div class="text-center">
              <img src="images/logo.jpg" width="70px" height="20px">
              </div>
              <br>
              <a href="">
              <p> 
              <a href="login.php">  DISPLAY <i class="fa fa-arrow-right"></i> </a>
              </p>
            </a>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              

             <!-- <h4 class="title"><a href="">British Standard Institution (BSI)</a></h4>
              <p class="description"> British Standard Institution (BSI) is a business standards company that helps 68,000 clients worldwide adopt standards of best practice and turn them into habits of excellence. With 2,800 employees globally we understand the challenges organisations face and have the skills to recognize where and how continual excellence can be achieved. Since 1901 we've helped our clients drive organizational performance, manage risk effectively and grow sustainably.</p> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Call To Action Section
    ============================--
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
             <div class="text-center">
            <h3 class="cta-title">OUR CLIENTS</h3>
            </div>
           </div>
            <div class="col-lg-6 text-center" >
            <ul style="list-style: none; ">
              <li class="cta-text">ACORN TECHNOLOGY</li>
              <li class="cta-text">BUSINESS INSIDER</li>
              <li class="cta-text">GOURMET TRAVELLER</li>
              <li class="cta-text">BROADSHEET</li>
              <li class="cta-text">PADRE FOOD CO.</li>
              <li class="cta-text">FOUNDRY</li>
            </ul>
          </div>
           <div class="col-lg-6 text-center">
            <ul style="list-style: none; ">
              <li class="cta-text">BOSE</li>
              <li class="cta-text">KILGOUR WINES</li>
              <li class="cta-text">UNIVERSITY OF VICTORIA</li>
              <li class="cta-text">MOMA NYC</li>
              <li class="cta-text">BELLTOWER LTD.</li>
              <li class="cta-text">BOWERS & WILKINS</li>
            </ul>
          </div>
          
        </div>
      
      </div>
    </section>--><!-- #call-to-action -->

    

    <!--==========================
      Contact Section
    ============================--
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>CONTACT</h2>
        </div>
       
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline" style="color: #4682B4;"></i>
              <h3>Address</h3>
              <address>Hanauer Landstrabe 115, 60314 Frankfurt am Main, Germany</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline" style="color: #4682B4;"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+49 69 224489289</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline" style="color: #4682B4;"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">helpdesk@bsigroupeurope.com</a></p>
            </div>
          </div>

        </div>
      </div>

    
    </section>--><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <?php echo date("Y"); ?> <strong>EMKAS Alluminuim</strong>. Powered by <a href="http://www.oracus.com.ng"> Oracus NG </a>
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script type="text/javascript">
  
</script>
</body>
</html>
