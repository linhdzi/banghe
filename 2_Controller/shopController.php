<?php

require_once './3_Service/shopService.php';






 

    
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
    
   



    
        
        
    
        $Brand = isset($_GET['cateBrand']) ? $_GET['cateBrand'] : null;
        if ($Brand !== null) {
            $CategoryDetail = service_getProductByCategoryBrand($Brand);
            
        } else {
            
        }
    // $NumberOfProduct = $_GET['numberOfProductInBrand'];
    // $NumberOfProductInBrand =  service_getNumProducts($Brand);

    
function hienThiDanhMucSanPham(){
    
    $categories = service_getAllCategory();
    $html = '';
    foreach($categories as $cate){
    $numberOfProducts = service_getNumProducts($cate['id']);
        if(count($numberOfProducts) > 0){
            $html = $html . '
<<<<<<< HEAD
            <li><a href="/bangghe/shop.php"><i class="fa fa-plus"></i>'.$cate["name"].' <span class="count"></span></a></li>
=======
            <li><a href="shop.php?cateBrand='.$cate['name'].'"><i class="fa fa-plus"></i>'.$cate["name"].' <span class="count"></span></a></li>
>>>>>>> 485ea429732a35a96fd997b6b0d605acc581f285
                            
        ';
        
        }
        
    }
    
    echo $html;

}

<<<<<<< HEAD
function hienthiTheobrand(){
     global $getProductById;
    $products = service_getProductByCategoryBrand($getProductById);
=======





function hienthiTheobrand(){
    global $Brand;
    $products = null;
    $products = service_getProductByCategoryBrand($Brand);
>>>>>>> 485ea429732a35a96fd997b6b0d605acc581f285
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
                <a href="singleProduct.php?ProductId='.$row['id'].'">
                    <img src="'. $row["picture"].'" class="img-fluid" alt="">
                
                </a>

                <div class="product-action">
                    <ul>
                        <li name="cart"><a href="javascriptvoid:(0)"><i class="fa fa-cart-plus"></i></a></li>
                        
                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                </div>
            </div>
              <div class="product-content">
              <h3 class="title"> <a href="singleProduct.php"> '. $row["name"].' </a></h3>
                <p class="product-price"><span class="discounted-price">'. $row["price"].'$ -</span> <span class="main-price discounted">'. $row["price"].'$</span></p>
            </div>
        </div>
        <!--  Single Grid product End -->
        <!--  Single Grid product End -->
    </div>
    ';
    }
    echo $html;
}



?>
