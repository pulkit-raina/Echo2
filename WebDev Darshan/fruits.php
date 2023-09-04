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
        <title>FRUITS</title>
        <link rel="stylesheet" href="fruits.css">
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
               <div class="product-class"><img class="tomato" src="images/CHERRY.avif"></div>
               <div class="item-name">CHERRY</div>
               <div class="view-sellers"><a href="fruits/cherry.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/pineapple.avif"></div>
                <div class="item-name">PINEAPPLE</div>
                <div class="view-sellers"><a href="fruits/pineapple.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/guava.avif"></div>
                <div class="item-name">GUAVA</div>
                <div class="view-sellers"><a href="fruits/guava.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/mango.avif"></div>
                <div class="item-name">MANGO</div>
                <div class="view-sellers"><a href="fruits/mango.php"><button class="viewsellers-button">view sellers</button></a></div>
            </div>

            <div class="product">
                <div class="product-class"><img class="tomato" src="images/apple.avif"></div>
                <div class="item-name">APPLE</div>
                <div class="view-sellers"><a href="fruits/apple.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/banana.avif"></div>
                 <div class="item-name">BANANA</div>
                 <div class="view-sellers"><a href="fruits/banana.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/orange.avif"></div>
                 <div class="item-name">ORANGE</div>
                 <div class="view-sellers"><a href="fruits/orange.php"><button class="viewsellers-button">view sellers</button></a></div>
             </div>
 
             <div class="product">
                 <div class="product-class"><img class="tomato" src="images/grapes.avif"></div>
                 <div class="item-name">GRAPES</div>
                 <div class="view-sellers"><a href="fruits/grapes.php"><button class="viewsellers-button">view sellers</button></a></div>            </div>

    </body>
    </html>

    <?php

    ?>