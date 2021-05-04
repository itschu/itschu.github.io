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
    <title>Zimarex | Cart - Ecommerce Website</title>

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
        <?php require_once('../libs/nav.php') ?>

        <!-- Cart Items -->
        <div class="container cart">
            <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                <div class="cart-info">
                    <img src="../assets/images/prod4.png" alt="" />
                    <div>
                    <p>Product Name</p>
                    <span>Price: ₦500.00</span>
                    <br />
                    <a href="#">remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1" min="1" /></td>
                <td>₦500.00</td>
            </tr>
            <tr>
                <td>
                <div class="cart-info">
                    <img src="../assets/images/prod1.png" alt="" />
                    <div>
                    <p>Product Name</p>
                    <span>Price: ₦900.00</span>
                    <br />
                    <a href="#">remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1" min="1" /></td>
                <td>₦900.00</td>
            </tr>
            <tr>
                <td>
                <div class="cart-info">
                    <img src="../assets/images/prod3.png" alt="" />
                    <div>
                    <p>Product Name</p>
                    <span>Price: ₦700.00</span>
                    <br />
                    <a href="#">remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1" min="1" /></td>
                <td>₦700.00</td>
            </tr>
            <tr>
                <td>
                <div class="cart-info">
                    <img src="../assets/images/prod2.png" alt="" />
                    <div>
                    <p>Product Name</p>
                    <span>Price: ₦600.00</span>
                    <br />
                    <a href="#">remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1" min="1" /></td>
                <td>₦600.00</td>
            </tr>
            <tr>
                <td>
                <div class="cart-info">
                    <img src="../assets/images/ppp.png" alt="" />
                    <div>
                    <p>Product Name</p>
                    <span>Price: ₦600.00</span>
                    <br />
                    <a href="#">remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1" min="1" /></td>
                <td>₦600.00</td>
            </tr>
            </table>

            <div class="total-price">
            <table>
                <tr>
                <td>Subtotal</td>
                <td>₦200</td>
                </tr>
                <tr>
                <td>Tax</td>
                <td>₦50</td>
                </tr>
                <tr>
                <td>Total</td>
                <td>₦250</td>
                </tr>
            </table>
            <a href="#" class="checkout btn">Proceed To Checkout</a>
            </div>
        </div>

        <!-- Footer -->
        <?php require_once('../libs/footer.php') ?>
        <!-- End Footer -->

        <!-- Custom Scripts -->
        <script src="../assets/js/products.js"></script>
        <script src="../assets/js/slider.js"></script>
        <script src="../assets/js/index.js"></script>
  </body>
</html>
