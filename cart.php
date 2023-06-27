

<?php
session_start(); // khởi động phiên làm việc Session
include 'layouts/header.php';
require_once './2_Controller/cartController.php';
?>
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-start">
                            <h2>Shopping Cart</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Cart section start-->
        <div class="cart-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
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
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                   
                                    <?php
                                    
                                    showProductToCart();
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">
                                <!-- Calculate Shipping -->
                                <div class="calculate-shipping">
                                    <h4>Shipping</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select">
                                                    <option>Dhaka</option>
                                                    <option>Barisal</option>
                                                    <option>Khulna</option>
                                                    <option>Comilla</option>
                                                    <option>Chittagong</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Estimate</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Discount Coupon -->
                                
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        
                                        <h3>Grand Total <span>$75.00</span></h3>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="btn">Checkout</button>
                                        <button class="btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        
       
        <?php
include 'layouts/footer.php';
?>   