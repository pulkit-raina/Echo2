<?php 
  session_start();
  if(!$_SESSION['logged_in']){
    header("Location: ../WebDev Raghav/index.php");
    exit;
  }
  else{
    include("db_connect.php");
    if(isset($_POST['form'])){
      $prodid = rand(300,600);
      $userid = $_SESSION['user_id'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quan = $_POST['quantity'];

      $sql = "insert into productTable values('$prodid', '$userid', '$name', '$price', '$quan');";
      if(!mysqli_query($connection, $sql)){
        echo "Insertion unsuccessful";
      }
    }
    
    if(isset($_POST['form2'])){
      $contno = rand(500, 900);
      $email = $_POST['email'];
      $name = $_POST['name'];
      $userid = $_SESSION['user_id'];

      $sql = "insert into contactUs values('$contno', '$userid', '$email', '$name');";
      
      if(!mysqli_query($connection, $sql)){
        echo "Insertion Unsuccessful";
      }
    }
  }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Fresh breads handcrafted daily, Our Breads, Ingredients &amp;amp; Method, Our Bread, Our freshly baked bread is the hero of our breakfast menu, Read what our customers say, Contact Us">
    <meta name="description" content="">
    <title>New Sale</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="New-Sale.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
}</script>
    <meta name="theme-color" content="#eeb16d">
    <meta property="og:title" content="New Sale">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-14ca"><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="200" data-image-height="96" title="Home">
        <img src="images/Logo.png" class="u-logo-image u-logo-image-1">
      </a><nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 13px 2px; font-size: calc(1em + 32px);">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Home.php" style="padding: 38px 16px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="New-Sale.php" style="padding: 38px 16px;">New Sale</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Auction-Status.php" style="padding: 38px 16px;">Auction Status</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Report-User.php" style="padding: 38px 16px;">Report Buyer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Contact.php" style="padding: 38px 16px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="About.php" style="padding: 38px 16px;">About</a>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Profile.php" style="padding: 38px 16px;">Profile</a>
