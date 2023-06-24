<?php
require_once 'connection.php';


// Hàm thực thi truy vấn SQL
function execute_query($query)
{
    // Kết nối đến CSDL
    $conn = connect();

    // Thực thi truy vấn SQL và lấy kết quả
    $result = mysqli_query($conn, $query);

    // Đóng kết nối tới CSDL
    mysqli_close($conn);

    return $result;
}

function GetProductInLP($string_listProduct)
{
    // Tạo truy vấn SQL
    $sql = "SELECT products.name , products.picture , products.price,categories.name as brand, products.description
            FROM products 
            JOIN category_products ON products.id = category_products.product_id
            JOIN categories ON category_products.category_id = categories.id
            where products.id  IN (".$string_listProduct.")";

    // Thực thi truy vấn SQL và lấy kết quả
    $result = execute_query($sql);

    // Kiểm tra kết quả truy vấn
    $data = [];
    if (mysqli_num_rows($result) > 0) {
        // Hiển thị dữ liệu
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        
    } else {
        echo "<script>console.log('Không tìm thấy sản phẩm ')script>";
        
    }
    return $data;
}






