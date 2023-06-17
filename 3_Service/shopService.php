<?php
include './4_DataBase/shopDataBase.php';




function service_getAllProducts(){
    $result = database_getAllproducts();
    return $result;
}

function service_getAllCategory(){
    $result = database_getAllCategory();
    return $result;
}
function service_getNumProducts($id){
    $result=database_getNumberofproduct($id);
    return $result;
}


function service_getProductByCategoryBrand($Brand){
    $result = database_getProductByCategoryBrand($Brand);
    // var_dump($result);
    return $result;
}

?>