<?php
include 'connection.php';




// Hàm thực thi truy vấn SQL
function execute_query($query){
    // Kết nối đến CSDL
    $conn = connect();

    // Thực thi truy vấn SQL và lấy kết quả
    $result = mysqli_query($conn, $query);

    // Đóng kết nối tới CSDL
    mysqli_close($conn);

    return $result;
}

// Tạo truy vấn SQL
$sql = "SELECT * FROM products";

// Thực thi truy vấn SQL và lấy kết quả
$result = execute_query($sql);

// Kiểm tra kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
    // Hiển thị dữ liệu
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Tên sản phẩm: " . $row["name"]. " - Giá: " . $row["price"]. "<br>";
    }
} else {
    echo "Không tìm thấy sản phẩm nào!";
}

?>