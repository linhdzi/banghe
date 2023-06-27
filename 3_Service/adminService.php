<?php
require_once './4_DataBase/adminDataBase.php';

function service_getAllProduct(){
    $result = database_getAllProduct();
    return $result;
    
}    

function service_getAllCategory(){
    $result = database_getAllCategory();
    return $result;
    
}  

function service_createBrand($crBrand){
    $result = createBrand($crBrand);
    return $result;
    
}    

function service_deleteBrand($brandId){
    $result = deleteBrand($brandId);
    return $result;
    
}    

?>