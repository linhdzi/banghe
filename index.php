<?php
include 'layouts/header.php';
// sua cai nay

?>
        <!--slider section start-->
        <div class="hero-section section position-relative">
            <div class="hero-slider section">

                <!--Hero Item start-->
                <div class="hero-item  bg-image" data-bg="htmldemo.net/nelson/nelson/assets/images/hero/hero-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">

                                    <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                        <a href="shop.html" class="btn">SHOP NOW</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="htmldemo.net/nelson/nelson/assets/images/hero/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">

                                    <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                        <a href="shop.html" class="btn">SHOP NOW</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

            </div>
        </div>
        <!--slider section end-->

        <!-- Banner section start -->
        <div class="banner-section section pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Single Banner Start -->
                        <div class="single-banner-item mb-30">
                            <div class="banner-image">
                                <a href="shop.html">
                                    <img src="htmldemo.net/nelson/nelson/assets/images/banner/banner1.jpg" alt="">
                                </a>
                            </div>
                            <div class="banner-content">
                                <h3 class="title">OFFICE <br> FURNITURE</h3>
                                    <a href="htmldemo.net/nelson/nelson/shop.html">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Single Banner Start -->
                        <div class="single-banner-item mb-30">
                            <div class="banner-image">
                                <a href="shop-left-sidebar.html">
                                    <img src="htmldemo.net/nelson/nelson/assets/images/banner/banner2.jpg" alt="">
                                </a>
                            </div>
                            <div class="banner-content ">
                                <h3 class="title">HOME <br> FURNITURE</h3>
                                    <a href="htmldemo.net/nelson/nelson/shop.html">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner section End -->




        <!--Product section start-->
        <div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-15">
                            <h2>Popular Furniture</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-content" style="padding-top:40px ;">
                    <div id="home" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row">

                        <?PHp
include './2_Controller/indexController.php';
?>

                            
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
        <!--Product section end-->












<!-- Mirrored from htmldemo.net/nelson/nelson/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 07:40:42 GMT -->
<?php
include 'layouts/footer.php';
?>