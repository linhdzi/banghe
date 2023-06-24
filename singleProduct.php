<?php
require_once 'layouts/header.php';
require_once './2_Controller/singleProductController.php';
?>
        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="fa fa-times"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-start">
                            <h2>Single Product</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Single Product</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
       <!-- Single Product Section Start -->
       <div class="single-product-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-25 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">



                                <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <?php 
                                                renderKhoiSlideTo();
                                            ?>
                                        </div>
                                        <div class="product-details-thumbs">
                                            <?php 
                                                renderKhoiSlideThumb();
                                            ?>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        
                                        <h2><?php echo($ProductDetail['name']) ?></h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            
                                        </div>
                                        <div class="single-product-price">
                                            
                                            <span class=""><p>$<?php
                                            showPrice();
                                            
                                            ?></p></span>
                                        </div>
                                        <div class="product-description">
                                            <p><?php
                                            showDescription();
                                            
                                            ?></p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-variants">
                                                    <div class="product-variants-item">
                                                        <span class="control-label">Size</span>
                                                        <select name="size">
                                                            <option value="1">S</option>
                                                            <option value="2">M</option>
                                                            <option value="3">X</option>
                                                            <option value="4">XL</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0"><span class="current">S</span>
                                                            <ul class="list">
                                                                <li data-value="1" class="option selected focus">S</li>
                                                                <li data-value="2" class="option">M</li>
                                                                <li data-value="3" class="option">X</li>
                                                                <li data-value="4" class="option">XL</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-variants-item">
                                                        <span class="control-label">Color</span>
                                                        <ul class="procuct-color">
                                                            <li><a href="#"><span class="color"></span></a></li>
                                                            <li class="active"><a href="#"><span class="color"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="btn"><i class="fa fa-shopping-bag"></i> add to cart</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                                Brand: 
                                                <a href="#"><?php 
                                                showid();
                                                ?></a>,
                                               
                                            </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="./assets/words/Thong so san pham.docx"><i class="fa fa-vimeo"></i></a></li>
                                                <li><a href="./assets/words/Thong so san pham.docx"><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        

        <!--Product section start-->
        <div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-50 mb-xs-20">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row product-slider">
                    

                    
                    

                    <?php
                    ShowRelatedProducts();
                    ?>

                   

                    
                </div>

            </div>
        </div>
        <!--Product section end-->
        
     


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/nelson/nelson/single-product-variable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 07:40:52 GMT -->
</html>
