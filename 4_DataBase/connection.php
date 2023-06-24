<?php

// Hàm kết nối đến CSDL
function connect(){
    $host = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "chairshop_db3.sql";

    // Kết nối đến CSDL
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    return $conn;
}


function connectMenu(){
    $host = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "menudata";

    // Kết nối đến CSDL
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    return $conn;

}

?>