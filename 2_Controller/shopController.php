<?php

include './3_Service/shopService.php';
 





 

    
        function hienthiAllsanpham(){
            $products = service_getAllProducts();
            foreach($products as $row){
                echo '
                <div class="col-lg-4 col-md-6 col-sm-6">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">
                        <div class="product-label">
                            <span>-20%</span>
                        </div>
                        <a href="single-product.php">
                            <img src="'. $row["picture"].'" class="img-fluid" alt="">
                        
                        </a>
        
                        <div class="product-action">
                            <ul>
                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                
                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"> <a href="single-product.html"> '. $row["name"].' </a></h3>
                        <p class="product-price"><span class="discounted-price">'. $row["price"].'$ -</span> <span class="main-price discounted">'. $row["price"].'$</span></p>
                    </div>
                </div>
                <!--  Single Grid product End -->
                <!--  Single Grid product End -->
            </div>
            ';
            }
        }
    
   



    
       
        
    
    


    
function hienThiDanhMucSanPham(){
    
    $categories = service_getAllCategory();
    $html = '';
    foreach($categories as $cate){
        $numberOfProducts = service_getNumProducts($cate['id']);
        if(count($numberOfProducts) > 0){
            $html = $html . '
            <li><a href=""><i class="fa fa-plus"></i>'.$cate["id"].' <span class="count"></span></a></li>
                            
        ';
        
        }
        
    }
    
    echo $html;

}

function hienthiTheobrand($Brand){
    $products = service_getProductByCategoryBrand($Brand);
    $html = '';
    foreach($products as $row){
        $html = $html . '
        <div class="col-lg-4 col-md-6 col-sm-6">
        <!--  Single Grid product Start -->
        <div class="single-grid-product mb-40">
            <div class="product-image">
                <div class="product-label">
                    <span>-20%</span>
                </div>
                <a href="single-product.php">
                    <img src="'. $row["picture"].'" class="img-fluid" alt="">
                
                </a>

                <div class="product-action">
                    <ul>
                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                        
                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                </div>
            </div>
              <div class="product-content">
              <h3 class="title"> <a href="single-product.html"> '. $row["name"].' </a></h3>
                <p class="product-price"><span class="discounted-price">'. $row["price"].'$ -</span> <span class="main-price discounted">'. $row["price"].'$</span></p>
            </div>
        </div>
        <!--  Single Grid product End -->
        <!--  Single Grid product End -->
    </div>
    ';
    }
    return $html;
}

