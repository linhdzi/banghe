<?php

// Khởi động session


// Lấy thông tin giỏ hàng từ session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();


var_dump($cart);
?>

<!-- Hiển thị danh sách sản phẩm trong giỏ hàng -->

<!-- Hiển thị tổng số lượng sản phẩm và tổng giá tiền trong giỏ hàng -->

