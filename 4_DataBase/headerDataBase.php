<?php
require_once 'connection.php';


// Hàm thực thi truy vấn SQL
function execute_query1($query)
{
    // Kết nối đến CSDL
    $conn = connectMenu();

    // Thực thi truy vấn SQL và lấy kết quả
    $result = mysqli_query($conn, $query);

    // Đóng kết nối tới CSDL
    mysqli_close($conn);

    return $result;
}

function AllMenu()
{
    // Tạo truy vấn SQL
    $sql = "select * from menunav";


    // Thực thi truy vấn SQL và lấy kết quả
    $result = execute_query1($sql);

    // Kiểm tra kết quả truy vấn
    $data = [];
    if (mysqli_num_rows($result) > 0) {
        // Hiển thị dữ liệu
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        
    } else {
        echo "<script>console.log('error')</script>";
        
    }
    return $data;
}
function searchByBrand($BrandName) 
{
    // Tạo truy vấn SQL
        $sql = "SELECT products.name , products.picture , products.price,products.id
        FROM products 
        JOIN category_products ON products.id = category_products.product_id
        JOIN categories ON category_products.category_id = categories.id
        where categories.name = '" . $BrandName . "';

        ";

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
        echo "<script>console.log('Không tìm thấy sản phẩm nào</script>";
        
    }
    return $data;
}


