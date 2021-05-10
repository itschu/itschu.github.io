<!-- Navigation -->
    <nav class="nav addShadow">
        <div class="wrapper container">
            <div class="logo"><a href="/my-site/zimarex/">Zimarex</a></div>
            <ul class="nav-list">
                <div class="top">
                    <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
                </div>
                <li><a href="/my-site/zimarex/index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li>
                    <a href="" class="desktop-item">Shop <span><i class="fas fa-chevron-down"></i></span></a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
                    <div class="mega-box">
                    <div class="content">
                        <div class="row">
                        <img src="../assets/images/woman.jpg" alt="" id="list-display-pic"/>
                        </div>
                        <div class="row">
                        <header>Frozen Foods</header>
                        <ul class="mega-links">
                            <li id="fBeef"><a href="./products.php?search=Frozen Beef&cat=protein">Frozen Beef</a></li>
                            <li id="fChicken"><a href="./products.php?search=Frozen Chicken&cat=protein">Frozen Chicken</a></li>
                            <li id="fFish"><a href="./products.php?search=Frozen Fish&cat=protein">Frozen Fish</a></li>
                            <li id="mFFoods"><a href="./products.php?search=&cat=protein">More Frozen Foods</a></li>
                        </ul>
                        </div>
                        <div class="row">
                        <header>Vegetables</header>
                        <ul class="mega-links">
                            <li id="vegTomato"><a href="./products.php?search=Tomatoes&cat=vegetables">Tomatoes</a></li>
                            <li id="vegPepper"><a href="./products.php?search=Pepper&cat=vegetables">Peppers</a></li>
                            <li id="vegLeaves"><a href="./products.php?search=Leaf&cat=vegetables">Cooking Leaves</a></li>
                            <li id="vegOther"><a href="./products.php?search=&cat=vegetables">Others</a></li>
                        </ul>
                        </div>
                        <div class="row">
                        <header>Food Grains</header>
                        <ul class="mega-links">
                            <li id="grainRice"><a href="./products.php?search=Rice&cat=protein">Rice</a></li>
                            <li id="grainGarri"><a href="./products.php?search=Garri&cat=protein">Garri</a></li>
                            <li id="grainBbean"><a href="./products.php?search=Beans&cat=protein">Beans</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </li>
                <li>
                    <a href="" class="desktop-item">Vendors <span><i class="fas fa-chevron-down"></i></span></a>
                    <input type="checkbox" id="showdrop1" />
                    <label for="showdrop1" class="mobile-item">Vendors <span><i class="fas fa-chevron-down"></i></span></label>
                    <ul class="drop-menu1">
                    <li><a href="">Vendor Store listings</a></li>
                    <li><a href="">Store Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="" class="desktop-item"> <?php echo $session_email ?> <span><i class="fas fa-chevron-down"></i></span></a>
                    <input type="checkbox" id="showdrop2" />
                    <label for="showdrop2" class="mobile-item"> <?php echo $session_email ?> <span><i class="fas fa-chevron-down"></i></span></label>
                    <ul class="drop-menu2">
                    <?php if(!isset($session_id)){  ?>
                        <li><a href="./login.php">Login</a></li>
                        <li><a href="./sign-up.php">Sign Up</a></li>
                    <?php }else{  ?>
                        <li><a href="../account">Dashboard</a></li>
                        <li><a href="?logout=true">Logout</a></li>
                    <?php }; ?>
                    </ul>
                </li>
                
                <!-- icons -->
                <li class="icons">
                    
                    <a href="./cart.php">
                        <span>
                            <img src="../assets/images/shoppingBag.svg" alt="" />
                            <small class="count d-flex cart-items">0</small>
                        </span>
                    </a>
                    <!-- <span><img src="../assets/images/search.svg" alt="" /></span> -->
                </li>
            </ul>
            <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>