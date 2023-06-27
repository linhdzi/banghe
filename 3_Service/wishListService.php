<?php
require_once './4_DataBase/wishListDataBase.php';


function ServiceGetProductInLP($string_listProduct){
$result = GetProductInLP($string_listProduct);
return $result;


}



?>