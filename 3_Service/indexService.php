<?php
include './4_DataBase/indexDataBase.php';


function service_getProductByCategoryId($id){
    $result = database_getProductByCategoryId($id);
    return $result;
}

function service_getAllCategory(){
    $result = database_getAllCategory();
    return $result;
}






?>