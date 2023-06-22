<?php
require_once 'connection.php';


// Hàm thực thi truy vấn SQL
function execute_query1($query)
{
    // Kết nối đến CSDL
    $conn = connect();

    // Thực thi truy vấn SQL và lấy kết quả
    $result = mysqli_query($conn, $query);

    // Đóng kết nối tới CSDL
    mysqli_close($conn);

    return $result;
}

function database_getProductToCartById($id)
{
    // Tạo truy vấn SQL
        $sql = "SELECT * FROM products where id = '.$id.';
        

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
        echo "<script>console.log('Không tìm thấy sản phẩm ')script>";
        
    }
    return $data;
}



