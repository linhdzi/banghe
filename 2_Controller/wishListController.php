<?php


require_once './3_Service/WishlistService.php';

if (isset($_GET['ProductId'])) {
    $string_listProduct = $_GET['ProductId'];
} else {
    $string_listProduct = null; // hoặc giá trị khác tùy vào ý định của bạn
};


function showProductToWishLish()
{
    global $string_listProduct;
    $products = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($products as $row) {
        $html = $html . '
        <tr>
           <td class="pro-thumbnail"><a href="singleProduct.php?ProductId='.$row['id'].'"><img src="'.$row['picture'].'" alt="Product"></a></td>
           <td class="pro-title"><a href="singleProduct.php?ProductId='.$row['id'].'">'.$row['name'].'</a></td>
           <td class="pro-price"><span>$'.$row['price'].'</span></td>
           
           <td class="Add-to-cart" product-id ="'. $row["id"].'"><button class="btn">Add to cart</button></td>

           <td class="Remove-from-wishlist"  product-id= "'.$row['id'].'"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>
       </tr>
    ';
    }
    echo $html;
}