</li>
</ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="New-Sale.php">New Sale</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Auction-Status.php">Auction Status</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Report-User.php">Report Buyer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.php">Profile</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav></header>
    <section class="u-align-center u-clearfix u-container-align-center u-white u-section-1" id="carousel_b5b9">
      <img class="u-expanded-width u-image u-image-default u-image-1" src="images/gh4.jpg" alt="" data-image-width="1440" data-image-height="1080">
      <h2 class="u-align-center u-text u-text-default u-text-1">New Sale</h2>
      <div class="u-form u-radius-20 u-white u-form-1">
        <form action="New-Sale.php" name="form" style="padding: 23px;" method = "POST">
          <h4 class="u-align-center u-form-group u-form-text u-text u-text-2">Enter the details of your sale:</h4>
          <div class="u-form-group u-form-name">
            <label for="name-4c18" class="u-label">Name</label>
            <input type="text" placeholder="Enter name of your product" id="name-4c18" name="name" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-4c18" class="u-label">Quantity</label>
            <input type="number" placeholder="Enter quantity of products" id="email-4c18" name="quantity" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-group u-form-message">
            <label for="message-4c18" class="u-label">Price</label>
            <input type="number" placeholder="Enter quantity of products" id="email-4c18" name="price" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-agree u-form-group u-form-group-5">
            <input type="checkbox" id="agree-a472" name="agree" class="u-agree-checkbox" required="">
            <label for="agree-a472" class="u-agree-label u-label">I accept the <a href="T-and-C.php">Terms of Service</a>
            </label>
          </div>
          <div class="u-align-right u-form-group u-form-submit">
            <a href="#" class="u-active-palette-3-base u-border-5 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-palette-2-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-3-base u-palette-2-base u-radius-10 u-btn-1">Submit your request</a>
            <input type="submit" name="form" value="submit" class="u-form-control-hidden">
          </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="">
        </form>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-image u-section-2" id="sec-5265" data-image-width="1920" data-image-height="1024">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-body-alt-color u-text-1">Our Top Products</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-expanded-width u-image u-image-default u-image-1" alt="" data-image-width="610" data-image-height="324" src="images/wheat.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">Wheat</h4>
                <p class="u-align-center u-text u-text-3"> Wheat is a grass widely cultivated for its seed, a cereal grain that is a worldwide staple food</p>
                <a href="Home.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img class="u-expanded-width u-image u-image-default u-image-2" alt="" data-image-width="275" data-image-height="183" src="images/Rice.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">Rice</h4>
                <p class="u-align-center u-text u-text-5"> India&nbsp;is the world's second-largest producer of&nbsp;rice, and the largest exporter of&nbsp;rice&nbsp;in the world</p>
                <a href="Home.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img class="u-expanded-width u-image u-image-default u-image-3" alt="" data-image-width="375" data-image-height="281" src="images/jowar.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6">Jowar</h4>
                <p class="u-align-center u-text u-text-7"> Jowar (sorghum) has a layer which contains anti-cancer properties and also fights the free radicals which are responsible for pre-mature ageing</p>
                <a href="Home.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <img class="u-expanded-width u-image u-image-default u-image-4" alt="" data-image-width="1920" data-image-height="1080" src="images/potatoes.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-8">Potato</h4>
                <p class="u-align-center u-text u-text-9"> The potato is a starchy food, a tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas</p>
                <a href="Home.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">more</a>
              </div>
            </div>
          </div>
        </div>
        <p class="u-align-center u-text u-text-body-alt-color u-text-10">Image from </p>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_350b">
      <h2 class="u-align-center u-text u-text-1">Our top-notch service is the talk of the town... ;</h2>
      <a href="https://www.hindustantimes.com/brand-stories/css-founder-claims-to-be-the-best-website-design-company-in-india-101668772510063.php" class="u-active-grey-80 u-align-center u-border-2 u-border-active-grey-80 u-border-grey-75 u-border-hover-grey-80 u-btn u-btn-round u-button-style u-gradient u-hover-grey-80 u-none u-radius-50 u-text-active-white u-text-hover-white u-btn-1" target="_blank">read more</a>
      <img class="u-expanded-width u-image u-image-1" src="images/Quality-not-quantity-Study-links-minimally-processed-high-fibre-diets-with-reduced-mortality.jpg" data-image-width="750" data-image-height="500">
    </section>
    <section class="u-clearfix u-image u-section-4" id="sec-9ce3" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Contact Us</h2>
            <div class="u-form u-form-1">
              <form action="New-sale.php" name="form" style="padding: 10px;" method = "POST">
                <div class="u-form-email u-form-group u-form-partition-factor-2">
                  <label for="email-bb9b" class="u-label">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-bb9b" name="email" class="u-input u-input-rectangle u-radius-50 u-white" required="">
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2">
                  <label for="name-bb9b" class="u-label">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-bb9b" name="name" class="u-input u-input-rectangle u-radius-50 u-white" required="">
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <button class="u-active-grey-70 u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-grey-70 u-radius-50 u-btn-1" name = "form2">Submit</button>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="">
              </form>
            </div>
          </div>
        </div>
        <div class="u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-align-center-xs u-container-align-left-lg u-container-align-left-md u-container-align-left-sm u-container-align-left-xl u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h5 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Find Us</h5>
                <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-3"> 121 Rock Sreet, 21 Avenue, New York, NY 92103-9000<br>
                </p>
              </div>
            </div>
            <div class="u-container-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h5 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Hours</h5>
                <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-5">
                  <span style="font-weight: 700;"> Monday – Saturday </span>
                  <br>9am – 7pm<br>
                  <span style="font-weight: 700;">Sunday </span>
                  <br>10am – 6pm<br>
                </p>
              </div>
            </div>
            <div class="u-container-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h5 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Call Us</h5>
                <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-7">
                  <a href="https://nicepage.site" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-2"> 1 (234) 567-891</a>
                  <br>
                  <br>
                  <a href="https://nicepage.me" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">2 (345) 333-897</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body></html>