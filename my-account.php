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
                            <h2>My Account</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>My Account</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--My Account section start-->
        <div class="my-account-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <button class="active" type="button" id="dashboad-tab" data-bs-target="#dashboad" data-bs-toggle="tab" role="tab" aria-controls="dashboad" aria-selected="true">
                                        <i class="fa fa-dashboard"></i>
                                        Dashboard
                                    </button>
                                    <button type="button" id="orders-tab" data-bs-target="#orders" data-bs-toggle="tab" role="tab" aria-controls="orders" aria-selected="false">
                                        <i class="fa fa-cart-arrow-down"></i> 
                                        Orders
                                    </button>
                                    <button type="button" id="download-tab" data-bs-target="#download" data-bs-toggle="tab" role="tab" aria-controls="download" aria-selected="false">
                                        <i class="fa fa-cloud-download"></i> 
                                        Download
                                    </button>
                                    <button type="button" id="payment-tab" data-bs-target="#payment-method" data-bs-toggle="tab" role="tab" aria-controls="payment-method" aria-selected="false">
                                        <i class="fa fa-credit-card"></i> 
                                        Payment Method
                                    </button>
                                    <button type="button" id="address-tab" data-bs-target="#address-edit" data-bs-toggle="tab" role="tab" aria-controls="address-edit" aria-selected="false">
                                        <i class="fa fa-map-marker"></i> 
                                        address
                                    </button>
                                    <button type="button" id="account-tab" data-bs-target="#account-info" data-bs-toggle="tab" role="tab" aria-controls="account-info" aria-selected="false">
                                        <i class="fa fa-user"></i> 
                                        Account Details
                                    </button>
                                    <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>

                                            <div class="welcome mb-20">
                                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                                            </div>

                                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                                recent orders, manage your shipping and billing addresses and edit your
                                                password and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$45</td>
                                                            <td><a href="cart.html" class="btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Katopeno Altuni</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$100</td>
                                                            <td><a href="cart.html" class="btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Murikhete Paris</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$99</td>
                                                            <td><a href="cart.html" class="btn">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katopeno Altuni</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>

                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>

                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                            </address>

                                            <a href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-tab" tabindex="0">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>

                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" placeholder="First Name" type="text">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" placeholder="Last Name" type="text">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="display-name" placeholder="Display Name" type="text">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Email Address" type="email">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <h4>Password change</h4>
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="New Password" type="password">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="save-change-btn">Save Changes</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--My Account section end-->
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