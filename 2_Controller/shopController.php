<?php

require_once './3_Service/shopService.php';






 

    


    
        
        
    
        $Brand = isset($_GET['cateBrand']) ? $_GET['cateBrand'] : null;
        if ($Brand !== null) {
            $CategoryDetail = service_getProductByCategoryBrand($Brand);
            
        }
    // $NumberOfProduct = $_GET['numberOfProductInBrand'];
    // $NumberOfProductInBrand =  service_getNumProducts($Brand);

    
function hienThiDanhMucSanPham(){
    
    $categories = service_getAllCategory();
    $html = '';
    // var_dump($categories);
    foreach($categories as $cate){
    
       
            $html = $html . '
            <li><a href="shop.php?cateBrand='.$cate['name'].'"><i class="fa fa-plus"></i>'.$cate["name"].' <span class="count">('.$cate['totalProduct'].')</span></a></li>
                            
        ';
        
    }
    
    echo $html;

}






function hienthiTheobrand(){
    global $Brand;
    $products = null;
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
                <a href="singleProduct.php?ProductId='.$row['id'].'">
                    <img src="'. $row["picture"].'" class="img-fluid" alt="">
                
                </a>

                <div class="product-action">
                    <ul>
                    
                    <li name="cartId='.$row["id"].'"><a href="cart.php?cartId='.$row["id"].'"><i class="fa fa-cart-plus"></i></a></li>   
                    
                        
                        <li class="Compare-product" product-id ="'. $row["id"].'" ><a href="javascript:void(0)"><i class="fa-solid fa-code-compare" style="color: #000000;"></i></a></li>
                        <li class="Wishlist-product" product-id ="'. $row["id"].'" ><a href="javascript:void(0)"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                </div>
            </div>
              <div class="product-content">
              <h3 class="title"> <a href="singleProduct.php?ProductId='.$row['id'].'"> '. $row["name"].' </a></h3>
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

