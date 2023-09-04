<?php
  session_start();

  if(!$_SESSION['logged_in']){
    header("Location: ../WebDev Raghav/index.php");
    exit;
  }
  else{
    include("db_connect.php");
    if(isset($_POST['form'])){
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
    <title>Auction Status</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Auction-Status.css" media="screen">
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
    <meta property="og:title" content="Auction Status">
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
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-5265" data-image-width="1920" data-image-height="1024">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-1">Auction Status</h1>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="14.3%">
              <col width="13.900000000000006%">
              <col width="14.3%">
              <col width="14.3%">
              <col width="14.3%">
              <col width="14.3%">
              <col width="14.500000000000005%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 33px;">
                <th class="u-border-1 u-border-black u-table-cell">Item Name</th>
                <th class="u-border-1 u-border-black u-table-cell">Quantity with Units</th>
                <th class="u-border-1 u-border-black u-table-cell">Seller Name</th>
                <th class="u-border-1 u-border-black u-table-cell">Highest Bidder Name</th>
                <th class="u-border-1 u-border-black u-table-cell">Highest Bidder ID</th>
                <th class="u-border-1 u-border-black u-table-cell">Highest Bid Amount</th>
                </th>
              </tr>
            </thead>
            <tbody class="u-table-alt-grey-5 u-table-body">
                <?php 
                  include("db_connect.php");
                  $sql = "Select * from productTable";
                  $result = mysqli_query($connection, $sql);

                  while($row = mysqli_fetch_assoc($result)){
                    if(isset($row)){
                      $prodid = $row['prod_id'];
                      $itemname = $row['product_name'];
                      $quantity = $row['quantity'];

                      $sql = "select Name from userProfile as a, productTable as b where a.user_id = b.user_id and b.prod_id ='$prodid';";
                      $res = mysqli_query($connection, $sql);
                      $r = mysqli_fetch_assoc($res);
                    
                      $seller = $r['Name'];
                      
                      $sql2 = "select b1.prod_id, b1.user_id, auction_amount FROM bidding b1
                            INNER JOIN (
                              SELECT prod_id, MAX(auction_amount) AS max_amount
                              FROM bidding
                              GROUP BY prod_id
                            ) b2 ON b1.prod_id = b2.prod_id AND b1.auction_amount = b2.max_amount and b1.prod_id = '$prodid';";

                      $res2 = mysqli_query($connection, $sql2);
                      $r2 = mysqli_fetch_assoc($res2);
                      if(isset($r2)){
                        $bidderid = $r2['user_id'];
                        $bidamt = $r2['auction_amount'];

                        $sql3 = "select name from userProfile where user_id = '$bidderid';";
                        $res3 = mysqli_query($connection, $sql3);
                        $r3 = mysqli_fetch_assoc($res3);
                        $biddername = $r3['name'];
                        echo "<tr style='height: 75px;'>";
                        echo "<td class='u-border-1 u-border-grey-30 u-first-column u-grey-50 u-table-cell u-table-cell-8'>".$itemname."</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell u-white u-table-cell-9'>".$quantity."</td>";
                        echo "<td class='u-border-1 u-border-grey u-table-cell u-white u-table-cell-10'>".$seller."</td>";
                        echo "<td class='u-border-1 u-border-grey u-table-cell u-white u-table-cell-11'>".$biddername."</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell u-white u-table-cell-12'>".$bidderid."</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell u-white u-table-cell-13'>".$bidamt."</td>";
                        echo "</tr>";
                      }
                    }
                  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-2" id="sec-9ce3" data-image-width="1620" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Contact Us</h2>
            <div class="u-form u-form-1">
              <form action="auction-status.php" name="form" style="padding: 10px;">
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
                <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-item u-text u-text-3"> #34,<br>MG Road,<br>Bangalore Central,<br>Bengaluru - 560001<br>
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
                  <a href="https://nicepage.best" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-2">+91 0123456789</a>
                  <br>
                  <br>
                  <a href="https://nicepage.me" class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">+91 9876543210</a>
                </p>
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