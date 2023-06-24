<?php
require_once './4_DataBase/shopDataBase.php';



function service_getAllCategory(){
    $result = database_getAllCategory();
    return $result;
}


function service_getProductByCategoryBrand($Brand){
    $result = database_getProductByCategoryBrand($Brand);
    // var_dump($result);
    return $result;
}



?>