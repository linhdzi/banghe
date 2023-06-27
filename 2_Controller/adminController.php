<?php

require_once './3_Service/adminService.php';






 

    


    
        
        
    

function showCate(){
    
    $categories = service_getAllCategory();
    $html = '';
    // var_dump($categories);
    foreach($categories as $cate){
    
       
            $html = $html . '
            
            <tr id="cart-table">
            <td class="pro-title"><a href="#">'.$cate["name"].'</a></td>
            <td ><a href="admin.php?cateBrand='.$cate['id'].'" ><i class="fa fa-trash-o"></i></a></td>
            
          
           
        </tr>
                         
        ';
        
    }
    
    echo $html;

}


if (isset($_GET['cateBrand'])) {
    $deleBrand = $_GET['cateBrand'];
    service_deleteBrand($deleBrand);
  }


if (isset($_GET['Brand'])) {
    $createBrand = $_GET['Brand'];
    service_createBrand($createBrand);
  }


  function showProduct(){
    
    $products = service_getAllProduct();
    $html = '';
    $cart_total = 0;
    foreach ($products as $row) {
        $total = $row['price'] * 1;
        $cart_total += $total;
        $html = $html . '
        <tr id="cart-table">
            <td class="pro-thumbnail"><a href="#"><img src="'.$row['picture'].'" alt="Product"></a></td>
            <td class="pro-title"><a href="#">'.$row['name'].'</a></td>
            <td class="pro-price price"><span>$'.$row['price'].'</span></td>
            
            
            <td class="Remove-from-cart" product-id="'.$row['id'].'"><a href="javascript:void(0)" onclick="removeCartItem(this)"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        ';
    }
   
    echo $html;
}

?>

            
         