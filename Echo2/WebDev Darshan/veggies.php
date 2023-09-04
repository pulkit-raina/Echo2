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
        <title>VEGGIES</title>
        <link rel="stylesheet" href="veggies.css">
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
                <a href="products.php"><div class="products-button">PRODUCTS</div></a>
                <div class="contactus-button">CONTACT US</div>
                 <div class="order-button" style="text-decoration:none;">ORDER</div>
            </div>

            <div class="finalisation-buttons">
                <div class="wishlist"><img class="wishlist-image" src="images/wishlist image.png"></div>
                <div class="cart"><a href="profile.php"><img class="cart-image" src="images/profile.jpg"></a></div>
            </div>
        </div>


        <div class="third">
            <div class="product">
               <div class="product-class"><img class="tomato" src="images/carrot.avif"></div>
               <div class="item-name">CARROT</div>
               <div class="view-sellers"><a href="veggies/carrot.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/tomato.avif"></div>
                <div class="item-name">TOMATO</div>
                <div class="view-sellers"><a href="veggies/tomato.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/potato.avif"></div>
                <div class="item-name">POTATO</div>
                <div class="view-sellers"><a href="veggies/potato.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/brinjal.avif"></div>
                <div class="item-name">BRINJAL</div>
                <div class="view-sellers"><a href="veggies/brinjal.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/cucumber.avif"></div>
                <div class="item-name">CUCUMBER</div>
                <div class="view-sellers"><a href="veggies/cucumber.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/capsicum.avif"></div>
                 <div class="item-name">CAPSICUM</div>
                 <div class="view-sellers"><a href="veggies/capsicum.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/chilli.avif"></div>
                 <div class="item-name">CHILLI</div>
                 <div class="view-sellers"><a href="veggies/chilli.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/turnip.avif"></div>
                 <div class="item-name">TURNIP</div>
                 <div class="view-sellers"><a href="veggies/turnip.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

    </body>
    </html>