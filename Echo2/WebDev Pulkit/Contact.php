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
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Contact</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
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
    <meta property="og:title" content="Contact">
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
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-19cc" data-image-width="1280" data-image-height="720">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
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
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-1c48">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1">Copyright reserved ©&nbsp;2022, Echo Pvt Lmt</p>
      </div>
    </section> 
</body></html>