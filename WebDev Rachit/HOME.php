<?php 
  session_start();
  if(!$_SESSION['logged_in']){
    header("Location: ../WebDev Raghav/index.php");
    exit;
  }
  else{
    if(isset($_POST['form'])){
      include("db_connect.php");
      $aucid = rand(300,500);
      $prodid = $_POST['prodid'];
      $email = $_POST['email'];
      $price = $_POST['price'];
      $userid = $_SESSION['user_id'];

      $sql = "insert into bidding values('$aucid', '$prodid', '$userid', '$aucid');";
      if(!mysqli_query($connection, $sql)){
        echo "Insertion unsuccessful";
      }
    }
  }
?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>HOME</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="HOME.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/unnamed.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-6183"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../WebDev Darshan/home.php" class="u-hover-feature u-image u-logo u-image-1" data-image-width="200" data-image-height="96" title="HOME">
          <img src="images/unnamed.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="../WebDev Darshan/home.php" style="padding: 44px 86px;">HOME</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="../webdev Darshan/products.php" style="padding: 44px 86px;">PRODUCTS</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="CONTACT.php" style="padding: 44px 86px;">CONTACT</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="Profile.php" style="padding: 44px 86px;">PROFILE</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" >HOME</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" >PRODUCTS</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="CONTACT.php">CONTACT</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.php">PROFILE</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_1654" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-2 u-border-black u-container-style u-group u-white u-group-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-1">Healthy Produce Is&nbsp;"Echo"-ing</h3>
              </div>
            </div>
            <div class="u-form u-form-1">
              <form action="home.php" name="form" style="padding: 10px;">
                <div class="u-form-email u-form-group">
                  <label for="email-bb9b" class="u-custom-font u-font-montserrat u-label u-text-white u-label-1">Email Address</label>
                  <input type="email" placeholder="Enter a valid Email Address" id="email-bb9b" name="email" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-white u-input-1" required="">
                </div>
                <div class="u-form-group u-form-name">
                  <label for="name-bb9b" class="u-custom-font u-font-montserrat u-label u-text-white u-label-2">Product ID</label>
                  <input type="text" placeholder="Enter the Product ID you wish to purchase" id="name-bb9b" name="prodid" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-white u-input-2" required="">
                </div>
                <br>
                <br>
                <div class="u-form-group u-form-number u-form-number-layout-range-number u-form-group-4">
                  <label for="range-1dfd" class="u-custom-font u-font-montserrat u-label u-text-white u-label-4">Enter item price you are offering (Max 5 Lakhs)</label>
                  <div class="u-input-row">
                    <input value="0" min="1" max="500000" step="1" type="range" placeholder="" id="range-1dfd" name="price" class="u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-range u-input-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="number" placeholder="" id="number-range-1dfd" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-white u-input-4" max="500000" step="1" min="1">
                  </div>
                </div>
                  <button type="submit" name = "form" value="submit" class="u-btn-circle u-btn-submit">Submit</button>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="957b9eb5825e0fabc32d971ce8b12cdb">
              </form>
            </div>
          </div>
        </div>
        <div class="u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-border-1 u-border-black u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h5 class="u-custom-font u-custom-item u-font-montserrat u-text u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">F​ind Us</h5>
                <h5 class="u-align-left u-custom-font u-custom-item u-font-montserrat u-text u-text-3">#34,<br>MG Road,<br>Banglore Central,<br>Bengaluru - 560001
                </h5>
              </div>
            </div>
            <div class="u-align-center u-border-1 u-border-black u-container-style u-list-item u-repeater-item u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h5 class="u-custom-font u-custom-item u-font-montserrat u-text u-text-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Hours</h5>
                <h5 class="u-align-left u-custom-font u-custom-item u-font-montserrat u-text u-text-5">
                  <span style="font-weight: 700;"> Monday – Saturday </span>
                  <br>9am – 7pm<br>
                  <span style="font-weight: 700;">Sunday </span>
                  <br>10am – 6pm<br>
                </h5>
              </div>
            </div>
            <div class="u-align-center u-border-1 u-border-black u-container-style u-list-item u-repeater-item u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <h5 class="u-custom-font u-custom-item u-font-montserrat u-text u-text-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Call Us</h5>
                <h5 class="u-align-left u-custom-font u-custom-item u-font-montserrat u-text u-text-7">91+ 123456789<br>
                  <br>91+ 987654321
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-backlink u-clearfix u-grey-80">
        <span></span>
      </p>
    </section>
  
</body></html>