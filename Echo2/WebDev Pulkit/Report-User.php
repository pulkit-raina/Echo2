<?php
  session_start();

  if(!$_SESSION['logged_in']){
    header("Location: ../WebDev Raghav/index.php");
    exit;
  }
  else{
    include("db_connect.php");
    if(isset($_POST['submit'])){
      $reportnum = rand(100,200);
      $reporter = $_SESSION['user_id'];
      $ri = $_POST['reported-id'];
      $msg = $_POST['message'];

      $sql = "insert into reportUser values('$reportnum', '$reporter', '$ri', '$msg');";
      
      mysqli_query($connection, $sql);

      mysqli_close($connection);
    }
  }

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Report User">
    <meta name="description" content="">
    <title>Report User</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Report-User.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
}</script>
    <meta name="theme-color" content="#eeb16d">
    <meta property="og:title" content="Report User">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 38px 16px; color: red;" href="Report-User.php" >Report Buyer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="Contact.php" >Contact</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Report-User.php" style = "color: #eeb16d;">Report Buyer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.php">Profile</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-69af" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">Report User</h1>
        <div class="u-form u-form-1">


          <form action="report-user.php" style="padding: 15px;" name="form"  method = "post">
            <div class="u-form-group u-form-message u-label-none">
              <label for="message-6797" class="u-label">Comment</label>
              <textarea placeholder="Comment" rows="4" cols="50" id="message-6797" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required=""></textarea>
            </div>

            <div class="u-form-group u-form-name u-label-none">
              <label for="name-5d98" class="u-label">User ID</label>
              <input type="number" placeholder="Enter USER ID to Report" id="name-5d98" name="reported-id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>

            <div class="u-form-agree u-form-group u-label-none">
              <input type="checkbox" id="agree-77ed" name="agree" class="u-agree-checkbox" required="">
              <label for="agree-77ed" class="u-agree-label u-label">
                <a class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-black u-btn-1" href="T-and-C.php" style = "color: blue;">I accept the Terms of Service</a>
              </label>
            </div>

            <div class="u-align-left u-form-group ">
              <button type="submit" class="u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-3-dark-1 u-radius-17 u-btn-2" name = "submit" value="Submit">SUBMIT</button>
            </div>
          </form>


        </div>
      </div>
    </section>
</body></html>