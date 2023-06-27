<?php
require_once './4_DataBase/cartDataBase.php';

function ServiceGetProductInLP($string_listProduct){
    $result = GetProductInLP($string_listProduct);
    return $result;
    
}    


?>