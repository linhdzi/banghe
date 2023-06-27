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



function database_getAllProduct()
{
    // Tạo truy vấn SQL
      
            $sql = "SELECT distinct products.name , products.picture , products.price,products.id
            FROM products 
            JOIN category_products ON products.id = category_products.product_id
            JOIN categories ON category_products.category_id = categories.id";
        
        
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

function database_getAllCategory(){
    // Tạo truy vấn SQL
    // $sql = "SELECT * FROM categories";
    $sql = "
        select c.name , c.id
        from categories as c
        left join category_products as cp on c.id = cp.category_id 
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

function createBrand($crBrand) {
    // Kiểm tra xem tên thương hiệu đã tồn tại hay chưa
    $sql_check = "SELECT * FROM categories WHERE name = '" . $crBrand . "'";
    $result_check = execute_query($sql_check);
  
    if (mysqli_num_rows($result_check) > 0) {
      echo "Lỗi: Tên thương hiệu đã tồn tại!";
    } else {
      // Tạo truy vấn SQL
      $sql_insert = "INSERT INTO categories (name) VALUES ('" . $crBrand . "')";
    
      // Thực thi truy vấn SQL và lấy kết quả
      $result_insert = execute_query($sql_insert);
    
      // Kiểm tra kết quả truy vấn
      if ($result_insert === true) {
        echo "Thêm thương hiệu thành công!";
      } else {
        echo "Lỗi: ";
      }
    }
  }


  function deleteBrand($brandId) {
    // Tạo truy vấn SQL
    $sql = "DELETE FROM categories WHERE id = " . $brandId.";
    ";
    
    // Thực thi truy vấn SQL và lấy kết quả
    $result = execute_query($sql);
    
    // Kiểm tra kết quả truy vấn
    if ($result === true) {
      echo "Xóa thương hiệu thành công!";
    } else {
      echo "Lỗi: " ;
    }
  }