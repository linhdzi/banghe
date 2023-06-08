<?PHP

include './3_Service/indexService.php';
$name = "";

echo '
<div class="col-lg-3 col-md-4 col-sm-6">
<!--  Single Grid product Start -->
<div class="single-grid-product mb-40">
    <div class="product-image">
        <div class="product-label">
            <span>-20%</span>
        </div>
        <a href="single-product.html">
            <img src="htmldemo.net/nelson/nelson/assets/images/product/product-1.jpg" class="img-fluid" alt="">
          
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
        <h3 class="title"> <a href="single-product.html"> '.$name.' </a></h3>
        <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
    </div>
</div>
<!--  Single Grid product End -->
</div>

';



?>