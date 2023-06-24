    <?php

    // Khởi động session
    require_once './3_Service/cartService.php';

    // Lấy thông tin giỏ hàng từ session


   if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['cartId'])) {
    $cartid = $_GET['cartId'];
    var_dump($cartid);
}

$_SESSION['cart']= $cartid;

var_dump($_SESSION['cart']);

    ?>

    <!-- Hiển thị danh sách sản phẩm trong giỏ hàng -->

    <!-- Hiển thị tổng số lượng sản phẩm và tổng giá tiền trong giỏ hàng -->

