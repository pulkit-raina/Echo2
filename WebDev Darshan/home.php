<?php
    session_start();
    if(!$_SESSION['logged_in']){
        header("Location: ../webdev raghav/index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="first">

            <div class="logo">
                <a href="home.php" ><img class="echo-logo-image" src="images/echo-logo.jpg"></a>
            </div>

            <div class="searchbar">
                <input class="search" type="text" placeholder="Search">
                <button class="search-button"><img class="search-button-image" src="images/search image.png"></button>
            </div>
                
            <div class="buttons">
                <a class="products-link" href="products.php"><div class="products-button">PRODUCTS</div></a>
                <div class="contactus-button">CONTACT US</div>
                <a href="../WebDev Rachit/HOME.php"> <div class="order-button">ORDER</div>
            </div>

            <div class="finalisation-buttons">
                <div class="wishlist"><img class="wishlist-image" src="images/wishlist image.png"></div>
                <div class="cart"><a href="profile.php"><img class="cart-image" src="images/profile.jpg"></a></div>
            </div>
        </div>


        <div class="second">
            <div class="image-1"><img class="trust-image" src="images/trust image.avif"></div>
            <div class="quality">JOIN THE ECHO FAMILY</div>
            <button class="join-button">JOIN US</button>
        </div>
    </body>
</html>