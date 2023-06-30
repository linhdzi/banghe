<?php
require_once 'connection.php';
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



function database_getProductByCategoryBrand($Brand)
{
    // Tạo truy vấn SQL
        $sql = '';
        if($Brand == null){
            $sql = "SELECT distinct products.name , products.picture , products.price,products.id
            FROM products 
            JOIN category_products ON products.id = category_products.product_id
            JOIN categories ON category_products.category_id = categories.id";
        }
        else{
            $sql = "SELECT distinct products.name , products.picture , products.price,products.id
            FROM products 
            JOIN category_products ON products.id = category_products.product_id
            JOIN categories ON category_products.category_id = categories.id
            where categories.name = '" . $Brand . "';
            ";

        }
        
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
    // $sql = "SELECT * FROM categories";
    $sql = "
        select c.name,count(1) as totalProduct
        from categories as c
        join category_products as cp on c.id = cp.category_id 
        group by c.name
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



