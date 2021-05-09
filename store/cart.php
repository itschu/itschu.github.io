<?php

    require_once('../config/functions.php');
    $allProducts = getProducts($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <title>Cart - Zimarex | Ecommerce Webstore</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <style>
        .addShadow{ 
            box-shadow: 0 5px 15px rgb(0 0 0 / 30%);
        }

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

        <!-- Navigation -->
        <?php require_once('../libs/nav.php') ?>

        <!-- Cart Items -->
        <div class="container cart">
            
        </div>

        <div class="alertMessage" style="display: flex; justify-content: center;">
        
        </div>

        <div class="dummyDiv noShow"></div>
        <!-- Footer -->

         <!-- other products -->
        <?php require_once('../libs/related-products.php') ?>

        <?php require_once('../libs/footer.php') ?>
        <!-- End Footer -->

        <!-- Custom Scripts -->
        <script src="../assets/js/products.js"></script>
        <script src="../assets/js/slider.js"></script>
        <script src="../assets/js/index.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script> 
            $('document').ready(function(){

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

            showCartItemOnUI(); 
        </script>
  </body>
</html>

