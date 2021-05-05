<?php

    require_once('../config/functions.php');
    $allProducts = getProducts($con, null);
    shuffle($allProducts);
    
    if(isset($_GET['search'])){
        $searchQuery = $_GET['search'];
        $searchProducts = searchProducts($con, $searchQuery);
    }else{
        $searchQuery = null;
    }

    if(empty($searchProducts)){
        $searchProducts = $allProducts;
    }
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


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <title>Zimarex - All Products - Ecommerce Store</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <style>
        .addShadow{
            box-shadow: 0 5px 15px rgb(0 0 0 / 30%);
        }
    </style>
</head>

<body>
     <!-- Navigation -->
    <?php 
        require_once('../libs/nav.php') 
    ?>

    <!-- PRODUCTS -->
    
    <?php 
        if($searchQuery == null){
            require_once('../libs/all-products.php');
        }else{
            require_once('../libs/search-products.php');
        }
    ?>
   
    <div class="alertMessage" style="display: flex; justify-content: center;">
        
    </div>

    <!-- Footer -->
    <?php require_once('../libs/footer.php') ?>
    <!-- End Footer -->

    <!-- Custom Scripts -->
    <script src="../assets/js/products.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/Pagination.js"> </script>
</body>

</html>