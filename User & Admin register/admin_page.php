<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');

}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

    <!-- FONT  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    
    <div class="container">

        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name']; ?></span></h1>
            <p>this is an admin page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>

    </div>

</body>
</html>