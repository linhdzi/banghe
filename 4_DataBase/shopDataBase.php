<?php
include 'connection.php';

<<<<<<< HEAD
=======
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

function database_getAllproducts(){
    $sql = "select * from products";

    $result = execute_query($sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        // Hiển thị dữ liệu
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        
    } else {
        echo "<script>console.log('Không tìm thấy danh muc')</script>";
        
    }
    return $data;
}

function database_getProductByCategoryBrand($Brand)
{
    // Tạo truy vấn SQL
        $sql = "SELECT products.name , products.picture , products.price
        FROM products 
        JOIN category_products ON products.id = category_products.product_id
        JOIN categories ON category_products.category_id = categories.id
        where categories.id = '" . $Brand . "';

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
        echo "<script>console.log('Không tìm thấy sản phẩm nào thuoc id ".$Brand."')</script>";
        
    }
    return $data;
}

function database_getAllCategory(){
    // Tạo truy vấn SQL
    $sql = "SELECT * FROM categories";

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
        echo "<script>console.log('Không tìm thấy sản phẩm nào thuoc id ')</script>";
        
    }
    return $data;
}

function database_getNumberofproduct($id){
    // Tạo truy vấn SQL
    $sql = "SELECT count(*)
    FROM products 
    JOIN category_products ON products.id = category_products.product_id
    JOIN categories ON category_products.category_id = categories.id
    where categories.id = " . $id . ";

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
        echo "<script>console.log('Không tìm thấy sản phẩm nào thuoc id ')</script>";
        
    }
    return $data;
}
>>>>>>> about-pp-contant


?>