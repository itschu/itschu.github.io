<?php 
    $prodCat = array_map(function($curr){
        return $curr['category'];
    }, $allProducts);
    
    $uniqueCat = array_unique($prodCat);
    sort($uniqueCat);
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
                    <small>(10)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Beans</span>
                    <small>(7)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span> Garri</span>
                    <small>(3)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Noodles</span>
                    <small>(3)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Yams</span>
                    <small>(3)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Potatoes</span>
                    <small>(3)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Meat</span>
                    <small>(3)</small>
                    </label>
                </li>

                <li>
                    <input type="checkbox" name="" id="">
                    <label for="">
                    <span>Fish</span>
                    <small>(3)</small>
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
                    <option value="title" selected="selected">Name</option>
                    <option value="number">Price</option>
                    <option value="search_api_relevance">Relevance</option>
                    <option value="created">Newness</option>
                </select>
                </div>
                <div class="item">
                <label for="order-by">Order</label>
                <select name="order-by" id="sort-order">
                    <option value="ASC" selected="selected">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
                </div>
                <a href="">Apply</a>
            </form>

            <div class="product-layout">
                <?php foreach($allProducts as $item) : ?>

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
                <span>1</span>
                <span>2</span>
                <span class="icon">››</span>
                <span class="last">Last »</span>
            </ul>
            </div>
        </div>
    </section>