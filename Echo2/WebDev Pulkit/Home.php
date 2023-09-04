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
    <meta name="keywords" content="OrganicBreads, Delicious Baking, Fresh breads, cakes and pasties, Our Breads, Delicious Baking.
Exceptional
Quality., Sweets Menu, Our freshly baked bread is the hero of our breakfast menu, Contact Us">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
    }</script>
    <meta name="theme-color" content="#eeb16d">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="en">

    <div id = "progressbar"></div>
    <div id = "scrollPath"></div> 
    <header class="u-clearfix u-header u-header" id="sec-14ca"><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="200" data-image-height="96" title="Home">
             
  
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




    <section class="u-clearfix u-image u-section-1" id="carousel_a553" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text-1">Welcome Back to,</h3>
            <h1 class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-2">Echo Deals</h1>
          </div>
        </div>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h5 class="u-align-left u-custom-item u-text u-text-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Find Us</h5>
                <iframe class = "zoom-ultra" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8728.173865932198!2d77.62968707256431!3d12.974458844309373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a65e8baeaf%3A0x9373a3ac1b273680!2sAishwarya%20Bakery!5e0!3m2!1sen!2sin!4v1689768333823!5m2!1sen!2sin" width="200" height="300" style="border: 20px; border-style: inset; border-color: black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h5 class="u-align-left u-custom-item u-text u-text-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Hours</h5>
                <p class="u-align-left u-custom-item u-text u-text-6">
                  <span style="font-weight: 700;"> Monday – Saturday </span>
                  <br>9am – 7pm<br>
                  <span style="font-weight: 700;">Sunday </span>
                  <br>10am – 6pm<br>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h5 class="u-align-left u-custom-item u-text u-text-7" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Call Us</h5>
                <p class="u-align-left u-custom-item u-text u-text-8">
                  <a href="https://nicepage.com/wordpress-website-builder" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">+91 0123456789<br>
                  </a>
                  <br>
                  <a href="https://nicepage.me" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">+91 9876543210</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <section class="u-align-center u-clearfix u-white u-section-2" id="sec-0de0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1"> Years of trust...</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/3014502.png" alt=""></span>
                <div class="u-container-align-left u-container-style u-group u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h5 class="u-align-left u-text u-text-2">Real-time auction details</h5>
                    <p class="u-align-left u-text u-text-3">Our website updates the products added by you in as minimum time as possible. It also updates the latest highest bid</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-2"><img src="images/4241664.png" alt=""></span>
                <div class="u-container-style u-group u-video-cover u-group-2">
                  <div class="u-container-layout u-container-layout-4">
                    <h5 class="u-align-left u-text u-text-4"> Great Value</h5>
                    <p class="u-align-left u-text u-text-default u-text-5"> With the most competitive prices and subscription in the market we are able to deliver great value without compromising on taste</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-icon-3"><img src="images/8555318.png" alt=""></span>
                <div class="u-container-align-left u-container-style u-group u-video-cover u-group-3">
                  <div class="u-container-layout u-container-layout-6">
                    <h5 class="u-align-left u-text u-text-6"> Institutions</h5>
                    <p class="u-align-left u-text u-text-default u-text-7"> We serve a wide range of institutions including factories, airlines, hotels and restraunts</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7"><span class="u-file-icon u-icon u-icon-4"><img src="images/2203124.png" alt=""></span>
                <div class="u-container-align-left u-container-style u-group u-video-cover u-group-4">
                  <div class="u-container-layout u-container-layout-8">
                    <h5 class="u-align-left u-text u-text-8"> Delivery To Your Door</h5>
                    <p class="u-align-left u-text u-text-default u-text-9">Once your order is confirmed by the seller after your bid, we deliver the product to your doorstep</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-9"><span class="u-file-icon u-icon u-icon-5"><img src="images/679821.png" alt=""></span>
                <div class="u-container-align-left u-container-style u-group u-video-cover u-group-5">
                  <div class="u-container-layout u-container-layout-10">
                    <h5 class="u-align-left u-text u-text-10"> No Order Too Large</h5>
                    <p class="u-align-left u-text u-text-default u-text-11">We can transport items as heavy as 10 tons, and dimensions upto 30m X 10m X 5m</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-11"><span class="u-file-icon u-icon u-icon-6"><img src="images/images-removebg-preview.png" alt=""></span>
                <div class="u-container-align-left u-container-style u-group u-video-cover u-group-6">
                  <div class="u-container-layout u-container-layout-12">
                    <h5 class="u-align-left u-text u-text-12">Trust of years</h5>
                    <p class="u-align-left u-text u-text-default u-text-13">Any seller reported and found guilty of cheating or fraud shall be immediately banned as well a police complaint filed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-3" id="sec-ffd6">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-36-lg u-size-36-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1222" data-image-height="1080">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-24-lg u-size-24-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-align-left u-text u-text-1"> Quickest service in town<br>
                </h2>
                <p class="u-align-left u-text u-text-2">We boast a unbeaten record of the fastest and smoothest service in terms of democratising the auctioning process for the farmer</p>
                <a href="https://www.hindustantimes.com/brand-stories/css-founder-claims-to-be-the-best-website-design-company-in-india-101668772510063.html" class="u-active-white u-align-left u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-1" target="_blank">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skrollable u-align-center u-clearfix u-container-align-center u-image u-parallax u-section-4" id="sec-a3f8" data-image-width="2000" data-image-height="1333">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1">Our Top Products</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-1" alt="" data-image-width="275" data-image-height="183" src="images/Rice.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">RICE</h4>
                <p class="u-align-center u-text u-text-3">India&nbsp;is the world's second-largest producer of&nbsp;rice, and the largest exporter of&nbsp;rice&nbsp;in the world</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-2" alt="" data-image-width="610" data-image-height="324" src="images/wheat.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">Wheat</h4>
                <p class="u-align-center u-text u-text-5"> Wheat is a grass widely cultivated for its seed, a cereal grain that is a worldwide staple food</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-3" alt="" data-image-width="375" data-image-height="281" src="images/jowar.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6">Jowar</h4>
                <p class="u-align-center u-text u-text-7"> Jowar (sorghum) has a layer which contains anti-cancer properties and also fights the free radicals which are responsible for pre-mature ageing.</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-4" alt="" data-image-width="500" data-image-height="300" src="images/51uPMSrZ-QL.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-8">Chilli Powder</h4>
                <p class="u-align-center u-text u-text-9"> A hot-tasting spice made from ground dried red&nbsp;chilli&nbsp;peppers, sometimes with other spices</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-5" alt="" data-image-width="1920" data-image-height="1080" src="images/potatoes.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-10">Potatoes</h4>
                <p class="u-align-center u-text u-text-11"> The potato is a starchy food, a tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas.</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-5">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-6" alt="" data-image-width="1155" data-image-height="648" src="images/tomatoes.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-12">Tomatoes</h4>
                <p class="u-align-center u-text u-text-13">Tomato is the edible berry&nbsp;of the plant Solanum lycopersicum. The species originated in western South America, Mexico and Central America</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-6">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-7">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-7" alt="" data-image-width="1200" data-image-height="667" src="images/turmer.jpg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-14">Turmeric</h4>
                <p class="u-align-center u-text u-text-15"> Turmeric&nbsp;is a common spice and a major ingredient in curry powder. Curcumin is a major component of&nbsp;turmeric</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-7">more</a>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-8">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8">
                <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-8" alt="" data-image-width="318" data-image-height="159" src="images/carrots.jpeg">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-16">Carrots</h4>
                <p class="u-align-center u-text u-text-17"> Carrots&nbsp;are rich in vitamins, minerals, and fiber. They are also a good source of antioxidants. Antioxidants are nutrients present in plant-based foods</p>
                <a href="New-Sale.php" class="u-active-none u-align-center u-border-1 u-border-active-palette-4-dark-1 u-border-black u-border-hover-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-8">more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-5" id="sec-ee90" data-image-width="1280" data-image-height="720">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-align-center u-container-style u-grey-90 u-group u-opacity u-opacity-85 u-radius-20 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-palette-2-base u-text-1">Contact Us</h2>
            <p class="u-align-center u-text u-text-2"> Monday - Friday 7:00 AM - 6:00 PM | Saturday 7:00 AM - 4:00 PM <br>Closed Sunday to focus on faith and family<br>
              <br>
              <span style="font-weight: 700;">Phone: +91 0123456789</span>
              <br>
              <span style="font-weight: 700;">Email: </span>
              <a href="mailto:echo@gmail.com" class="u-active-none u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-1">echo@gmail.com</a>
              <br>
              <br>
              <span style="font-weight: 700;">Address: </span>
              <br> #34,<br>MG Road,<br>Bangalore Central,<br>Bengaluru - 560001<br>
            </p>
          </div>
        </div>
        <p class="u-text u-text-default u-text-white u-text-3"> Copyright reserved ©&nbsp;2022, Echo Pvt Lmt</p>
      </div>
    </section>  
    <script type = "text/javascript">
            let progress = document.getElementById('progressbar');
            let totalHeight = document.body.scrollHeight - window.innerHeight;
            window.onscroll = function(){
                let progressHeight = (window.pageYOffset / totalHeight)*100;
                progress.style.height = progressHeight + "%";
            }
        </script>
</body></html>