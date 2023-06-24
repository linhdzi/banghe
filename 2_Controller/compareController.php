<?php


require_once './3_Service/compareService.php';

if (isset($_GET['ProductId'])){
    $string_listProduct = $_GET['ProductId']; 
}


function showProductToCompare(){
global $string_listProduct;
$products = ServiceGetProductInLP($string_listProduct);
    $html = '';
    foreach($products as $row){
        $html = $html . '
        <td class="product-image-title">
    <a href="#" class="image"><img src="'.$row['picture'].'" alt="Compare Product"></a>
    <a href="#" class="category">'.$row['brand'].'</a>
    <a href="#" class="title">'.$row['name'].'</a>
    
        </td>
    ';
    }
    echo $html;



}

function showDesToCompare(){
    global $string_listProduct;
    $des = ServiceGetProductInLP($string_listProduct);
        $html = '';
        foreach($des as $row){
            $html = $html . '
            <td class="pro-desc">
                                                <p>
                                                '.$row['description'].'
                                                </p>
                                            </td>
        ';
        }
        echo $html;
    
    
    
    }

    
function showPriceToCompare(){
    global $string_listProduct;
    $price = ServiceGetProductInLP($string_listProduct);
        $html = '';
        foreach($price as $row){
            $html = $html . '
            <td class="pro-price">$'.$row['price'].'</td>
        ';
        }
        echo $html;
    
    
    
    }
    function showIdToAdd(){
        global $string_listProduct;
        $id = ServiceGetProductInLP($string_listProduct);
            $html = '';
            foreach($id as $row){
                $html = $html . '
                <td class="DeleProduct" pro_id = "14" ><button><i class="fa fa-trash-o"></i></button></td>
            ';
            }
            echo $html;
        
        
        
        }




?>