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



function database_getProductDetail($id)
{
    // Tạo truy vấn SQL
        $sql = "SELECT *
        FROM products  where id = ".$id.";

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
        return reset($data);
    } else {
        echo "<script>console.log('Không tìm thấy sản phẩm nào thuoc id ".$id."')</script>";
        return null;
    }
    // return reset($data);
}

function database_showRelatedProducts($productId){
    // Tạo truy vấn SQL
    // $sql = "SELECT products.picture ,products.price,products.name
    // FROM products 
    // JOIN category_products ON products.id = category_products.product_id
    // JOIN categories ON category_products.category_id = categories.id
    // where products.id = '" . $productId. "';

    // ";

    $sql = "

        select p1.*
        from products as p1
        join category_products as cp1 on p1.id = cp1.product_id
        where cp1.category_id in (    
            select cp.category_id
            from category_products as cp 
            where cp.product_id = ".$productId."
        )
    ";
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
        echo "<script>console.log('Không tìm thấy sản phẩm nào thuoc brand ')</script>";
        
    }
    
    return $data;
}





?>