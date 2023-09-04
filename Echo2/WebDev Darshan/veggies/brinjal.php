<?php
    session_start();
    if(!$_SESSION['logged_in']){
        header("Location: ../../webdev raghav/index.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="product_sellers.css">
</head>
<body>
    <div class="elementsDiv">
        <div class="elements">Product Name</div>
        <div class="elements">Seller Name</div>
        <div class="elements">Quantity</div>
        <div class="elements">price/kg</div>
    </div>
</body>
</html>

<?php
    include("../db_connect.php");

    $sql = "select product_name,Name,quantity,price_per_kg from productTable p ,userProfile u 
    where p.user_id = u.user_id and product_name='brinjal';";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        $price = $row['price_per_kg'];
        $name = $row['Name'];
        $quantity = $row['quantity'];
        $product_name = $row['product_name'];

        echo '<div class="elementsDiv">';
        echo '<div class="elements">' . $product_name . ' </div>';
        echo '<div class="elements">' . $name . ' </div>';
        echo '<div class="elements">' . $quantity . ' </div>';
        echo '<div class="elements">' . $price . ' /kg</div>';
        echo '</div>';
    }
?>