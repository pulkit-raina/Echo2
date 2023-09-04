<?php
    session_start();
    if(!$_SESSION['logged_in']){
        header("Location: ../WebDev Raghav/index.php");
        exit;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>GREENS</title>
        <link rel="stylesheet" href="greens.css">
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
                <div class="products-button">PRODUCTS</div>
                <div class="contactus-button">CONTACT US</div>
                <div class="order-button">ORDER</div>
            </div>

            <div class="finalisation-buttons">
                <div class="wishlist"><img class="wishlist-image" src="images/wishlist image.png"></div>
                <div class="cart"><a href="profile.php"><img class="cart-image" src="images/profile.jpg"></a></div>
            </div>
        </div>


        <div class="third">
            <div class="product">
               <div class="product-class"><img class="tomato" src="images/palak.avif"></div>
               <div class="item-name">PALAK</div>
               <div class="view-sellers"><a href="greens/palak.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/coriander.avif"></div>
                <div class="item-name">CORIANDER</div>
                <div class="view-sellers"><a href="greens/corriander.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/cabbage.avif  "></div>
                <div class="item-name">CABBAGE</div>
                <div class="view-sellers"><a href="greens/cabbage.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/spinach.avif"></div>
                <div class="item-name">SPINACH</div>
                <div class="view-sellers"><a href="greens/spinach.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

    </body>
    </html>