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
    <link rel="stylesheet" href="../assets/css/login.css" />
    <title>Login - Zimarex | Ecommerce Webstore</title>
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

    <section>
        <div class="imgBx">
            <img src="../assets/images/prod1.png" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <form action="#">

                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password">
                    </div>
                    <div class="remember">
                        <label for="remember">
                            <input type="checkbox" name="">
                            Remember Me
                        </label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Login" name="login">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account ? <a href="./sign-up.php"> Sign up </a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php require_once('../libs/footer.php') ?>
    <!-- End Footer -->
    <!-- Custom Scripts -->
    <script src="../assets/js/products.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/index.js"></script>
</body>

</html>