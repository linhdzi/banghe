

<?php

include 'layouts/header.php';
require_once './2_Controller/adminController.php';
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
                                        <th class="pro-quantity">change</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="get" action="search.php">
                                    
                                    <input type="text"  name="" placeholder="name">
                                    <button type="submit">Tìm kiếm</button>
                                </form>
                                   
                                    <?php
                                    
                                    showProduct();
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    
                    </div>

                </div>




                <div class="col-12">
    <!-- Cart Table -->
    <div class="cart-table table-responsive mb-30">
        <table class="table">
            <thead>
                <tr>
                    <th class="pro-thumbnail">BrandName</th>
                    
                    <th class="pro-remove">Remove</th>
                    <th class="pro-subtotal">change</th>
                    
                </tr>
            </thead>
            <tbody>
            
               <td style="display: inline-block">
            <form method="get" action="admin.php">
                                    
                                    <input type="text"  name="Brand" placeholder="name">
                                    <button type="submit">add</button>
            </form>
        
        </td>
                <?php
                
                showCate();
                
                ?>
            </tbody>
        </table>
    </div>


</div>

            </div>
        </div>
        
       
        <?php
include 'layouts/footer.php';
?>   