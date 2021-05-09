<!-- Footer -->
    <footer id="footer" class="section footer">
        <div class="container">
        <div class="footer-container">
            <div class="footer-center">
            <h3>EXTRAS</h3>
            <a href="#">Vendors</a>
            <a href="#">Gift Certificates</a>
            <a href="#">Affiliate</a>
            <!-- <a href="#">Specials</a> -->
            <!-- <a href="#">Site Map</a> -->
            </div>
            <div class="footer-center">
            <h3>INFORMATION</h3>
            <a href="#">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
            <!-- <a href="#">Site Map</a> -->
            </div>
            <div class="footer-center">
            <h3>MY ACCOUNT</h3>
            <?php if(!isset($session_id)){  ?>
                <a href="./login.php">Login</a>
                <a href="./sign-up.php">Sign Up</a>
                <?php }else{  ?>
                <a href="../account">My Account</a>
                <a href="../account">Order History</a>
                <a href="#">Wish List</a>
                <a href="#">Newsletter</a>
                <!-- <a href="#">Returns</a> -->
            <?php }; ?>
            </div>
            <div class="footer-center">
            <h3>CONTACT US</h3>
            <div>
                <span>
                <i class="fas fa-map-marker-alt"></i>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, Nigeria
            </div>
            <div>
                <span>
                <i class="far fa-envelope"></i>
                </span>
                support@zimarex.com
            </div>
            <div>
                <span>
                <i class="fas fa-phone"></i>
                </span>
                456-456-4512
            </div>
            <div class="payment-methods">
                <img src="../assets/images/payment.png" alt="">
            </div>
            </div>
        </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->