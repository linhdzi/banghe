<?php
include 'connection.php';




// Hàm thực thi truy vấn SQL
function execute_query($query){
    // Kết nối đến CSDL
    $conn = connect();

    // Thực thi truy vấn SQL và lấy kết quả
    $result = mysqli_query($conn, $query);

    // Đóng kết nối tới CSDL
    mysqli_close($conn);

    return $result;
}

// Tạo truy vấn SQL
$sql = "SELECT products.name , products.picture , products.price
FROM products 
JOIN category_products ON products.id = category_products.product_id
JOIN categories ON category_products.category_id = categories.id
where categories.id ='1';

";

// Thực thi truy vấn SQL và lấy kết quả
$result = execute_query($sql);

// Kiểm tra kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
    // Hiển thị dữ liệu
    while($row = mysqli_fetch_assoc($result)) {
        echo '
<div class="col-lg-3 col-md-4 col-sm-6">
<!--  Single Grid product Start -->
<div class="single-grid-product mb-40">
    <div class="product-image">
        <div class="product-label">
            <span>-20%</span>
        </div>
        <a href="single-product.html">
            <img src="'. $row["picture"].'" class="img-fluid" alt="">
          
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
        <h3 class="title"> <a href="single-product.html"> '. $row["name"].' </a></h3>
        <p class="product-price"><span class="discounted-price">'. $row["price"].'$ -</span> <span class="main-price discounted">'. $row["price"].'$</span></p>
    </div>
</div>
<!--  Single Grid product End -->
</div>

';
    }
} else {
    echo "Không tìm thấy sản phẩm nào!";
}

?>