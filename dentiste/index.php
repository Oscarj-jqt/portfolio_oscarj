<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');


if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message = 'appointment made successfully !';
    }else {
        $message[] = 'appointment failed';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"/>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="./dentist_styles.css">
    <title>Dentist</title>
</head>
<body>
    
<!-- HEADER SECTION START -->

<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental <span>Care.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>

</header>

<!-- HEADER SECTION END -->



<!-- HOME SECTION START  -->


    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Welcome to Dental Care - Where expertise meets comfort. Quality dental care tailored to give you the smile you deserve.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>


<!-- HOME SECTION END  -->


<!-- about section start  -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="./assets/Images/woman-patient-dentist.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Our experienced team of oral health professionals is dedicated to providing quality services, ranging from preventive care to advanced treatments. Whether you need a routine cleaning, cosmetic care, or more complex solutions, we are here for you.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>


<!-- about section end  -->

<!-- services section start  -->
<section class="services" id="services">
    <h1 class="heading">our services</h1>

    <div class="box-container">

        <div class="box">
            <img src="./assets/Images/tooth.PNG" alt="">
            <h3>Alignment specialist</h3>
            <p>Our dental service offers personalized alignment solutions for a perfect, harmonious dental aesthetic.</p>
        </div>

        <div class="box">
            <img src="./assets/Images/tools.PNG" alt="">
            <h3>Cosmetic dentistry</h3>
            <p> our online dental service specializes in transforming smiles through personalized cosmetic enhancements </p>
        </div>

        <div class="box">
            <img src="./assets/Images/care.PNG" alt="">
            <h3>Oral Hygiene Experts</h3>
            <p> Elevating dental wellness, our online service focuses on personalized oral care solutions for a healthier smile</p>
        </div>

        <div class="box">
            <img src="./assets/Images/tooth 3.PNG" alt="">
            <h3>Root Canal Specialist</h3>
            <p>Unrivaled expertise in endodontic care provides precision root canal treatments</p>
        </div>

        <div class="box">
            <img src="./assets/Images/advisory.PNG" alt="">
            <h3>Live Dental Advisory</h3>
            <p>Your real-time source for expert dental guidance, offering personalized advice and insights to empower your oral health journey.</p>
        </div>

        <div class="box">
            <img src="./assets/Images/tooth 2.PNG" alt="">
            <h3>Cavity Inspection</h3>
            <p>Our service ensures thorough inspections and personalized solutions for optimal oral health.</p>
        </div>
    </div>

</section>
    
<!-- servies section end  -->


<!-- process section start  -->


<section class="process">
    
    <h1 class="heading">work process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="./assets/Images/dentist 1.PNG" alt="">
            <h3>Cosmetic Dentistry</h3> 
            <p>we customize aesthetic treatments to unveil your ideal dental transformation with precision and care.</p>
        </div>

        <div class="box">
            <img src="./assets/Images/dentist 2.PNG" alt="">
            <h3>Pediatric Dentistry</h3> 
            <p>our service prioritizes gentle treatments and personalized attention for a lifetime of healthy dental habits.</p>
        </div>

        <div class="box">
            <img src="./assets/Images/dentist 3.PNG" alt="">
            <h3>Dental Implants</h3> 
            <p>our service seamlessly integrates personalized implant solutions for a confident and enduring dental restoration.</p>
        </div>
    </div>
</section>
<!-- process section ends  -->

<!-- review section start -->


<section class="reviews" id="reviews">

    <h1 class="heading">satisfied clients </h1>

    <div class="box-container container">

        <div class="box">
            <img src="./assets/Images/man-person-people-hair-white-boy-1046502-pxhere.com.jpg" alt="" width="">
            <p>Alignment Specialist transformed my smile seamlessly! Their online consultations and precise treatments gave me perfectly aligned teeth, boosting my confidence.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="./assets/Images/person-people-girl-woman-hair-female-903073-pxhere.com.jpg" alt="" width="">
            <p>Cosmetic Dentistry surpassed my expectations! The online process was convenient, and the personalized treatment plan enhanced my smile, leaving me thrilled with the stunning results.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="./assets/Images/happy-casual-adult-male-city-cheerful-1674988-pxhere.com.jpg" alt="" width="">
            <p>Pediatric Dentistry's online service was exceptional. The personalized and gentle care made our child's dental experience positive and comfortable.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

    </div>
</section>
<!-- review section end  -->


<!-- contact section start  -->


<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
            if(isset($message)) {
                foreach($message as $message) {
                    echo '<p class ="message">'.$message.'</p>';
                }
            }

        ?>
        
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>appointment date : :</span>
        <input type="datetime-local" name="date" class="box">
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    
    
    
    </form>
</section>

<!-- contact section end  -->







</body>

<script src="./dentist_script.js"></script>
</html>