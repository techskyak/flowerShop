<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>about us</h3>
        <p> <a href="index.php">home</a> / about </p>
    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img-1.png" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>At AMflowers, we stand out for a reason. Our commitment to excellence, quality, and customer satisfaction sets us apart. Discover the difference of choosing us for all your needs</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="content">
                <h3>what we provide?</h3>
                <p>
                <pre style="text-align: center; font-size:12px" >
                    What We Provide at AMflowers
                    At AMflowers, we offer much more than just flowers. Our services include:
                    - Exquisite Floral Arrangements
                    - Custom Flower Bouquets
                    - Same-Day Flower Delivery
                    Experience the beauty and elegance of our floral creations. We're here to make every occasion special.
                </pre>
                </p>

                <a href="contact.php" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="images/about-img-2.jpg" alt="">
            </div>

        </div>

        <div class="flex">

            <div class="image">
                <img src="images/about-img-3.jpg" alt="">
            </div>

            <div class="content">
                <h3>who we are?</h3>
                <p>At AMflowers, we're not just a flower shop; we're a team of passionate floral enthusiasts dedicated to bringing beauty and joy to your life. Our commitment to excellence, creativity, and personalized service sets us apart. Discover the heart and soul behind AMflowers.</p>
                <a href="#reviews" class="btn">clients reviews</a>
            </div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/50kb.jpg" alt="">
                <p>Elegance meets affordability. AMflowers exceeded expectations. We're delighted with their artistry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>AKASH</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Reliable, top-quality florist. AMflowers adds charm to our events. Clients adore their creations.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>RIYA</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>AMflowers brings floral dreams to life. The attention to detail and variety are impressive.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>MOHIT</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.png" alt="">
                <p>AMflowers made our special day even more beautiful. Professional, friendly, and exquisite arrangements. Perfect choice!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>DIVYANSHI</h3>
            </div>

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Exceptional service, timely delivery. Their blooms are a delight! Highly recommended for all your floral needs.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>AMIT</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="">
                <p>Stunning arrangements! AMflowers consistently delivers elegance and freshness. A go-to for every occasion.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PARUL MA'AM</h3>
            </div>

        </div>

    </section>











    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>