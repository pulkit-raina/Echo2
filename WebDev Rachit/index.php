<?php 
  session_start();
  if(!$_SESSION['logged_in']){
    header("Location: ../WebDev Raghav/index.php");
    exit;
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
  <body data-home-page="HOME.php" data-home-page-title="HOME" class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-6183"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="HOME.php" class="u-hover-feature u-image u-logo u-image-1" data-image-width="200" data-image-height="96" title="HOME">
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="HOME.php" style="padding: 44px 86px;">HOME</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="PRODUCTS.php" style="padding: 44px 86px;">PRODUCTS</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="CONTACT.php" style="padding: 44px 86px;">CONTACT</a>
</li><li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="Profile.php" style="padding: 44px 86px;">PROFILE</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="HOME.php">HOME</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="PRODUCTS.php">PRODUCTS</a>
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
              <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-32 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                <div class="u-form-email u-form-group">
                  <label for="email-bb9b" class="u-custom-font u-font-montserrat u-label u-text-black u-label-1">Address</label>
                  <input type="email" placeholder="Enter a valid address" id="email-bb9b" name="email" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-black u-input-1" required="">
                </div>
                <div class="u-form-group u-form-name">
                  <label for="name-bb9b" class="u-custom-font u-font-montserrat u-label u-text-black u-label-2">Product</label>
                  <input type="text" placeholder="Enter your product" id="name-bb9b" name="name" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-black u-input-2" required="">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-9aa3" class="u-custom-font u-font-montserrat u-label u-text-black u-label-3">Price</label>
                  <input type="text" placeholder="Enter item price" id="text-9aa3" name="text" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-black u-input-3">
                </div>
                <div class="u-form-group u-form-number u-form-number-layout-range-number u-form-group-4">
                  <label for="range-1dfd" class="u-custom-font u-font-montserrat u-label u-text-black u-label-4">Quantity (in kgs)</label>
                  <div class="u-input-row">
                    <input value="0" min="1" max="100" step="1" type="range" placeholder="" id="range-1dfd" name="range" class="u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-range u-input-4">
                    <input type="number" placeholder="" id="number-range-1dfd" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-white u-input-4" max="100" step="1" min="1">
                  </div>
                </div>
                <div class="u-align-right u-form-group u-form-submit">
                  <a href="#" class="u-active-grey-70 u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-3 u-radius-5 u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
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
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-115b"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5cdc"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5cdc"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e05f"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e05f"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ec94"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ec94"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-56ce"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-56ce"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Happy shopping and selling<span class="u-text-white"></span>
        </p>
      </div></footer>
  
</body></html>