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
    <title>Sign Up - Zimarex | Ecommerce Webstore</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <style>
        .addShadow{
            box-shadow: 0 5px 15px rgb(0 0 0 / 30%);
        }

        section{
            height: 600px;
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
            <img src="../assets/images/login-img.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sign Up</h2>
                <form action="../libs/log.php" id="form" method="post">

                    <div class="inputBx form-control">
                        <span>Email</span>
                        <input name="email" type="email" placeholder="a@florin-pop.com" id="email">
                        <!-- <i class="fas fa-check-circle"></i>
			            <i class="fas fa-exclamation-circle"> </i> -->
                        <small> </small>
                    </div>
                    <div class="inputBx form-control">
                        <span>Password</span>
                        <input name="password" type="password"  id="password">
                        <!-- <i class="fas fa-check-circle"></i>
			            <i class="fas fa-exclamation-circle">   </i> -->
                        <small> </small>
                    </div>

                     <div class="inputBx form-control">
                        <span>Re Type Password</span>
                        <input name="password2" type="password"  id="password2">
                        <!-- <i class="fas fa-check-circle"></i>
			            <i class="fas fa-exclamation-circle">   </i> -->
                        <small> </small>
                    </div>
                    <!-- <div class="remember form-control">
                        <label for="remember">
                            <input type="checkbox" name="">
                            Remember Me
                        </label>
                    </div> -->
                    <div class="inputBx form-control">
                        <input type="submit" value="Register" name="register">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account? <a href="./login.php"> <b>Login</b> </a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php require_once('../libs/footer.php') ?>
    <!-- End Footer -->
    <!-- Custom Scripts -->
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/products.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/index.js"></script>
</body>

</html>