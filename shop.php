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
                            <h2>Shop</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
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
                                    <!-- Grid & List View Start -->
                                    <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                        <div class="grid-list-option d-flex">
                                            <ul class="nav">
                                                <li>
                                                    <a class="active show" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                                </li>
                                                <li>
                                                    <a data-bs-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                                </li>
                                            </ul>
                                            <p>Showing 1–9 of 41 results</p>
                                        </div>
                                        <!--Toolbar Short Area Start-->
                                        <div class="toolbar-short-area d-md-flex align-items-center">
                                            <div class="toolbar-shorter ">
                                                <label>Sort By:</label>
                                                <select class="wide">
                                                    <option data-display="Select">Nothing</option>
                                                    <option value="Relevance">Relevance</option>
                                                    <option value="Name, A to Z">Name, A to Z</option>
                                                    <option value="Name, Z to A">Name, Z to A</option>
                                                    <option value="Price, low to high">Price, low to high</option>
                                                    <option value="Price, high to low">Price, high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Toolbar Short Area End-->
                                    </div>
                                    <!-- Grid & List View End -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 order-lg-1 order-2">
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Product categories</h3>
                                        <ul class="sidebar-list">
                                            <li><a href="#"><i class="fa fa-plus"></i>Accessories <span class="count">(14)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Decor <span class="count">(14)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Furniture <span class="count">(28)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Lighting <span class="count">(14)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Outdoor <span class="count">(14)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Sports <span class="count">(13)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Storage <span class="count">(9)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Toys <span class="count">(9)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Uncategorized <span class="count">(0)</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- Single Sidebar End  -->
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Filter by price</h3>
                                        <div class="sidebar-price">
                                            <div id="price-range" class="mb-20"></div>
                                            <button type="button" class="btn">Filter</button>
                                            <input type="text" id="price-amount" class="price-amount" readonly>
                                        </div>
                                    </div>
                                    <!-- Single Sidebar End  -->
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Filter by</h3>
                                        <ul class="sidebar-list">
                                            <li><a href="#"><i class="fa fa-plus"></i>Gold <span class="count">(1)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>Green <span class="count">(1)</span></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i>White <span class="count">(1)</span></a></li>
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
                                    <!-- Single Sidebar Start  -->
                                    <div class="common-sidebar-widget">
                                        <h3 class="sidebar-title">Product tags</h3>
                                        <ul class="sidebar-tag">
                                            <li><a href="#">blouse</a></li>
                                            <li><a href="#">clothes</a></li>
                                            <li><a href="#">fashion</a></li>
                                            <li><a href="#">handbag</a></li>
                                            <li><a href="#">laptop</a></li>
                                        </ul>
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
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$113.00</span> <span class="main-price discounted">$180.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$86.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Discus Floor and Table</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$290.00</span> <span class="main-price discounted">$330.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">Sale</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Sled Mini Sideboard</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$90.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Mega 2 Seater Sofa</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$390.00</span> <span class="main-price discounted">$470.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Sentei Pruning Shears</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$65.00</span> </p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-29%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$280.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">Sale</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$250.00</span> <span class="main-price discounted">$280.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$180.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Classic Chair</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$60.00</span> </p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Classic Chair Wodden</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$183.00</span> <span class="main-price discounted">$200.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Classic Table Wodden</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$290.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Miniature Almari</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$230.00</span> <span class="main-price discounted">$250.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">Sale</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                                                            <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="list" class="tab-pane fade">
                                                        <div class="product-list-view">
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">New</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$210.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">New</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">New</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$130.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">New</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$190.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">Sale</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span>-20%</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$153.00</span> </p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span>-29%</span>
                                                                                </div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
                                                            <!-- Single List Product Start -->
                                                            <div class="product-list-item mb-40">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="single-grid-product">
                                                                            <div class="product-image">
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                                    <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-6">
                                                                        <div class="product-content-shop-list">
                                                                            <div class="product-content">
                                                                                <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                                                </div>
                                                                                <p class="product-price"><span class="discounted-price">$287.00</span></p>
                                                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single List Product Start -->
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
        <!-- Newsletter Section Start -->
        <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe Our Newsletter</h2>
                            <p>Subscribe Today for free and save 10% on your first purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-wrap">
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your Email Address Here..." required>
                                    <button type="submit" value="submit">SUBSCRIBE!</button>
                                </form>

                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section End -->
        <?php
include 'layouts/footer.php';
?>