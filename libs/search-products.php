<?php 
    $prodCat = array_map(function($curr){
        return $curr['category'];
    }, $allProducts);
    $uniqueCat = array_unique($prodCat);
    sort($uniqueCat);


    $nn = array_map(function($curr){
        return $curr['name'];
    }, $allProducts);
    $uniqueName = array_unique($nn);
    sort($uniqueName);
?>

<section class="section products products-margin">
    <div class="products-layout container">
        <div class="col-1-of-4">
            <div>
                <div class="block-title">
                    <h3>Category</h3>
                </div>
                <ul class="block-content">
                    <?php array_map(function($cur_cat){
                        printf('
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                    <span>%s</span>
                                    <!-- <small>(10)</small> -->
                                </label>
                            </li>
                        ', $cur_cat);
                    }, $uniqueCat); ?>
                </ul>
            </div>

            <div>
                <div class="block-title">
                    <h3>Popular</h3>
                </div>

                <ul class="block-content">
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Rice</span>
                        <!-- <small>(10)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Beans</span>
                        <!-- <small>(7)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span> Garri</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Noodles</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Yams</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Potatoes</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Meat</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                        <span>Fish</span>
                        <!-- <small>(3)</small> -->
                        </label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-3-of-4">
            <form action="">
                <div class="item">
                    <label for="sort-by">Sort By</label>
                    <select name="sort-by" id="sort-by">
                        <option value="title" selected="selected" disabled>Name</option>
                        <?php foreach($uniqueName as $nam) : ?>
                            <option value="<?php echo $nam; ?>"> <?php echo $nam; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="item">
                    <label for="order-by">Sort By</label>
                    <select name="order-by" id="sort-order">
                        <option value="ASC" selected="selected" disabled>Category</option>
                        <?php foreach($uniqueCat as $catt) : ?>
                            <option value="<?php echo $catt; ?>"> <?php echo $catt; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <a href="">Apply</a>
            </form>

            <div class="product-layout">
                <?php foreach($searchProducts as $item) : ?>

                    <div class="product">
                        <a href="./productDetails.php?prod=<?php echo $item['unique_key'] ?>">
                            <div class="img-container">
                                <div class="tag _dsct">-8%</div>
                                    <img src="<?php echo $item['img_1'] ?>" alt="" />
                                <div class="addCart addNow">
                                    <i class="fas fa-shopping-cart addNow"></i>
                                </div>
                
                                <ul class="side-icons">
                                    <span><i class="far fa-heart"></i></span>
                                    <span><i class="fas fa-sliders-h"></i></span>
                                </ul>
                            </div>

                            <div class="bottom">
                                <a href=""><?php echo $item['name'] ?></a>
                                <div class="price">
                                    <span>₦<?php echo $item['price'] ?></span>
                                    <input type="hidden" value="<?php echo $item['old_price'] ?>" name="old price">
                                    <input type="hidden" value="<?php echo $item['price'] ?>" name="new price">
                                    <?php if($item['old_price'] > 0){ echo "<span class='cancel'> ₦".$item['old_price']."</span>"; } ?> 
                                </div>
                            </div>
                            <input type='hidden' value="<?php echo $item['unique_key'] ?>" />
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- PAGINATION -->
            <ul class="pagination">
                <span class="icon">››</span>
                <span class="last">Prev</span>
                <span>2</span>
                <span class="last">Next <!-- » --></span>
                <span class="icon">»›</span>
            </ul>
        </div>
    </div>
</section>