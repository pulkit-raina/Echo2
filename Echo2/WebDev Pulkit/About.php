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
    <meta name="keywords" content="​Years of trust...">
    <meta name="description" content="">
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
}</script>
    <meta name="theme-color" content="#eeb16d">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-14ca"><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="200" data-image-height="96" title="Home">
  <div id = "progressbar"></div>
    <div id = "scrollPath"></div> 

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
    <section class="u-align-center u-clearfix u-white u-section-1" id="sec-7093">
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
    <section class="u-black u-clearfix u-section-2" id="sec-7dc7">
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

    <script type = "text/javascript">
            let progress = document.getElementById('progressbar');
            let totalHeight = document.body.scrollHeight - window.innerHeight;
            window.onscroll = function(){
                let progressHeight = (window.pageYOffset / totalHeight)*100;
                progress.style.height = progressHeight + "%";
            }
        </script>

</body></html>