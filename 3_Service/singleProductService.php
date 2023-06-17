<?php
require_once './4_DataBase/singleProductDataBase.php';



function service_getProductsById($id){
    $result = database_getProductDetail($id);
    return $result;
}




?>