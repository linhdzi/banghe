<?php
require_once 'layouts/header.php';
require_once './2_Controller/shopController.php';
                                                                

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
                            <h2>Shop</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Shop Section Start -->
        <div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-12">
                                 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 order-lg-1 order-2">
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Product Brand</h3>
                                        <ul class="sidebar-list">
                                            
                                            <?php  
                                            hienThiDanhMucSanPham();
                                            ?>
                                        </ul>
                                    </div>
                                    <!-- Single Sidebar End  -->
                                    
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Compare Products</h3>
                                        <div class="compare-products-list">
                                            <ul>
                                                <li>
                                                    <a href="#" class="title">Cras neque metus</a>
                                                    <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="title">Cras neque metus</a>
                                                    <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <a href="#" class="clear-btn">Clear all</a>
                                            <button type="button" class="btn compare-btn">Compare</button>
                                        </div>
                                    </div>
                                    <!-- Single Sidebar End  -->
                                  
                                </div>
                                <div class="col-lg-9 order-lg-2 order-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">
                                                <div id="myTabContent-2" class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show">
                                                        <div class="product-grid-view">
                                                            <div class="row">
                                                                

                                                                <?php
                                                                 
                                                                 hienthiTheobrand();
                                                                ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-30 mb-sm-40 mb-xs-30">
                                        <div class="col">
                                            <ul class="page-pagination">
                                                <li class="active"><a href="#">01</a></li>
                                                <li><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Section End -->

      
        <?php
        include 'layouts/footer.php';        
        
        ?>

    

?>