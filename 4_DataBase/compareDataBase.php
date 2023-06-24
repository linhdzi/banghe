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
    

    $sql = "SELECT distinct p.id, p.name , p.picture , p.price, c.name as brand, p.description
            FROM products as p
            join category_products as cp ON p.id = cp.product_id
            JOIN categories as c ON c.id = (select category_id from category_products where product_id = p.id limit 1)
            where p.id  IN (".$string_listProduct.")";
        // var_dump($sql);

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






