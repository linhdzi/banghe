<?php
require_once './3_Service/headerService.php';

function ShowMenu (){
    $Menu = ServiceAllMenu();
    $html = '';
    foreach($Menu as $Mn){
        $html = $html .  '
        <li><a href="'.$Mn['link'].'">'.$Mn['name'].'</a></li>
    ';
    }
    echo $html;
} 

  // find product by brand insert
if (isset($array['searh'])) {
    $value = $array['searh'];
    // Xử lý giá trị
    
}
?>