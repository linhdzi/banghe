<?php
require_once 'connection.php';


// Hàm thực thi truy vấn SQL
function execute_query($query)
{
    // Check if the query is not empty
    if (!empty($query)) {
        // Connect to the database
        $conn = connect();

        // Execute the SQL query and get the result
        $result = mysqli_query($conn, $query);

        // Close the database connection
        mysqli_close($conn);

        return $result;
    } else {
        // Handle the case when the query is empty
        return false;
    }
}

function GetProductInLP($string_listProduct)
{
    // Tạo truy vấn SQL
    

    $sql = '';
    if($string_listProduct == null){
        echo "<script>alert('Thông báo ko có sản phẩm nào');</script>";
    }
    else{
        $sql = 
        "SELECT distinct p.id, p.name , p.picture , p.price, c.name as brand, p.description
                FROM products as p
                join category_products as cp ON p.id = cp.product_id
                JOIN categories as c ON c.id = (select category_id from category_products where product_id = p.id limit 1)
                where p.id  IN (".$string_listProduct.")";

    }




        // var_dump($sql);

    // Thực thi truy vấn SQL và lấy kết quả
    $result = execute_query($sql);

// Kiểm tra kết quả truy vấn
$data = [];
if (is_bool($result) && !$result) {
    // Handle the case when $result is false
    echo "<script>console.log('Không tìm thấy sản phẩm')</script>";
} else {
    if (mysqli_num_rows($result) > 0) {
        // Hiển thị dữ liệu
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
    } else {
        echo "<script>console.log('Không tìm thấy sản phẩm')</script>";
    }
}
return $data;
}






