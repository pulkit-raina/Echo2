<?php
    session_start();
    if(!$_SESSION['logged_in']){
        header("Location: ../../webdev raghav/index.php");
        exit;
    }
    include("db_connect.php");

    $user_id = $_SESSION['user_id'];
    echo $user_id;

    $sql = "select phone_num,email,B_S from userProfile where user_id = '$user_id';";

    $result = mysqli_query($connection, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $phonenumber = $row['phone_num'];
        $email = $row['email'];
        if ($row['B_S'] == 0) {
            $role = "buyer";
        } else {
            $role = "seller";
        }
    };
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE PAGE</title>
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="profile">
        <div class="name">
            <div class="picDiv"><img class="profile_pic" src="../images/profilepic.jpg"></div>
            <div class="welcome_div">
                <P class="profile_MAIN">WELCOME</P>
            </div>
        </div>
        <div class="details">
            <div class="profile_items">
                <p class="profile_items_main">PHONE NUMBER : <?php echo $phonenumber; ?></p>
            </div>
            <div class="profile_items">
                <p class="profile_items_main">EMAIL : <?php echo $email; ?></p>
            </div>
            <div class="profile_items">
                <p class="profile_items_main">ROLE : <?php echo $role; ?></p>
            </div>

            <form method="post" action="">
                <button class="logoutbutton" type="submit" name="submit">LOGOUT</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        session_destroy();
        header("Location:../webdev raghav/index.php");
        exit;
    }
?>