<?php
require_once './2_Controller/headerController.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/nelson/nelson/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 07:40:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chair Shop </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="icon" href="assets/images/elysia.png"  type="image/x-icon">

    <!-- Place favicon.ico in the root directory -->
    <link href="htmldemo.net/nelson/nelson/assets/images/elysia.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="htmldemo.net/nelson/nelson/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="htmldemo.net/nelson/nelson/assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="htmldemo.net/nelson/nelson/assets/css/vendor/helper.css">
    <link rel="stylesheet" href="htmldemo.net/nelson/nelson/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="htmldemo.net/nelson/nelson/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Modernizr JS -->
    <script src="htmldemo.net/nelson/nelson/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-xl-1 col-lg-1 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area" style="margin-left: 20%;">
                                <a href="index.PHP"><img src="assets/images/elysia.png" style="height: 70px; width: auto;" alt=""></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <?php 
                                        ShowMenu();
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>

                        

                        <div class="col-xl-5 col-lg-5 col-md-9 col-12 "  >
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="header-search-cart-area  ">
                                        <ul>
                                            <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                                <!--Crunccy dropdown-->
                                                <ul class="currency-dropdown">
                                                   
                                                    <!--Account Currency Start-->
                                                    <li><a href="my-account.html">My account</a>
                                                        <ul>
                                                            <li><a href="login-register.html">Login</a></li>
                                                            
                                                            <li><a href="my-account.html">My account</a></li>
                                                            <li><a href="cart.php">Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--Account Currency End-->
                                                </ul>
                                                <!--Crunccy dropdown-->
                                            </li>
                                            <li class="mini-cart"><a href="cart.php"><i class="flaticon-shopping-cart"></i> <span class="mini-cart-total">$300.00(2)</span></a>
                                                <!--Mini Cart Dropdown Start-->
                                                <div class="header-cart">
                                                    <ul class="cart-items">
                                                        <li class="single-cart-item">
                                                            <div class="cart-img">
                                                                <a href="cart.php"><img src="assets/images/cart/cart1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="cart-content">
                                                                <h5 class="product-name"><a href="single-product.html">Dell Inspiron 24</a></h5>
                                                                <span class="product-quantity">1 ×</span>
                                                                <span class="product-price">$278.00</span>
                                                            </div>
                                                            <div class="cart-item-remove">
                                                                <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </li>
                                                        <li class="single-cart-item">
                                                            <div class="cart-img">
                                                                <a href="cart.html"><img src="assets/images/cart/cart2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="cart-content">
                                                                <h5 class="product-name"><a href="single-product.html">Lenovo Ideacentre 300</a></h5>
                                                                <span class="product-quantity">1 ×</span>
                                                                <span class="product-price">$23.39</span>
                                                            </div>
                                                            <div class="cart-item-remove">
                                                                <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="cart-total">
                                                        
                                                        <h5>Total : <span class="float-right">$46.79</span></h5>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a href="htmldemo.net/nelson/nelson/cart.html">buy</a>
                                                        
                                                    </div>
                                                </div>
                                                <!--Mini Cart Dropdown End-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <form class="d-flex" method="GET" action="shop.php">
                                    
                                    <input id="Brand" name="cateBrand" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                      <button  id="SearchByCateBrand"  class="btn btn-outline-success" type="submit" value="insert" name="insert">Search</button>
                                      </form>
                                      
                                     
                                        

                                </div>
                                

                                <div class="col-sm-1"></div>
                              </div>



                           
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="" style="padding-right: 10px;">
                                            <a href="index.php">
                                                <img src="assets/images/elysia.png" style="width: 68px; height: auto;"  class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-end">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.php"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="index.php">Home</a>
                                
                            </li>
                            <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                                
                            </li>
                            
                            <li class="menu-item-has-children"><a href="contact.php">Contact</a>
                            </li>
                            <li class="menu-item-has-children"><a href="about.php">About Us</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.html">Login</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)">€ Euro</a></li>
                                        <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png" alt=""> English</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                            
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End -->

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
