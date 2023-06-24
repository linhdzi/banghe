<?php
include 'layouts/header.php';
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
                            <h2>Wishlist</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Wishlist</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Wishlist section start-->
        <div class="wishlist-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                       >
                                        <th class="pro-addtocart">Add to cart</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Cable Restorer</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        
                                        <td class="pro-addtocart"><button class="btn">Add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Wishlist section end-->
        
        <?php
include 'layouts/footer.php';
?>