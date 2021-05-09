<?php

    require_once('../config/functions.php');
    $allProducts = getProducts($con, 20);
    shuffle($allProducts);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Glidejs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <title>Zimarex | Ecommerce Webstore</title>
    <style>
        .product {
            padding: 0 10px;
            overflow: hidden;
        }

        .owl-next span, .owl-prev span{
            font-size: 1.55em;
            margin: 0 5px;
            font-weight: 700;
        }

    </style>
</head>

<body>
    
    <?php require_once('../libs/nav.php') ?>

    <div class="hero">
        <div class="left">
        <span>Exclusive Sales</span>
        <h1>UP TO 50% OFF ON SALES</h1>
        <small>Get all exclusive offers for the season</small>
        <a href="">View Products </a>
        </div>
        <div class="right">
        <img src="../assets/images/bg-2.png" alt="" />
        </div>
    </div>

    <section class="section category">
        <!-- <h2 class="title">Allow your style to match your ambition!</h2> -->
        <div class="category-center container">

        <div class="category-box">
            <div class="dashed-borders">
                <img src="../assets/images/cat1.svg" alt="">
                <div class="content">
                    <h2>Free Delivery</h2>
                    <!-- <span>155 Products</span> -->
                    <!-- <a href="#">shop now</a> -->
                </div>
            </div>
        </div>

        <div class="category-box">
            <img src="../assets/images/cat2.svg" alt="">
            <div class="content">
            <h2>Best Stores</h2>
            <!-- <span>155 Products</span> -->
            <!-- <a href="#">shop now</a> -->
            </div>
        </div>
        
        <div class="category-box">
            <img src="../assets/images/cat3.svg" alt="">
            <div class="content">
            <h2>Safe Transactions</h2>
            <!-- <span>155 Products</span> -->
            <!-- <a href="#">shop now</a> -->
            </div>
        </div>

        </div>
    </section>        


    <div class="alertMessage" style="display: flex; justify-content: center;">
        
    </div>
    
    <!-- Products -->
    <?php require_once('../libs/top-selling.php') ?>

    <section class="gallary container">
        <figure class="gallary-item item-1">
            <img src="../assets/images/grid_1.jpg" alt="" class="gallary-img">
            <div class="content">
            <h2>Popular Products</h2>
            <a href="#">View</a>
            </div>
        </figure>

        <figure class="gallary-item item-2">
            <img src="../assets/images/grid_2.jpg" alt="" class="gallary-img">
            <div class="content">
            <h2>Poultry</h2>
            <a href="#">View Category</a>
            </div>
        </figure>

        <figure class="gallary-item item-3">
            <img src="../assets/images/grid_3.jpg" alt="" class="gallary-img">
            <div class="content">
            <h2>Vegetables</h2>
            <a href="#">View Category</a>
            </div>
        </figure>

        <figure class="gallary-item item-4">
            <img src="../assets/images/grid_4.jpg" alt="" class="gallary-img">
            <div class="content">
            <h2>Dairy</h2>
            <a href="#">View Category</a>
            </div>
        </figure>
    </section>

    <!-- Related products -->
    <?php require_once('../libs/related-products.php') ?>

    <!-- other products -->
    <?php require_once('../libs/other-products.php') ?>

    <!-- ADVERT -->
    <section class="section advert">
        <div class="advert-layout container">

            <div class="item ">
                <!-- <img src="../assets/images/promo7.jpg" alt=""> -->
                <div class="content left">
                    <span>Exclusive Sales</span>
                    <h3>Spring Collections</h3>
                    <a href="">View Collection</a>
                </div>
            </div>

            <div class="item">
                <!-- <img src="../assets/images/promo8.jpg" alt=""> -->
                <div class="content  right">
                    <span>New Trending</span>
                    <h3>Designer Bags</h3>
                    <a href="">Shop Now </a>
                </div>
            </div>

        </div>
    </section>

    <?php require_once('../libs/footer.php') ?>

    <!-- Glidejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Custom Scripts -->
    <script src="../assets/js/products.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('document').ready(function(){
            // alert('loaded');

            $('.section .owl-carousel').owlCarousel({
                dots : true,
                nav : true,
                items : 1,
                loop : true,
                nav : true,
                responsive : {
                    0: {
                        items : 1.3
                    },
                    600: {
                        items : 3.2
                    },
                    1000: {
                        items : 5.2
                    }
                }
            });
        });
    </script>
</body>

</html>

