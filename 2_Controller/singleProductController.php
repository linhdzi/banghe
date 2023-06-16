<?php

require_once './3_Service/singleProductService.php';

$IdProduct = $_GET['ProductId'];     
     $ProductDetail = service_getProductsById($IdProduct);

   function hienThiChiTietSP(){
    global $IdProduct;
    $products = null;
    $products = service_getProductsById($IdProduct);
$html = '';
    foreach($products as $row){
        $html = $html . '
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
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-1.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-1.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-2.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-2.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-3.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-3.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-4.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-4.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-5.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-5.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs">
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>'.$row['name'].'</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
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
                                                Categories: 
                                                <a href="#">Accessories</a>,
                                                <a href="#">Electronics</a>
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

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab section">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#description">Description</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#reviews">Reviews (1)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                        <p>'.$row['description'].'</p>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment">
                                        <h2>1 review for Sit voluptatem</h2>
                                        <ul>
                                            <li>
                                                <div class="product-comment">
                                                    <img src="assets/images/icons/author.png" alt="">
                                                    <div class="product-comment-content">
                                                        <div class="product-reviews">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p class="meta">
                                                            <strong>admin</strong> - <span>November 22, 2018</span>
                                                            <div class="description">
                                                                <p>Good Product</p>
                                                            </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="review-form-wrapper">
                                            <div class="review-form">
                                                <span class="comment-reply-title">Add a review </span>
                                                <form action="#">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <label>Your rating</label>
                                                        <div class="rating">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <label>Comment</label>
                                                            <textarea name="message" cols="40" rows="8"></textarea>
                                                        </div>
                                                        <div class="review-comment-form-author">
                                                            <label>Name </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="review-comment-form-email">
                                                            <label>Email </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="comment-submit">
                                                            <button type="submit" class="form-button">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
    }
    echo $html;
}



?>