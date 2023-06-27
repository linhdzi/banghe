    <?php


    require_once './3_Service/cartService.php';

    if (isset($_GET['ProductId'])) {
        $string_listProduct = $_GET['ProductId'];
    }
    

    function showProductToCart(){
        global $string_listProduct;
        $products = ServiceGetProductInLP($string_listProduct);
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
                <td class="pro-quantity">
                    <div class="pro-qty"><input type="number" value="1" onchange="updateCartItem(this)"></div>
                </td>
                <td class="pro-subtotal total"><span>$'.$total.'</span></td>
                <td class="Remove-from-cart" product-id="'.$row['id'].'"><a href="javascript:void(0)" onclick="removeCartItem(this)"><i class="fa fa-trash-o"></i></a></td>
            </tr>
            ';
        }
        $html .= '<tr><td colspan="4">Tổng giá trị:</td><td class="cart-total" colspan="2"><span>$'.$cart_total.'</span></td></tr>';
        echo $html;
    }



    ?>


