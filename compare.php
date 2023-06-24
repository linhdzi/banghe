<?php
include 'layouts/header.php';
require_once './2_Controller/compareController.php';
?>
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-start">
                            <h2>Compare</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Compare</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Compare Page Start -->
        <div class="page-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40   pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <!-- Compare Table -->
                            <div class="compare-table table-responsive">
                                <table class="table mb-0">
                                    <tbody>


                                    
                                        <tr>
                                            <td class="first-column">Product</td>
                                            
                                            
    <?php
showProductToCompare();
?>  

                                           
                                        </tr>
                                        <tr>
                                            <td class="first-column">Description</td>
                                            <?php
                                            showDesToCompare();
                                            ?>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Price</td>
                                            <?php
                                            showPriceToCompare();
                                            ?>
                                            
                                        </tr>
                                       
                                        
                                        <tr>
                                            <td class="first-column">Add to cart</td>
                                            <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                            <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                            <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Delete</td>
                                            <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                            <td  class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                            <td class="Dele" DELEID ="13" ><button><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Rating</td>
                                            <td class="pro-ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td class="pro-ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </td>
                                            <td class="pro-ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Compare Page End -->
        
        <?php
include 'layouts/footer.php';
?>