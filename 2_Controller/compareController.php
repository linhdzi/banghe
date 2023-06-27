<?php


require_once './3_Service/compareService.php';

if (isset($_GET['ProductId'])) {
    $string_listProduct = $_GET['ProductId'];
}


function showProductToCompare()
{
    global $string_listProduct;
    $products = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($products as $row) {
        $html = $html . '
        <td class="product-image-title">
    <a href="singleProduct.php?ProductId='.$row['id'].'" class="image"><img src="' . $row['picture'] . '" alt="Compare Product"></a>
    <a href="#" class="category">' . $row['brand'] . '</a>
    <a href="#" class="title">' . $row['name'] . '</a>
    
        </td>
    ';
    }
    echo $html;
}

function showDesToCompare()
{
    global $string_listProduct;
    $des = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($des as $row) {
        $html = $html . '
            <td class="pro-desc">
                                                <p>
                                                ' . $row['description'] . '
                                                </p>
                                            </td>
        ';
    }
    echo $html;
}


function showPriceToCompare()
{
    global $string_listProduct;
    $price = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($price as $row) {
        $html = $html . '
            <td class="pro-price">$' . $row['price'] . '</td>
        ';
    }
    echo $html;
}
function showIdToDele()
{
    global $string_listProduct;
    $result = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($result as $row) {
        $html = $html . '
            <td class="Dele" DELEID="'.$row['id'].'"><button><i class="fa fa-trash-o"></i></button></td>
            ';
    }
    echo $html;
}

function showIdtoAdd(){
    global $string_listProduct;
    $result = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach ($result as $row) {
        $html = $html . '
        <td  class="Add-to-cart pro-addtocart" product-id ="'. $row["id"].'"  ><a href="javascript:void(0)" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
            ';
    }
    echo $html;


}



