<?php
require_once './4_DataBase/singleProductDataBase.php';



function service_getProductsById($id){
    $result = database_getProductDetail($id);
    return $result;
}

function service_showRelatedProducts($productId){
    $result =database_showRelatedProducts($productId);
    // var_dump($result);
    return $result;
}


?>