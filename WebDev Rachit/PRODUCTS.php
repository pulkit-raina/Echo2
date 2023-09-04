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
    <meta name="keywords" content="FRUITS, VEGETABLES​">
    <meta name="description" content="">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="PRODUCTS.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PRODUCTS">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-5d4d"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/image.png" alt="" data-image-width="200" data-image-height="96" data-href="HOME.php" title="HOME">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-weight: 700;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-text-hover-color u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0e13"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-0e13" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-9 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-hover-custom-color-1" href="HOME.php" style="padding: 10px 82px;">HOME</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-hover-custom-color-1" href="PRODUCTS.php" style="padding: 10px 82px;">PRODUCTS</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-hover-custom-color-1" href="CONTACT.php" style="padding: 10px 82px;">CONTACT</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-hover-custom-color-1" href="Profile.php" style="padding: 10px 82px;">PROFILE</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="HOME.html">HOME</a>
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
    <section class="u-align-center u-clearfix u-white u-section-1" id="sec-0a79">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">FRUITS</h1>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-1" alt="" data-image-width="5563" data-image-height="3709" src="images/2575203935-0.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">BANANA</h4>
                <p class="u-align-center u-text u-text-3">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 40</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-2" alt="" data-image-width="640" data-image-height="480" src="images/2575203935-01.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">APPLE</h4>
                <p class="u-align-center u-text u-text-5">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 80</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-3" alt="" data-image-width="1701" data-image-height="2268" src="images/carlota-trillo-3QK6nwhoJGM-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6">PINEAPPLE</h4>
                <p class="u-align-center u-text u-text-7">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 120</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-4" alt="" data-image-width="4272" data-image-height="2848" src="images/jaikishan-patel-p1rLXdPQMas-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-8">JACK FRUIT</h4>
                <p class="u-align-center u-text u-text-9">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 100</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-5" alt="" data-image-width="2448" data-image-height="3264" src="images/tijana-drndarski-2HVmYCkrJfs-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-10">BLACK GRAPES</h4>
                <p class="u-align-center u-text u-text-11">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 80</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-6" alt="" data-image-width="4000" data-image-height="6000" src="images/julia-peretiatko-vPtqvXmqihE-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-12">CHERRY</h4>
                <p class="u-align-center u-text u-text-13">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 40</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-7">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-7" alt="" data-image-width="3648" data-image-height="5472" src="images/mae-mu-9002s2VnOAY-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-14">ORANGE</h4>
                <p class="u-align-center u-text u-text-15">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 30</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-8">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-8" alt="" data-image-width="6000" data-image-height="4000" src="images/nipanan-lifestyle-pV2xU2rP580-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-16">COCONUT</h4>
                <p class="u-align-center u-text u-text-17">MIN PRICE ( kg )&nbsp; &nbsp;:&nbsp; 40</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-2" id="sec-4399">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">VEGETABLES<span style="font-weight: 700;"></span>
        </h1>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-1" alt="" data-image-width="3329" data-image-height="4993" src="images/k8-GHRT9j21m2M-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">CARROT</h4>
                <p class="u-align-center u-text u-text-3">MIN PRICE (kg) : 30</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-2" alt="" data-image-width="3888" data-image-height="2592" src="images/lars-blankers-B0s3Xndk6tw-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">POTATO</h4>
                <p class="u-align-center u-text u-text-5">MIN PRICE (kg) : 20</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-3" alt="" data-image-width="2806" data-image-height="3996" src="images/shane-kong-dDI3pSF-yK4-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6">CHILLI</h4>
                <p class="u-align-center u-text u-text-7">MIN PRICE (kg) : 40</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-4" alt="" data-image-width="4016" data-image-height="6016" src="images/gaelle-marcel-qOwyDpkhaCI-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-8">GARLIC</h4>
                <p class="u-align-center u-text u-text-9">MIN PRICE (kg) : 30</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-5" alt="" data-image-width="3264" data-image-height="4928" src="images/marina-helena-muller-vjdOOy8erkU-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-10">BEETROOT</h4>
                <p class="u-align-center u-text u-text-11">MIN PRICE (kg) : 40</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-6" alt="" data-image-width="6032" data-image-height="4014" src="images/eric-prouzet-D8ZrftlvNDE-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-12">CAULIFLOWER&nbsp;</h4>
                <p class="u-align-center u-text u-text-13">MIN PRICE (kg) : 25</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-7">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-7" alt="" data-image-width="4136" data-image-height="4136" src="images/vivek-sharma-rDDICrot22U-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-14">ONION</h4>
                <p class="u-align-center u-text u-text-15">MIN PRICE (kg) : 50</p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-8">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-8" alt="" data-image-width="5317" data-image-height="3538" src="images/eric-prouzet-Ky6x9T8j128-unsplash.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-16">CUCUMBER</h4>
                <p class="u-align-center u-text u-text-17">MIN PRICE (kg) : 30</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
</body></html>