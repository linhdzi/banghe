<?PHP

include './3_Service/indexService.php';



function hienThiDanhMucSanPham(){
    
    $categories = service_getAllCategory();
    $html = '';
    foreach($categories as $cate){
        $productInCategories = service_getProductByCategoryId($cate['id']);
        if(count($productInCategories) > 0){
            $html = $html . '
        <!--Product section start-->
        <div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-15">
                            <h2>'.$cate['name'].'</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-content" style="padding-top:40px ;">
                    <div id="home" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                            '.hienThiSanPham_as_string($cate['id']).'
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
        <!--Product section end-->
        ';
        }
        
    }
    
    echo $html;

}

function hienThiSanPham_abc($id){
    $products = service_getProductByCategoryId($id);
    foreach($products as $row){
        echo '
            <div class="col-lg-3 col-md-4 col-sm-6">
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
            </div>
    
            ';
    }
}

function hienThiSanPham_as_string($id){
    $products = service_getProductByCategoryId($id);
    $html = '';
    foreach($products as $row){
        $html = $html . '
            <div class="col-lg-3 col-md-4 col-sm-6">
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
            </div>
    
            ';
    }
    return $html;
}











?>