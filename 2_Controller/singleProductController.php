<?php

require_once './3_Service/singleProductService.php';

    $IdProduct = $_GET['ProductId'];     
    $ProductDetail = service_getProductsById($IdProduct);
    
    function renderKhoiSlideTo(){
        global $ProductDetail;
        $image_array = explode(",", $ProductDetail['image_array']);
        $html = '';
        foreach($image_array as $i){
            $html = $html . '
            <div class="lg-image">
                <img src="'.$i.'" alt="">
                <a href="'.$i.'" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
            </div>
            ';
        }
        echo $html;

    }

    function renderKhoiSlideThumb(){
        global $ProductDetail;
        $image_array = explode(",", $ProductDetail['image_array']);
        $html = '';
        foreach($image_array as $i){
            $html = $html . '
            <div class="sm-image"><img src="'.$i.'" alt="product image thumb"></div>
            ';
        }
        echo $html;

    }

    function showCompareWishLish(){
        global $ProductDetail;
        $html = '';
        
            $html = $html . '
            <a href="javascript:void(0)" class="Wishlist-product" product-id ="'.$ProductDetail["id"].'">Add to Wishlist</a>
            <a href="javascript:void(0)" class="Compare-product" product-id ="'. $ProductDetail["id"].'">Compare</a>
            ';
        
        echo $html;

    }


    function showDescription(){
        global $ProductDetail;
        $Desc = $ProductDetail['description'];
        echo "$Desc";



    }
    function showPrice(){
        global $ProductDetail;
        $Desc = $ProductDetail['price'];
        echo "$Desc";
    }


    function showid(){
        global $ProductDetail;
        $Desc = $ProductDetail['id'];
        echo "$Desc";

    }
    
    $productId = isset($_GET['ProductId']) ? $_GET['ProductId'] : null;
    if ($productId !== null) {
        $RelatedProducts = service_showRelatedProducts($productId);
        
    }


 




    function ShowRelatedProducts(){
        global $productId;
        $products = null;
        $products = service_showRelatedProducts($productId);
        $html = '';
        foreach($products as $row){
            $html = $html . '
            <div class="col">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">New</span>
                                </div>
                                <a href="singleProduct.php?ProductId='.$row['id'].'">
                                    <img src="'.$row['picture'].'" class="img-fluid" alt="">
                                    
                                </a>

                                <div class="product-action">
                                <ul>
                    
                                <li class="Add-to-cart" product-id ="'. $row["id"].'"><a href="cart.php?cartId='.$row["id"].'"><i class="fa fa-cart-plus"></i></a></li>   
                                
                                    
                                    <li class="Compare-product" product-id ="'. $row["id"].'" ><a href="javascript:void(0)"><i class="fa-solid fa-code-compare" style="color: #000000;"></i></a></li>
                                    <li class="Wishlist-product" product-id ="'. $row["id"].'" ><a href="javascript:void(0)"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="singleProduct.php?ProductId='.$row['id'].'">'.$row['name'].'</a></h3>
                                <p class="product-price"><span class="discounted-price">'.$row['price'].'</span> <span class="main-price discounted">$470.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
        ';
        }
        echo $html;
    }

?>